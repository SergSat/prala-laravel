
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
      "z-50",
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
          "p-2",
          "b-white",
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

  // Скрыть список при потере фокуса
  searchInput.addEventListener("blur", () => {
    setTimeout(() => {
      // Timeout для обработки клика по элементу списка
      autocompleteList.classList.add("hidden");
      searchForm.classList.remove(
        "p-2",
        "b-white",
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
  document.addEventListener("DOMContentLoaded", function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    if (!tabLinks || !tabContents) {
      return;
    }

    const tabLinksArray = Array.from(tabLinks);
    const tabContentsArray = Array.from(tabContents);

    document.addEventListener('click', function (event) {
      const clickedTabLink = event.target.closest('.tab-link');
      if (!clickedTabLink) {
        return;
      }

      event.preventDefault();

      tabLinksArray.forEach(function (link) {
        link.classList.remove('--pr-tab-active');
      });
      tabContentsArray.forEach(function (tabContent) {
        tabContent.classList.add('hidden');
      });

      clickedTabLink.classList.add('--pr-tab-active');

      const targetTabId = clickedTabLink.getAttribute('href').substring(1);
      const targetTabContent = document.getElementById(targetTabId);

      targetTabContent.classList.remove('hidden');
    });
  });
})();

