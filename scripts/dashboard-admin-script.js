//---------------------------------Active catégorie dashboard admin-------------------------------------

const reservationsCat = document.querySelector('.dash-categories.dash-reservations');
const galerieCat = document.querySelector('.dash-galerie');

const reservationsContent = document.querySelector('.dash-reservations-main-content');
const galerieContent = document.querySelector('.dash-galerie-main-content');

galerieCat.addEventListener('click', () => {
  galerieContent.style.display = 'flex';
  reservationsContent.style.display = 'none';
});

reservationsCat.addEventListener('click', () => {
  galerieContent.style.display = 'none';
  reservationsContent.style.display = 'flex';
});