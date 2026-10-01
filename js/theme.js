/* Dark mode toggle. Applies any saved preference immediately (this
   script is loaded in <head>, before first paint, to avoid a flash
   of the wrong theme), then wires up the header button. The choice
   is stored in localStorage, so it holds across every page and, via
   the storage event, syncs instantly to any other tab already open
   on the site. No saved preference means "follow the OS setting",
   handled by the prefers-color-scheme rules in site.css. */
(function () {
  "use strict";

  var STORAGE_KEY = "theme";
  var root = document.documentElement;

  function apply(theme) {
    if (theme === "dark" || theme === "light") {
      root.setAttribute("data-theme", theme);
    } else {
      root.removeAttribute("data-theme");
    }
  }

  function getSaved() {
    try {
      return localStorage.getItem(STORAGE_KEY);
    } catch (e) {
      return null;
    }
  }

  function setSaved(theme) {
    try {
      localStorage.setItem(STORAGE_KEY, theme);
    } catch (e) {
      /* private browsing / storage disabled: toggle still works for this page load */
    }
  }

  // Apply any saved preference right away, before the page paints.
  apply(getSaved());

  function effectiveTheme() {
    var explicit = root.getAttribute("data-theme");
    if (explicit) return explicit;
    var prefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;
    return prefersDark ? "dark" : "light";
  }

  function toggle() {
    var next = effectiveTheme() === "dark" ? "light" : "dark";
    apply(next);
    setSaved(next);
  }

  document.addEventListener("DOMContentLoaded", function () {
    var btn = document.getElementById("themeToggle");
    if (btn) btn.addEventListener("click", toggle);
  });

  // Keep every open tab on this site in sync with the latest choice.
  window.addEventListener("storage", function (e) {
    if (e.key === STORAGE_KEY) apply(e.newValue);
  });
})();
