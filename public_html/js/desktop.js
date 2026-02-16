document.addEventListener("DOMContentLoaded", () => {
  // Select app-opening buttons (exclude those inside .app)
  const appOpenButtons = document.querySelectorAll(".app-icon:not(.window-button)");
  // Select close buttons
  const closeButtons = document.querySelectorAll(".window-button");

  if (appOpenButtons.length === 0 && closeButtons.length === 0) {
    console.error(
      'No elements with class "app-icon" or "window-button" found. Check if PHP injection completed.'
    );
    return;
  }

  // Handle app-opening buttons
  appOpenButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const appSelector = button.dataset.app;
      const targetApp = document.querySelector(appSelector);

      if (!targetApp) {
        console.error(
          `No element found for selector: ${appSelector}. Ensure PHP-injected content includes ${appSelector}.`
        );
        return;
      }

      // Close all apps except the target
      document.querySelectorAll(".app1, .app2").forEach((app) => {
        if (app !== targetApp) {
          app.classList.add("hidden");
        }
      });

      // Toggle the target app
      targetApp.classList.toggle("hidden");
    });
  });

  // Handle close buttons
  closeButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const appSelector = button.dataset.app;
      const targetApp = document.querySelector(appSelector);

      if (!targetApp) {
        console.error(
          `No element found for selector: ${appSelector}. Ensure PHP-injected content includes ${appSelector}.`
        );
        return;
      }

      // Only hide the target app
      targetApp.classList.add("hidden");
    });
  });

  // Power button logic
  const screen = document.getElementById("idk");
  const powerButton = document.getElementById("power");
  let isPoweredOn = true;

  powerButton.addEventListener("click", () => {
    if (isPoweredOn) {
      screen.classList.add("power-off");
    } else {
      screen.classList.remove("power-off");
    }
    isPoweredOn = !isPoweredOn;
  });

  screen.addEventListener("animationend", () => {
    if (!isPoweredOn) {
      screen.classList.remove("power-off");
      screen.classList.add("power-off");
    }
  });
});