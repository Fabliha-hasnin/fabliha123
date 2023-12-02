function getNewEmp(){
    let name = document.getElementById("employerName").value;
    let contact = document.getElementById("contactNo").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    
    if (name === '' || contact === '' || username === '' || password ==='') {
        alert('Empty field!');
        return false;
    } else {
        return true;
    }

}