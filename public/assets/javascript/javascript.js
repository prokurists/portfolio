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
    // res - atbilde no servera JS objekta formātā (PHP -> json_decode())
    let res = JSON.parse(response);

    if (res.status === true) {

        form.querySelector('input').value = '';
    }
}


function addNewMessage(response, form) {
    // res - atbilde no servera JS objekta formātā (PHP -> json_decode())
    let res = JSON.parse(response);

    if (res.status === true) {

        form.querySelector('input').value = '';
    }
}

