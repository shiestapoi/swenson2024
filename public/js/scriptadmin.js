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
