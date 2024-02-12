/* Side Menu */

const menuBtn = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.navbar');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
    console.log('hamburger is clicked');
    if(!menuOpen) {
        menuBtn.classList.add('open');
        navLinks.classList.add('open');
        menuOpen = true;
    }
    else {
        menuBtn.classList.remove('open');
        navLinks.classList.remove('open');
        menuOpen = false;
    }
})

/* Newsletter Buttons */ 

function newsletter20222023Dropdown() {
    document.getElementById("20222023dropdown").classList.toggle("show");
}

/*
function newsletter20192020Dropdown() {
    document.getElementById("20192020dropdown").classList.toggle("show");
}
*/

function newsletter20182019Dropdown() {
    document.getElementById("20182019dropdown").classList.toggle("show");
}

function newsletter20172018Dropdown() {
    document.getElementById("20172018dropdown").classList.toggle("show");
}

function newsletter20162017Dropdown() {
    document.getElementById("20162017dropdown").classList.toggle("show");
}

function newsletter20062007Dropdown() {
    document.getElementById("20062007dropdown").classList.toggle("show");
}
  

/* Easter Egg */

const currentImg = document.querySelector('.team-list-img-current');
const hiddenImg = document.querySelector('.team-list-img-hidden');
var count = 0;

currentImg.addEventListener('click', () => {
    count++

    if(count == 3) {
        currentImg.classList.add('block');
        hiddenImg.classList.add('show');
        console.log(count);
        count = 0;
    }
})