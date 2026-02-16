document.addEventListener('DOMContentLoaded', function () {
  var anim = lottie.loadAnimation({
    container: document.getElementById('lottie-con'),
    path: './assets/images/arrow-down.json',
    renderer: 'svg',
    loop: true,
    autoplay: true
  });
});

document.addEventListener('DOMContentLoaded', () => {
  // Select all input fields with class .input-text
  const inputs = document.querySelectorAll('.contact-form .input-text');

  // Function to check if input is not empty and toggle .not-empty class
  const updateInputState = (input) => {
    if (input.value.trim() !== '') {
      input.classList.add('not-empty');
    } else {
      input.classList.remove('not-empty');
    }
  };

  // Add event listeners for each input
  inputs.forEach((input) => {
    // Check initial state (e.g., for pre-filled fields)
    updateInputState(input);

    // Update on input (as user types)
    input.addEventListener('input', () => {
      updateInputState(input);
    });

    // Update on blur (when user leaves the field)
    input.addEventListener('blur', () => {
      updateInputState(input);
    });
  });
});