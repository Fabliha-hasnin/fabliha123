function showusers() {
    let user = {
        id: "",
        name: "",
        userType: "",
    };

    let data = JSON.stringify(user);
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/viewusercheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('user=' + data);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let users = JSON.parse(this.responseText);
            let infoHtml = "";

            users.forEach(function (user) {
                infoHtml += "ID: " + user.id + "<br>Name: " + user.name + "<br>User type: " + user.userType + "<br><br>";
            });

            document.getElementById("head").innerHTML = infoHtml;
        }
    };
}
