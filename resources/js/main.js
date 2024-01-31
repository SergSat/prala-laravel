const ToggleHamburgerMenu = () => {
  const hamburgerBtnOpen = document.getElementById('hamburger-button');
  const mobileMenu = document.getElementById('mobile-menu');

  if (!hamburgerBtnOpen || !mobileMenu) return;

  const toggleMenu = () => {
    mobileMenu.classList.toggle('-translate-x-full');
    document.body.classList.toggle('overflow-hidden');
    hamburgerBtnOpen.classList.toggle('--pr-toggle-btn')
  };

  hamburgerBtnOpen.addEventListener('click', toggleMenu);
};

document.addEventListener('DOMContentLoaded', ToggleHamburgerMenu);


// Add hover:text-pr-blueviolet if element has --pr-active class
(function () {
  const linkElements = document.querySelectorAll('a');

  linkElements.forEach((linkElement) => {
    if (linkElement.classList.contains('--pr-active')) {
      linkElement.classList.add('hover:text-pr-blueviolet');
    } else {
      linkElement.classList.remove('hover:text-pr-blueviolet');
    }
  });
})()