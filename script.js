function toSmth(a) {
    let element1 = document.querySelector('#home');
    let element2 = document.querySelector('#info');
    let element3 = document.querySelector('#con');
    let element4 = document.querySelector('#title1');
    let element5 = document.querySelector('#title2');
    
    if(a==1) {
        element1.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    }
    else if (a==2) {
        element2.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    }
    else if (a==3){
        element3.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    }
    else if (a==4){
        element4.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    }
    else if (a==5){
        element5.scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
    }
}

function sideMenu() {
    let arrowElement = document.querySelector('#side');
    let element = document.querySelector('#home menu ul');

    if(element.style.display === "none") {
        element.style.display = "block";
        arrowElement.style.transform = "rotate(90deg)";
    }
    else {
        element.style.display = "none";
        arrowElement.style.transform = "rotate(270deg)";
    }
}

let elements = document.querySelectorAll('.carsInfo')
for(let element of elements) {
    addImg(element);
}

function addImg(element) {
    element.addEventListener('mouseenter', function() {
        let img = element.querySelector('.carImg');
        let imgUrl = img.style.backgroundImage;
        let url1 = imgUrl.replace("1.png", "2.png");
        img.style.backgroundImage = url1;
    });
    element.addEventListener('mouseleave', function() {
        let img = element.querySelector('.carImg');
        let imgUrl = img.style.backgroundImage;
        let url2 = imgUrl.replace("2.png", "1.png");
        img.style.backgroundImage = url2;
    });
}

function contactSwtch(a) {
    let opt1 = document.querySelector('#opt1');
    let opt2 = document.querySelector('#opt2');
    let element1 = document.querySelector('#contactForm');
    let element2 = document.querySelector('#phone');

    if(a==1) {
        element1.style.display = "block";
        opt1.style.display = "none";
        opt2.style.display = "none";
    }
    else {
        element2.style.display = "block";
        opt1.style.display = "none";
        opt2.style.display = "none";
    }
}

var slideIndex = 1;

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
        for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

setInterval(() => {
    var slides = document.getElementsByClassName("slides");
    slideIndex++;
    if(slideIndex==slides.length) {
        slideIndex = 1;
        showSlides(slideIndex);
    }
    else {
        showSlides(slideIndex);
    }
}, 9000);



function checkForm() {
    let btn = document.querySelector('.btn');
    let name = document.querySelector('.order input[name="name"]');
    let secName = document.querySelector('.order input[name="secName"]');
    let pesel = document.querySelector('.order input[name="PESEL"]');
    let city = document.querySelector('.order input[name="city"]');
    let kod = document.querySelector('.order input[name="kod"]');
    let Od = document.querySelector('.order input[name="od"]');
    let Do = document.querySelector('.order input[name="do"]');

    name.addEventListener('input', function() {
        if(name.value.match(/[0-9]/g) || name.value.length == 0) {
            name.style.border = "red 2px solid";
            name.style.backgroundColor = "rgb(255, 86, 86)";
            btn.disabled = true;
        }
        else {
            name.style.border = "green 2px solid";
            name.style.backgroundColor = "white";
            btn.disabled = false;
        }
    });
    secName.addEventListener('input', function() {
        if(secName.value.match(/[0-9]/g) || secName.value.length == 0) {
            secName.style.border = "red 2px solid";
            secName.style.backgroundColor = "rgb(255, 86, 86)";
            btn.disabled = true;
        }
        else {
            secName.style.border = "green 2px solid";
            secName.style.backgroundColor = "white";
            btn.disabled = false;
        }
    });
    pesel.addEventListener('input', function() {
        if(pesel.value.match(/[0-9]/g) && pesel.value.length === 11) {
            pesel.style.border = "green 2px solid";
            pesel.style.backgroundColor = "white";
            btn.disabled = false;
        }
        else {
            pesel.style.border = "red 2px solid";
            pesel.style.backgroundColor = "rgb(255, 86, 86)";
            btn.disabled = true;
        }
    });
    city.addEventListener('input', function() {
        if(city.value.match(/[0-9]/g) || city.value.length == 0) {
            city.style.border = "red 2px solid";
            city.style.backgroundColor = "rgb(255, 86, 86)";
            btn.disabled = true;
        }
        else {
            city.style.border = "green 2px solid";
            city.style.backgroundColor = "white";
            btn.disabled = false;
        }
    });
    kod.addEventListener('input', function() {
        if(kod.value.slice(0,1).match(/[0-9]/g) && kod.value.slice(3,6).match(/[0-9]/g) && kod.value.charAt(2) == "-" && kod.value.length === 6) {
            kod.style.border = "green 2px solid";
            kod.style.backgroundColor = "white";
            btn.disabled = false;
        }
        else {
            kod.style.border = "red 2px solid";
            kod.style.backgroundColor = "rgb(255, 86, 86)";
            btn.disabled = true;
        }
    });
}