// Get necessary elements
const openBtn = document.getElementById('nav-open-btn');
const sidebar = document.querySelector('.nav-sidebar');
const closeBtn = document.querySelector('.nav-close-btn');

// Add event listener to open button
openBtn.addEventListener('click', () => {
  sidebar.classList.add('open');
});

// Add event listener to close button
closeBtn.addEventListener('click', () => {
  sidebar.classList.remove('open');
});
