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

function adminLogin(response, form) {

    if (response.status === true) {
        if(response.login === true){
        UIkit.notification({message: "<span uk-icon='icon: check'></span>Esi veiksmīgi ielogojies!", status: "success"})
        form.querySelector('#email').value = '';
        form.querySelector('#password').value = '';
    } else {
        UIkit.notification({message: "<span uk-icon='icon: close'></span>Parole vai lietotājvārds ir nepareizs!", status: "danger"})


    }
    } 
}