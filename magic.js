//  dwaleft - change height and color of vertical div element @@@@@@@@@@@@@@@@@@@@
function poleBigger(size) {
  const a = document.getElementById('pole');
  a.style.height = size;
  a.style.backgroundColor = '#333333';
}
function poleNormal(size) {
  const a = document.getElementById('pole');
  a.style.height = size;
  a.style.backgroundColor = 'red';
}
//  dwaright - change height and color of vertical div element @@@@@@@@@@@@@@@@@@@@

function poleBiggerRight(size) {
  const a = document.getElementById('pole1');
  a.style.height = size;
  a.style.backgroundColor = '#333333';
}
function poleNormalRight(size) {
  const a = document.getElementById('pole1');
  a.style.height = size;
  a.style.backgroundColor = 'red';
}

// animacje div cover whole image @@@@@@@@@@@@@@@@@@@@@@@@@@@@

function coverDiv(color, top, opacity) {
  const x = document.getElementById('czwartyBottom');
  const y = document.getElementById('czwartyBoxTxt');
  x.style.backgroundColor = color;
  x.style.height = top;
  x.style.top = '0%';
  x.style.transition = '1s';
  x.style.opacity = opacity;
  y.style.color = 'white';
}
function normalDiv(height, opacity) {
  const x = document.getElementById('czwartyBottom');
  const y = document.getElementById('czwartyBoxTxt');
  x.style.height = height;
  x.style.opacity = opacity;
  x.style.top = '75%';
  y.style.color = '#333';
}
// czwartyBoz z lewej strony @@@@@@@@@@@@@@@@@@@@@@@@@@@@
function coverDiv1(color, top, opacity) {
  const x = document.getElementById('czwartyBottom1');
  const y = document.getElementById('czwartyBoxTxt1');
  x.style.backgroundColor = color;
  x.style.height = top;
  x.style.top = '0%';
  x.style.transition = '1s';
  x.style.opacity = opacity;
  y.style.color = 'white';
}
function normalDiv1(height, opacity) {
  const x = document.getElementById('czwartyBottom1');
  const y = document.getElementById('czwartyBoxTxt1');
  x.style.height = height;
  x.style.opacity = opacity;
  x.style.top = '75%';
  y.style.color = '#333';
}
