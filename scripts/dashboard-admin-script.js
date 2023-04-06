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
  