/*
Firefox 3.5 Audio Demo
by WM
http://kidwm.net/
*/
var volume = 0.5; //initial volume
var current = 0;  //initial track
var mode = 'shuffle'; //play mode: order or shuffle
var present = 'cover'; //initial display type: cover or list or about
var again = 'none'; //repead mode: none, single or all
/* setting above only*/
var track = song.length;
var box = {};
var i;
var index;
var playlist = '';
var temp = '';
var sf = new Array();
for(i = 0; i < track; i++) {
sf[i] = i;
}

function load() {
box.v = document.getElementById('audio');
box.c = document.getElementById('cover');
box.n = document.getElementById('next');
box.p = document.getElementById('previous');
for (i = 0; i < track; i++) {
playlist = playlist + '<li><a href="javascript:track_change(' + i + ')">' + song[i].artist + ' - ' + song[i].title + '</a></li>' + "\n";
}
document.getElementById('song').innerHTML = playlist;
box.v.addEventListener('ended', function() {
if (box.v.ended) {
end();
}
}, true);
box.v.addEventListener('play', function() {
pause(0);
}, true);
box.v.addEventListener('pause', function() {
pause(1);
}, true);
box.v.addEventListener('volumechange', function() {
set_volume();
}, true);
box.v.addEventListener('timeupdate', function() {
bar_time();
}, true);
show(present);
set_repeat();
set_shuffle();
ready();
pause(1);
var li = document.getElementsByTagName('li');
li[current].getElementsByTagName('a')[0].style.textShadow = '#FF7F24 1px 1px 5px,#FFD700 -1px -1px 10px';
li[current].getElementsByTagName('a')[0].style.fontSize = '1.3em';
box.v.volume = volume;
}

function toggle() {
  if (box.v.paused)
  {
  box.v.play();
  }
  else {
  box.v.pause();
  }
}

function button_hover(b) {
var b = document.getElementById(b);
b.style.opacity=1;
}

function button_out(b) {
var b = document.getElementById(b);
b.style.opacity=0.1;
}

function track_change(t) {
box.v.pause();
var li = document.getElementsByTagName('li');
li[current].getElementsByTagName('a')[0].style.textShadow = '#00F5FF 0px 0px 10px';
li[current].getElementsByTagName('a')[0].style.fontSize = '1em';
switch (t) {
case 'next':
if (mode == 'shuffle') {
if (index < track - 1) {
index = index + 1;
}
else {
shuffle_init();
}
current = sf[index];
}
else {
current = current + 1;
}
break;
case 'previous':
if (mode == 'shuffle') {
if (index == 0) {
shuffle_init();
}
else {
index = index - 1;
}
current = sf[index];
}
else {
current = current - 1 ;
}
break;
default:
current = t;
}
li[current].getElementsByTagName('a')[0].style.textShadow = '#FF7F24 1px 1px 5px,#FFD700 -1px -1px 10px';
li[current].getElementsByTagName('a')[0].style.fontSize = '1.3em';
ready();
box.v.play();
}

function vol_up() {
volume = volume + 0.05;
if (volume >= 1) {
volume = 0.99;
}
box.v.volume = volume;
}

function vol_down() {
if (volume == 0.99) {
volume = volume - 0.04;
}
else {
volume = volume - 0.05;
}
if (volume <= 0.1) {
volume = 0.1;
}
box.v.volume = volume;
}

function time_conv(t) {
if (isNaN(t)) {
return '0:00';
}
else {
var min = Math.floor(t / 60);
var sec = t % 60;
if (sec < 10) {
sec = '0' + sec;
}
return min + ':' + sec;
}
}

function bar_time() {
document.getElementById('time').innerHTML = time_conv(Math.floor(box.v.currentTime)) + '/' + time_conv(Math.floor(box.v.duration));
document.getElementById('bug').innerHTML = box.v.currentTime + '<br>' + box.v.duration + '<br>' + temp;
}

function ready() {
var h = document.getElementById('title');
box.v.src = 'audio/' + song[current].source;
box.c.title = song[current].artist + ' - ' + song[current].title;
box.c.src = 'cover/' + song[current].cover;
if (present == 'cover') {
h.innerHTML = song[current].artist + ' - ' + song[current].title;
}
box.v.load();
set_change();
}

