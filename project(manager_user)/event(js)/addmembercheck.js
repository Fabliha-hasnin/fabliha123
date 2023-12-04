function getmember() {   
    let  qa = document.getElementById('QA').checked;
    let  sm = document.getElementById('SM').checked;
    let  sa = document.getElementById('SA').checked;
    let username = document.getElementById('username').value;
    let xhttp = new XMLHttpRequest();

    if (qa || sm || sa) {
        if (username === '') {
            document.getElementById('h1').innerText = "Select a user";
            return false;
        }
        xhttp.open("POST", "../controller/addMemberCheck.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('h1').innerHTML = this.responseText;
            }
        }

        xhttp.send('username=' + encodeURIComponent(username) + '&Role=' + encodeURIComponent(role));
        return true;
    } else {
        document.getElementById('h2').innerText = "*Select Role";
        return false;
    }  
}



function next(){
    let xhttp = new XMLHttpRequest();
    
    xhttp.open("GET", "../controller/showDevelopers.php", true);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("users").innerHTML = this.responseText;
        }
    };

    xhttp.send();
}
