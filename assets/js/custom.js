function closeSidebar() {
  document.getElementById("sidenav").style.width = "0px";
  document.getElementsByTagName("body")[0].style.overflow = "auto";
}

function openSidebar() {
  document.getElementById("sidenav").style.width = "100%";
  document.getElementsByTagName("body")[0].style.overflow = "hidden";
}
const links = document.getElementById("nav-menu").innerHTML;
document.getElementById("side-menu").innerHTML = links;

function movetotop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

document.getElementById("year").innerHTML = new Date().getFullYear();

new Splide('#slider', {
  type: 'fade',
  rewind: true,
  autoHeight: true,
  focus: 'center',
  height: '100%',
  cover: true,
}).mount();