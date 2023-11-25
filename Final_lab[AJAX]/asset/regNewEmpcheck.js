function getNewEmp(){
    let name = document.getElementById("employerName").value;
    let company = document.getElementById("companyName").value;
    let contact = document.getElementById("contactNo").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;
    
    if (name === '' || company === '' || contact === '' || username === '' || password ==='') {
        alert('Empty field!');
        return false;
    } else {
        return true;
    }

}