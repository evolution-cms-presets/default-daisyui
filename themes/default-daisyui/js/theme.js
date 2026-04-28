(function () {
  var storageKey = 'evo.defaultDaisyui.theme';
  var root = document.documentElement;
  var select = document.querySelector('[data-theme-select]');
  var toggle = document.querySelector('[data-theme-toggle]');

  function setTheme(theme) {
    root.setAttribute('data-theme', theme);

    if (select) {
      select.value = theme;
    }

    if (toggle) {
      toggle.checked = theme === 'dark';
    }

    try {
      window.localStorage.setItem(storageKey, theme);
    } catch (error) {
      // Some browsers block localStorage in private contexts.
    }
  }

  function initialTheme() {
    try {
      return window.localStorage.getItem(storageKey) || 'light';
    } catch (error) {
      return 'light';
    }
  }

  setTheme(initialTheme());

  if (select) {
    select.addEventListener('change', function (event) {
      setTheme(event.target.value);
    });
  }

  if (toggle) {
    toggle.addEventListener('change', function (event) {
      setTheme(event.target.checked ? 'dark' : 'light');
    });
  }
})();
