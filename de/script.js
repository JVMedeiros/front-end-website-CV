var spans = document.querySelectorAll('span');
var spansShuffle = "DEMNÄCHST".split('');

function randomize() {
  var j, x, i;
  for (i = spansShuffle.length - 1; i > 0; i--) {
    j = Math.floor(Math.random() * (i + 1));
    x = spansShuffle[i];
    spansShuffle[i] = spansShuffle[j];
    spansShuffle[j] = x;
  }
  for (i = 0; i < spans.length; i++) {
    spans[i].innerHTML = spansShuffle[i];
  }
}

window.setInterval(randomize, 1500);

