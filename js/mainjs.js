// For Sending Mail of Contact Us Page

const scriptURL = 'https://script.google.com/macros/s/AKfycbxsmAUN2qUsc1hY6pUUcEQuzy9oKNpZNzTzU9tbD1Xgac6LQoA/exec'
const form = document.forms['form']

form.addEventListener('submit', e => {
    e.preventDefault()
    alert("Thanks for Contacting us...! We Will Contact You Shortly...");
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then(response => alert("For More Details!!! You Can Also Mail Us On Our Official Mail Id:- graphics.shivamsinghal@gmail.com !!!"))
        .catch(error => console.error('Error!', error.message))
})

// Js For Live Time at the Navbar

setInterval(() => {
    let d = new Date();
    let hr = d.getHours();
    let min = d.getMinutes();
    let sec = d.getSeconds();
    let dt = d.getDate();
    let mon = d.getMonth();
    let yr = d.getFullYear();

    if (hr <= 9 && min <= 9 && sec <= 9) {
        document.getElementById('time').innerHTML = (`0${hr} : 0${min} :  0${sec}`)
    } else if (hr >= 9 && min <= 9 && sec <= 9) {
        document.getElementById('time').innerHTML = (`${hr} : 0${min} :  0${sec}`)
    } else if (hr >= 9 && min >= 9 && sec <= 9) {
        document.getElementById('time').innerHTML = (`${hr} : ${min} : 0${sec}`)
    } else{
        document.getElementById('time').innerHTML = (`${hr} : ${min} :  ${sec}`)
    }

    let monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
    ];
    document.getElementById('date').innerHTML = (`${dt}-${monthNames[mon]}-${yr}`)
}, 1000);