//---------------------------------Active catégorie dashboard admin-------------------------------------

const reservationsCat = document.querySelector('.dash-reservations');
const galerieCat = document.querySelector('.dash-galerie');
const carteCat = document.querySelector('.dash-carte');
const horairesCat = document.querySelector('.dash-horaires');

const reservationsContent = document.querySelector('.dash-reservations-main-content');
const galerieContent = document.querySelector('.dash-galerie-main-content');
const carteContent = document.querySelector('.dash-carte-main-content');
const horairesContent = document.querySelector('.dash-horaires-main-content');

galerieCat.addEventListener('click', () => {
  galerieContent.style.display = 'flex';
  reservationsContent.style.display = 'none';
  carteContent.style.display = 'none';
  horairesContent.style.display = 'none';
});

reservationsCat.addEventListener('click', () => {
  galerieContent.style.display = 'none';
  reservationsContent.style.display = 'flex';
  carteContent.style.display = 'none';
  horairesContent.style.display = 'none';
});

carteCat.addEventListener('click', () => {
    galerieContent.style.display = 'none';
    reservationsContent.style.display = 'none';
    carteContent.style.display = 'flex';
    horairesContent.style.display = 'none';
});

horairesCat.addEventListener('click', () => {
    galerieContent.style.display = 'none';
    reservationsContent.style.display = 'none';
    carteContent.style.display = 'none';
    horairesContent.style.display = 'flex';
});
  
//---------------------------------Add one reservation-------------------------------------

const resAddBtn = document.querySelector('#dash-btn-add');
const resContainer = document.querySelector('.dash-reservations-tab');

let createReservation = () => {
    let newReservation = document.createElement('div');
    newReservation.innerHTML = `
    <div class="dash-reservation-container">
      <div id="reservation-name" class="dash-reservation-name"></div>
      <div id="reservation-tel" class="dash-reservation-tel"></div>
      <div id="reservation-num" class="dash-reservation-num"></div>
      <div id="reservation-day" class="dash-reservation-day"></div>
      <div id="reservation-time" class="dash-reservation-time"></div>
      <div id="reservation-allergies" class="dash-reservation-allergies"></div>
    </div>
    `
    resContainer.appendChild(newReservation);
}

resAddBtn.addEventListener('click', createReservation);
