var left = document.getElementById('left-arrow');
var right = document.getElementById('right-arrow');
var gambar = document.getElementById('gambar');
var num = 0;
var main = document.getElementsByClassName('main')[0];
var h1 = document.getElementsByTagName('h1')[0];

function changeColor(){
    if(num === 0){
        main.style.backgroundColor = "#4A6C9B";
        left.style.color = "white";
        right.style.color = "white";
        h1.style.color = "white";
    }
    else if(num === 1){
        main.style.backgroundColor = "#324A7A";
        left.style.color = "white";
        right.style.color = "white";
        h1.style.color = "white";
    }

    else if(num === 2){
        main.style.backgroundColor = "#fff";
        left.style.color = "#474747";
        right.style.color = "#474747";
        h1.style.color = "#474747";
    }
    
}

left.onclick = function() {
    if(num === 0){
        num = 2;
    }else{
        num -= 1;
    }

    if(num === 0) {
        gambar.src = "asset/img/0.png"
    }else if(num === 1) {
        gambar.src = "asset/img/1.png"
    }else{
        gambar.src = "asset/img/2.png"
    }
    changeColor();
}

right.onclick = function() {
    if(num === 2){
        num = 0;
    }else{
        num += 1;
    }

    if(num === 0) {
        gambar.src = "asset/img/0.png"
    }else if(num === 1) {
        gambar.src = "asset/img/1.png"
    }else{
        gambar.src = "asset/img/2.png"
    }
    changeColor();
}