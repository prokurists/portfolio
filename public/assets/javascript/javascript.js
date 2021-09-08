var h = 0;
var hello = "Sveiki, mani sauc Aleksejs Pavlovs";
var speed = 100;

document.body.onload = function typeWriter() {
  if (h < hello.length) 
  {
    document.getElementById("typewritter-hello").innerHTML += hello.charAt(h);    
    h++;
    setTimeout(typeWriter, speed);

  

  }}


  function postRequest(event, form, callback = false) {
    event.preventDefault();
    let url = form.getAttribute('action'),
            data = new FormData(form);
    
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            if (callback !== false) {
                let response_object = JSON.parse(this.responseText);
                if (response_object.status == true) {
                    callback(response_object, form);
                }
            }
        };
        xhttp.open("POST", url);
    
        xhttp.send(data);
    }

function getRequest(url, callback = false) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        if (callback !== false) {
            let response_object = JSON.parse(this.responseText);
            if (response_object.status == true) {
                callback(response_object);
            }
        }
    };
    xhttp.open("GET", url);
    xhttp.send();
}


function addNewReview(response, form) {
    if (response.status === true) {
        UIkit.notification({message: "<span uk-icon='icon: check'></span>Paldies! Atsauksmes nosūtīta!", status: "success"})
        form.querySelector('input').value = '';
        form.querySelector('textarea').value = '';

    }
}


function addNewMessage(response, form) {

    if (response.status === true) {
        UIkit.notification({message: "<span uk-icon='icon: check'></span>Paldies! Ziņa nosūtīta!", status: "success"})
        form.querySelector('input').value = '';
        form.querySelector('textarea').value = '';

    }
}

