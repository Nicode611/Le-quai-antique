const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.navbar-ul');
const logo = document.querySelector('.logo');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('show');
  logo.classList.toggle('show');
});


const rangeInput = document.querySelector('.form-range');
const personNumber = document.querySelector('.person-number');

rangeInput.addEventListener("input", function() {
  var rangeValue = rangeInput.value;
  personNumber.innerText = rangeValue;
});