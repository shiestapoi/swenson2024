// Navbar Fixed
window.onscroll = function () {
  const header = document.querySelector('header');
  const fixedNav = header.offsetTop;
  const toTop = document.querySelector('#to-top');

  if (window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else {
    header.classList.remove('navbar-fixed');
    toTop.classList.remove('flex');
    toTop.classList.add('hidden');
  }
};

// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');
const header = document.querySelector('header');
const toTop = document.querySelector('#to-top');

hamburger.addEventListener('click', function () {
  const fixedNav = header.offsetTop;
  hamburger.classList.toggle('hamburger-active');
  navMenu.classList.toggle('hidden');
  if (hamburger.classList.contains('hamburger-active')) {
    header.classList.add('navbar-fixed');
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else if (window.pageYOffset > fixedNav) {
    header.classList.add('navbar-fixed');
    toTop.classList.remove('hidden');
    toTop.classList.add('flex');
  } else {
    header.classList.remove('navbar-fixed');
    toTop.classList.remove('flex');
    toTop.classList.add('hidden');
  }
});

// Klik di luar hamburger
window.addEventListener('click', function (e) {
  if (e.target != hamburger && e.target != navMenu) {
    hamburger.classList.remove('hamburger-active');
    navMenu.classList.add('hidden');
  }
});

// Darkmode toggle
const darkToggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html');

darkToggle.addEventListener('click', function () {
  if (darkToggle.checked) {
    html.classList.add('dark');
    localStorage.theme = 'dark';
    document.querySelector('.darkmodeneon').classList.add('yellowneon');
    document.querySelector('.darkmodeneon').classList.remove('slateneon');

  } else {
    html.classList.remove('dark');
    localStorage.theme = 'light';
    document.querySelector('.darkmodeneon').classList.add('slateneon');
    document.querySelector('.darkmodeneon').classList.remove('yellowneon');

  }
});

// pindahkan posisi toggle sesuai mode
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
  darkToggle.checked = true;
  document.querySelector('.darkmodeneon').classList.add('yellowneon');
  document.querySelector('.darkmodeneon').classList.remove('slateneon');
} else {
  darkToggle.checked = false;
  document.querySelector('.darkmodeneon').classList.add('slateneon');
  document.querySelector('.darkmodeneon').classList.remove('yellowneon');
}
