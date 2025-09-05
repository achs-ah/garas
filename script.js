  document.addEventListener("DOMContentLoaded", function () {
    const burgerMenu = document.querySelector('[data-role="BurgerMenu"]');
    const mobileMenu = document.querySelector('[data-role="MobileMenu"]');
    const closeMenu = document.querySelector('[data-role="CloseMobileMenu"]');

    if (burgerMenu && mobileMenu && closeMenu) {
      // Open menu
      burgerMenu.addEventListener("click", () => {
        mobileMenu.style.display = "block";
      });

      // Close menu
      closeMenu.addEventListener("click", () => {
        mobileMenu.style.display = "none";
      });
    }
  });

