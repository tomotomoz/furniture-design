'use strict'
let nav = document.querySelector('#nav-area');
let btn = document.querySelector('.toggle-btn');
let mask = document.querySelector('#mask');



//  btn.onclick = () => {
//    nav.classList.toggle('open');
//  };
//  mask.onclick = () =>{
//   nav.classList.toggle('open');
//  };


const toggleNav = () => {
  nav.classList.toggle('open');
};
btn.onclick = toggleNav;
mask.onclick = toggleNav;
