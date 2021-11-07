$(document).ready(function() {
    $(window).scroll(function() {
        // navigācijas joslas ritināšana
        if (this.scrollY > 20) {
            $('.navbar').addClass("sticky");
        } else {
            $('.navbar').removeClass("sticky");
        }

        // scroll-up button show/hide script
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });
    // slide-up script
    $('.scroll-up-btn').click(function() {
        $('html').animate({ scrollTop: 0 });
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });
    $('.navbar .menu li a').click(function() {
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });
    // toggle menu/navbar script
    $('.menu-btn').click(function() {
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });
    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Proaktīva", "Zinātkāra", "Mērķtiecīga", "Motivēta"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    var typed = new Typed(".typing-2", {
        strings: ["Proaktīva", "Zinātkāra", "Mērķtiecīga", "Motivēta"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
    // When the user clicks on <div>, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false
            }
        }
    });
});

// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}

let saveFile = () => {
    // Get the data from each element on the form.
    const name = document.getElementById("txtName");
    const email = document.getElementById("txtEmail");
    const subject = document.getElementById("txtSubject");
    const msg = document.getElementById("msg");

    // This variable stores all the data.
    let data = "\r Name: " + name.value + " \r\n " + "Email: " + email.value + " \r\n " + "Subject: " + subject.value + " \r\n " + "Message: " + msg.value;
    console.log(data); //printing form data into the console
    // Convert the text to BLOB.
    const textToBLOB = new Blob([data], { type: "text/plain" });
    var filename = new Date();
    var month = new Date(); //months from 1-12
    month = month.getMonth();

    var day = new Date();
    var day = day.getUTCDate();

    var year = new Date();
    var year = year.getUTCFullYear();

    newdate = year + "/" + month + "/" + day;
    const sFileName = filename; // The file to save the data.

    let newLink = document.createElement("a");
    newLink.download = new Date();

    if (window.webkitURL != null) {
        newLink.href = window.webkitURL.createObjectURL(textToBLOB);
    } else {
        newLink.href = window.URL.createObjectURL(textToBLOB);
        newLink.style.display = "none";
        document.body.appendChild(newLink);
    }

    newLink.click();
};



function setWeather(degreesPerCelsius) {
    const weatherElements = document.getElementById('weather');

    weatherElements.innerText = degreesPerCelsius + ' °C Riga';
}

weatherUpdate = () => {
    const xhr = new XMLHttpRequest();
    xhr.open(
        "GET",
        `https://api.openweathermap.org/data/2.5/weather?q=Riga&appid=fabf9c5b920c09ac331f1f3382990162`);

    xhr.send();
    xhr.onload = () => {
        if (xhr.status === 404) {
            alert("Place not found");
        } else {
            var data = JSON.parse(xhr.response);

            const temp = Math.round(data.main.temp - 273);

            setWeather(temp);
        }
    };
};


weatherUpdate();