function getemail(){
    let email = document.getElementById('email').value;
    let xhttp = new XMLHttpRequest();

    xhttp.open('POST', '../controller/emailcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('h3').innerHTML = this.responseText;
        }
    };
    xhttp.send('email=' + email);
}

function getinfo(){
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let password = document.getElementById('password').value;

    if (name === '' || phone === '' || password === '') {
        document.getElementById('h1').innerHTML = 'fill out the fields';
        return false;
    }else {
        return true;
    }
}