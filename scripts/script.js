const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.navbar-ul');
const logo = document.querySelector('.logo');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('show');
  logo.classList.toggle('show');
});