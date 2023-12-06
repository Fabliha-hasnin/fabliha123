function registrationVal() {
    let id = document.getElementById('id').value;
    let name = document.getElementById('name').value;
    let userType = document.getElementById('userType').value;
    let password = document.getElementById('password').value;
    let currentpass = document.getElementById('currentpass').value;

    let passwordCheck = '@#$&!0123456789abcdefghijkhmlopqrstuvwxyz';

    if(name==''||id==''||userType==''||password==''||currentpass==''){
        alert("empty field");
        return false
    }
    else if(password!=currentpass)
    {
        document.getElementById('pass').innerHTML = this.responseText;
        return false;
    }
    else if (password.length < 4) {
        alert("Password should be at least 4 characters");
        return false;
    } else if (!validpass(password, passwordCheck)) {
        alert("Password should have alphabets, special characters, and numbers");
        return false;
    } else if (!validName(name)) {
        alert('Name must contain least two words');
        }
    return true;
}

function validpass(input, checkString) {
    for (let i = 0; i < input.length; i++) {
        if (checkString.indexOf(input[i]) === -1) {
            return false;
        }
    }
    return true;
}

function validName(name) {
    let words = name.split(' ');
    return words.length >= 2;
}