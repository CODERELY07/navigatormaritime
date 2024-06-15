document.getElementById('course-hover').addEventListener('mouseenter', function() {
  document.querySelector('.dropdown-hover').style.display = 'flex';
});

document.getElementById('course-hover').addEventListener('mouseleave', function() {
  document.querySelector('.dropdown-hover').style.display = 'none';
});

// Nav Bar mobile
const bar = document.getElementById("bar");
const menu = document.getElementById("menu");
const course = document.getElementById("course");
const dropdown = document.getElementById("myDropdown");

let click = 1;

function toggleMenuHeight() {
  if (click === 1) {
    menu.style.height = dropdown.classList.contains('active') ? "860px" : "610px";
    click = 3;
  } else {
    menu.style.height = "45px";
    click = 1;
  }
}

bar.addEventListener("click", toggleMenuHeight);

course.addEventListener("click", () => {
  if (dropdown.classList.contains('active')) {
    dropdown.classList.remove('active');
    menu.style.height = "610px";
  } else {
    dropdown.classList.add('active');
    menu.style.height = "860px";
  }
});

// video 
// Change the second argument to your options:
// https://github.com/sampotts/plyr/#options
const players = Array.from(document.querySelectorAll('video')).map(player => new Plyr(player, {captions: {active: true}}));
    
// Expose players so they can be used from the console
window.players = players;


// My exeprment code
// const bar = document.getElementById("bar");
// const menu = document.getElementById("menu");
// const course = document.getElementById("course");
// const dropdown = document.getElementById("myDropdown");
// let click = 1;
// bar.addEventListener("click", () => {
//   if (click == 1) {
//     if(dropdown.classList.contains('active')){
//       menu.style.height = "860px";
//     }else{
//       menu.style.height = "610px";
//     }
//     click=3;
//   } else {
//     menu.style.height = "45px";
//     click =1;
//   }
// });

// course.addEventListener("click", () => {
//   if(dropdown.classList.contains('active')){
//     dropdown.classList.remove('active');
//     menu.style.height = "610px";
//   }else{
//     dropdown.classList.add('active')
//     menu.style.height = "860px";
//   }
// });