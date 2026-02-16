const button = document.getElementById("trigger");
const mobileMenu = document.querySelector(".menu-mobile");
const menuItems = document.querySelectorAll(".menu-mobile li a");

button.addEventListener("click", () => {
  mobileMenu.classList.toggle("hidden");
});

menuItems.forEach(item => {
  item.addEventListener("click", () => {
    mobileMenu.classList.add("hidden");
  });
});

// Reusable smooth scroll function with offset
function smoothScrollTo(targetId, extraOffset = 50) {
  const targetSection = document.querySelector(targetId);
  if (!targetSection) return;

  const header = document.querySelector('header');
  const headerHeight = header ? header.offsetHeight : 0;
  
  // You can make the extra offset customizable per call if needed
  const totalOffset = headerHeight + extraOffset;

  const sectionPosition = targetSection.getBoundingClientRect().top + window.scrollY;
  
  window.scrollTo({
    top: sectionPosition - totalOffset,
    behavior: 'smooth'
  });
}

// 1. Menu links
const menuLinks = document.querySelectorAll('#menu-desktop li a');

menuLinks.forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href');   // "#contact", "#about", etc.
    smoothScrollTo(targetId, 50);                 // ← smaller offset for nav usually
  });
});

// 2. Call-to-action button(s)
// Adjust the selector(s) to match your HTML
const ctaButtons = document.querySelectorAll('.mehr .no-hash');

ctaButtons.forEach(btn => {
  btn.addEventListener('click', function (e) {
    // Only intercept if it's an anchor link
    const targetId = this.getAttribute('href');
    if (targetId && targetId.startsWith('#')) {
      e.preventDefault();
      smoothScrollTo(targetId, 50);               // ← maybe bigger offset here if you want
    }
    // If the button does something else (form submit, modal, etc.) → it still works normally
  });
});

// 3. Handle direct page load with hash in URL (same logic)
window.addEventListener('load', () => {
  if (window.location.hash) {
    smoothScrollTo(window.location.hash, 80);
  }
});