const slide = document.getElementById('slide');
const prev = document.getElementById('prev');
const next = document.getElementById('next');
const indicator = document.getElementById('indicator');
const lists = document.querySelectorAll('.list');
const totalSlides = lists.length;
let count = 0;
let autoPlayInterval;
function updateListBackground() {
  for (let i = 0; i < lists.length; i++) {
    lists[i].style.backgroundColor = i === count % totalSlides ? 'white' : '#336EA7';
  }
}
function nextClick() {
  slide.classList.remove(`slide${count % totalSlides + 1}`);
  count++;
  slide.classList.add(`slide${count % totalSlides + 1}`);
  updateListBackground();
}
function prevClick() {
  slide.classList.remove(`slide${count % totalSlides + 1}`);
  count--;
  if (count < 0) count = totalSlides - 1;
  slide.classList.add(`slide${count % totalSlides + 1}`);
  updateListBackground();
}
function startAutoPlay() {
  autoPlayInterval = setInterval(nextClick, 3000);
}
function resetAutoPlayInterval() {
  clearInterval(autoPlayInterval);
  startAutoPlay();
}
next.addEventListener('click', () => {
  nextClick();
  resetAutoPlayInterval();
});
prev.addEventListener('click', () => {
  prevClick();
  resetAutoPlayInterval();
});
indicator.addEventListener('click', (event) => {
  if (event.target.classList.contains('list')) {
    const index = Array.from(lists).indexOf(event.target);
    slide.classList.remove(`slide${count % totalSlides + 1}`);
    count = index;
    slide.classList.add(`slide${count % totalSlides + 1}`);
    updateListBackground();
    resetAutoPlayInterval();
  }
});
startAutoPlay();



const slidee = document.getElementById('slidee');
const prevv = document.getElementById('prevv');
const nextt = document.getElementById('nextt');
const indicatorr = document.getElementById('indicatorr');
const listss = document.querySelectorAll('.listt');
const totalSlidess = listss.length;
let countt = 0;
let autoPlayIntervall;
function updateListBackgroundd() {
  for (let i = 0; i < listss.length; i++) {
    listss[i].style.backgroundColor = i === countt % totalSlidess ? 'white' : '#336EA7';
  }
}
function nextClickk() {
  slidee.classList.remove(`slidee${countt % totalSlidess + 1}`);
  countt++;
  slidee.classList.add(`slidee${countt % totalSlidess + 1}`);
  updateListBackgroundd();
}
function prevClickk() {
  slidee.classList.remove(`slidee${countt % totalSlidess + 1}`);
  countt--;
  if (countt < 0) countt = totalSlidess - 1;
  slidee.classList.add(`slidee${countt % totalSlidess + 1}`);
  updateListBackgroundd();
}
function startAutoPlayy() {
  autoPlayIntervall = setInterval(nextClickk, 3000);
}
function resetAutoPlayIntervall() {
  clearInterval(autoPlayIntervall);
  startAutoPlayy();
}
nextt.addEventListener('click', () => {
  nextClickk();
  resetAutoPlayIntervall();
});
prevv.addEventListener('click', () => {
  prevClickk();
  resetAutoPlayIntervall();
});
indicatorr.addEventListener('click', (event) => {
  if (event.target.classList.contains('listt')) {
    const indexx = Array.from(listss).indexOf(event.target);
    slidee.classList.remove(`slidee${countt % totalSlidess + 1}`);
    countt = indexx;
    slidee.classList.add(`slidee${countt % totalSlidess + 1}`);
    updateListBackgroundd();
    resetAutoPlayIntervall();
  }
});
startAutoPlayy();