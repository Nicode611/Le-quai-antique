const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.navbar-ul');
const logo = document.querySelector('.logo');

hamburger.addEventListener('click', () => {
  navLinks.classList.toggle('show');
  logo.classList.toggle('show');
});

//----------------------------------------------------------------------

const rangeInput = document.querySelector('.form-range');
const personNumber = document.querySelector('.person-number');

rangeInput.addEventListener("input", function() {
  var rangeValue = rangeInput.value;
  personNumber.innerText = rangeValue;
});

//----------------------------------------------------------------------

const dateInput = document.querySelector('.input-date');
const myFieldset = document.getElementById("form-btn-fieldset");

const isValid = () => {
  if (rangeInput.value != 0 && dateInput.value !== '') {
    console.log('oui');
    myFieldset.disabled = false;
    
  }
}

rangeInput.addEventListener('change', isValid);
dateInput.addEventListener('change', isValid);

//----------------------------------------------------------------------

const form = document.querySelector('form');
const requiredInputs = form.querySelectorAll('[required]');
const submitBtn = form.querySelector('button[type="submit"]');
const passwordInput = document.querySelector('input[type="password"]');

requiredInputs.forEach(input => {
  input.addEventListener('input', checkInputs);
});

function checkInputs() {
  let allInputsFilled = true;
  requiredInputs.forEach(input => {
    if (input.value.trim() === '') {
      allInputsFilled = false;
    }
  });
  
  if (allInputsFilled) {
    submitBtn.removeAttribute('disabled');
  } else {
    submitBtn.setAttribute('disabled', 'disabled');
  }
}