function set_change() {
if (mode == 'shuffle') {
box.p.style.visibility = 'visible';
box.n.style.visibility = 'visible';
}
else if(current == track - 1) {
box.p.style.visibility = 'visible';
box.n.style.visibility = 'hidden';
}
else if (current == 0) {
box.p.style.visibility = 'hidden';
box.n.style.visibility = 'visible';
}
else {
box.p.style.visibility = 'visible';
box.n.style.visibility = 'visible';
}
}

function set_volume() {
if (box.v.muted) {
document.getElementById('vol').innerHTML = '00';
document.getElementById('vo').style.color = '#007B7F';
}
else {
document.getElementById('vol').innerHTML = Math.round(box.v.volume*100);
document.getElementById('vo').style.color = '#00E5EE';
}
}

function shuffle() {
if (mode == 'shuffle') {
mode = 'order';
}
else {
mode = 'shuffle';
}
set_shuffle();
set_change();
}

function set_shuffle() {
var m = document.getElementById('mode');
if (mode == 'shuffle') {
m.style.color = '#00E5EE';
shuffle_init();
current = sf[0];
}
else {
m.style.color = '#007B7F';
}
}

function track_shuffle(t) {
var random = t;
while (random == t)
{
random = Math.floor(Math.random()*track);
}
return random;
}

function about() {
if (document.getElementById('info').style.display == 'none') {
document.getElementById('info').style.display = 'block';
}
else {
document.getElementById('info').style.display = 'none';
}
}

function display(d) {
var block = document.getElementById(d);
if (present == d) {
present = 'cover';
}
else if (d == 'list'){
present = 'list';
}
else {
present = 'about';
}
show(present);
}

function set_repeat() {
var r = document.getElementById('re');
switch(again) {
case 'single':
r.innerHTML = '[RS]';
r.title = 'Repeat Single';
r.style.color = '#00E5EE';
break;
case 'all':
r.innerHTML = '[RA]';
r.title = 'Repeat All';
r.style.color = '#00E5EE';
break;
default:
r.innerHTML = '[RP]';
r.title = 'Switch Repeat Mode';
r.style.color = '#007B7F';
}
}

function repeat() {
switch(again) {
case 'single':
again = 'all';
break;
case 'all':
again = 'none';
break;
default:
again = 'single';
}
set_repeat();
}

function show(s) {
var h = document.getElementById('title');
switch (s) {
case 'list':
document.getElementById('info').style.display = 'none';
document.getElementById('song').style.display = 'block';
h.innerHTML = 'PLAY LIST';
document.getElementById('list').style.color = '#00E5EE';
document.getElementById('about').style.color = '#007B7F';
break;
case 'about':
document.getElementById('info').style.display = 'block';
document.getElementById('song').style.display = 'none';
h.innerHTML = 'ABOUT';
document.getElementById('list').style.color = '#007B7F';
document.getElementById('about').style.color = '#00E5EE';
break;
default:
document.getElementById('info').style.display = 'none';
document.getElementById('song').style.display = 'none';
h.innerHTML = song[current].artist + ' - ' + song[current].title;
document.getElementById('list').style.color = '#007B7F';
document.getElementById('about').style.color = '#007B7F';
}
}

function pause(s) {
var b = document.getElementById('pause');
var w = document.getElementById('wave');
if (s) {
b.style.display = 'block';
w.src = 'static.png';
}
else {
b.style.display = 'none';
w.src = 'move.png';
}
}

function end() {
if (again == 'single') {
track_change(current);
}
else if (mode == 'order' && again == 'all' && current == track-1) {
track_change(0);
}
else if (mode == 'shuffle' && index == track - 1 && again == 'all') {
shuffle_init();
track_change(sf[0]);
}
else if (mode == 'shuffle' && index == track - 1) {
pause(1);
}
else if (mode == 'order' && current == track - 1) {
pause(1);
}
else{
track_change('next');
}
var li = document.getElementsByTagName('li');
li[current].getElementsByTagName('a')[0].style.textShadow = '#00F5FF 0px 0px 10px';
li[current].getElementsByTagName('a')[0].style.fontSize = '1em';
}

function shuffle_init() {
index = 0;
sf.sort(function() {return (Math.random() - 0.5);})
sf.sort(function() {return (Math.random() - 0.5);})
temp = '';
for(i = 0; i < track; i++) {
temp = temp + sf[i] + ' ';
}
}