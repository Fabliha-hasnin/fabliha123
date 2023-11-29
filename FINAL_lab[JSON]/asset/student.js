function ajax() {
    let std = {
        name: "",
        id: "",
        cgpa: "",
    };

    let data = JSON.stringify(std);
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/studentcheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('student=' + data);
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let students = JSON.parse(this.responseText);
            let infoHtml = "";

            students.forEach(function(student) {
                infoHtml += "Name: " + student.name + "<br>ID: " + student.id + "<br>CGPA: " + student.cgpa + "<br><br>";
            });

            document.getElementById("head").innerHTML = infoHtml;
        }
    };
}

