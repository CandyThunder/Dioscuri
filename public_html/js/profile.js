document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('.tab');
  const contents = document.querySelectorAll('.category-content');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const category = tab.dataset.category;

      tabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));

      tab.classList.add('active');
      document.getElementById(category).classList.add('active');
    });
  });

  if (tabs.length > 0) {
    tabs[0].click();
  }
});