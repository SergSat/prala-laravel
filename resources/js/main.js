
// ------ Hamburger Menu -----
(function ToggleHamburgerMenu() {
  const hamburgerBtnOpen = document.getElementById('hamburger-button');
  const mobileMenu = document.getElementById('mobile-menu');

  if (!hamburgerBtnOpen || !mobileMenu) return;

  const toggleMenu = () => {
    mobileMenu.classList.toggle('-translate-x-full');
    document.body.classList.toggle('overflow-hidden');
    hamburgerBtnOpen.classList.toggle('--pr-toggle-btn')
  };

  hamburgerBtnOpen.addEventListener('click', toggleMenu);
})();


//------ Autocomplete Search -----
(function () {
  const searchForm = document.querySelector("#search-form");
  const searchInput = document.querySelector("#simple-search");
  const autocompleteList = document.querySelector("#autocompleteList");

  if ((!searchInput, !autocompleteList)) return;

  const items = ["Тести з хімчистки", "Тести з прання", "Тести зі складання", "Тести з прибирання"];

  searchInput.addEventListener("focus", () => {
    searchForm.classList.remove("w-auto");
    searchForm.classList.add(
      "sm:z-0",
      "sm:static",
      "sm:bg-transparent",
    );
    searchInput.classList.add("max-w-none");
  });

  searchInput.addEventListener("input", () => {
    const inputValue = searchInput.value.toLowerCase();
    autocompleteList.innerHTML = "";
    const filteredItems = items.filter((item) =>
      item.toLowerCase().includes(inputValue),
    );

    if (filteredItems.length > 0 && inputValue !== "") {
      autocompleteList.classList.remove("hidden");
      filteredItems.forEach((item) => {
        const listItem = document.createElement("li");
        listItem.classList.add(
          "py-2",
          "px-3",
          "border-b",
          "border-b-pr-blue",
          "cursor-pointer",
          "first-of-type:pt-4",
          "last-of-type:border-none",
          "hover:bg-pr-gray-soft",
          "hover:text-gray-900"
        );
        listItem.textContent = item;
        listItem.onclick = () => {
          searchInput.value = item;
          autocompleteList.classList.add("hidden");
        };
        autocompleteList.appendChild(listItem);
      });
    } else {
      autocompleteList.classList.add("hidden");
    }
  });

  searchInput.addEventListener("blur", () => {
    setTimeout(() => {

      autocompleteList.classList.add("hidden");
      searchForm.classList.remove(
        "py-2",
        "px-3",
        "border-b",
        "border-b-pr-blue",
        "cursor-pointer",
        "first-of-type:pt-4",
        "last-of-type:border-none",
        "hover:bg-pr-gray-soft",
        "hover:text-gray-900"
      );
    }, 200);
  });
})();


// ------ Tabs for Votes -----
(function () {
  let tabs = document.querySelectorAll('.tab');
  let indicator = document.querySelector('.--pr-indicator');
  let panels = document.querySelectorAll('.tab-panel');
  let parentRect = tabs[0].parentElement.getBoundingClientRect();

  if (!tabs.length || !indicator || !panels.length) {
    console.error('Необхідні елементи не знайдено на сторінці');
    return;
  }

  let initialTabWidth = tabs[0].getBoundingClientRect().width;
  let initialTabLeft = tabs[0].getBoundingClientRect().left - parentRect.left;

  indicator.style.width = initialTabWidth + 'px';
  indicator.style.left = initialTabLeft + 'px';

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(otherTab => {
        if (otherTab !== tab && otherTab.classList.contains('text-pr-blue')) {
          otherTab.classList.remove('text-pr-blue');
          otherTab.classList.add('text-gray-800');
        }
      });

      if (!tab.classList.contains('text-pr-blue')) {
        tab.classList.remove('text-gray-800');
        tab.classList.add('text-pr-blue');
      } else {
        tab.classList.add('text-gray-800');
        tab.classList.remove('text-pr-blue');
      }

      let tabRect = tab.getBoundingClientRect();
      let tabTarget = tab.getAttribute('aria-controls');

      indicator.style.width = tabRect.width + 'px';
      indicator.style.left = tabRect.left - parentRect.left + 'px';

      panels.forEach(panel => {
        let panelId = panel.getAttribute('id');
        if (panelId === tabTarget) {
          panel.classList.remove('hidden');
        } else {
          panel.classList.add('hidden');
        }
      });
    });
  });
})();