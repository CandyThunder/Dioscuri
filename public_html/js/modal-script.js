document.addEventListener("DOMContentLoaded", () => {
  // Select footer links
  const modalLinks = document.querySelectorAll(".footer-mid-2 a");

  // Map footer link hrefs to modal container selectors
  const modalMap = {
    "components/impressum.php": "#impressum-modal",
    "components/datenschutz.php": "#datenschutz-modal"
  };

  // Handle modal links
  modalLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const href = link.getAttribute("href");
      const modalSelector = modalMap[href];

      if (!modalSelector) {
        console.error(`No modal selector mapped for href: ${href}`);
        return;
      }

      const targetModal = document.querySelector(modalSelector);
      if (!targetModal) {
        console.error(`No modal found for selector: ${modalSelector}`);
        return;
      }

      // Close all modals and reset body scroll
      document.querySelectorAll(".modal-container").forEach((modal) => {
        modal.classList.add("hidden");
      });
      document.body.style.overflow = "auto"; // Re-enable body scroll

      // Show target modal and prevent body scroll
      targetModal.classList.remove("hidden");
      document.body.style.overflow = "hidden"; // Lock body scroll

      // Attach close button event listener
      const closeButton = targetModal.querySelector(".modal-close-button");
      if (closeButton) {
        closeButton.addEventListener("click", () => {
          targetModal.classList.add("hidden");
          document.body.style.overflow = "auto"; // Re-enable body scroll
        });
      } else {
        console.error(`No close button found in modal: ${modalSelector}`);
      }
    });
  });

  // Close modal when clicking outside content
  document.querySelectorAll(".modal-container").forEach((modal) => {
    modal.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.classList.add("hidden");
        document.body.style.overflow = "auto"; // Re-enable body scroll
      }
    });
  });
});