function getInfo() {
    let name = document.getElementById('name').value;
    console.log(name);
    let email = document.getElementById('email').value;
    let male = document.getElementById('male').checked;
    let female = document.getElementById('female').checked;
    let others = document.getElementById('others').checked;
    let gender;
    let dob = document.getElementById("dob").value;
    let ssc = document.getElementById('ssc').checked;
    let hsc = document.getElementById('hsc').checked;
    let bsc = document.getElementById('bsc').checked;
    let degree;
    let bg = document.getElementById('bg').value;
    let pic = document.getElementById('picture');

    if (name === '' || email === '' || dob === '') {
        alert('Empty field!');
        
    } else if (!validName(name)) {
        alert('Name must contain at least two words');
        
    } else if (!email.includes("@") || !email.includes(".com")) {
        alert('Email must be valid like abc@gmail.com');
       
    } else if (dob === '') {
        alert("Date of Birth field is empty");
        
    }
    
    document.getElementById("name1").innerHTML = "Name: " + name;
    document.getElementById("email1").innerHTML = "Email: " + email;

    
    if (male) {
        gender = "Male";
    } else if (female) {
        gender = "Female";
    } else if (others) {
        gender = "Others";
    }

    if (!gender) {
        alert('Please select a gender!');
    }

    document.getElementById("gender").innerHTML = "Gender: " + gender;

    document.getElementById("dob1").innerHTML = "Date of Birth: " + dob;

    document.getElementById("bg1").innerHTML = "Blood Group: " + bg;
    

    if (ssc) {
        degree = "SSC";
    } else if (hsc) {
        degree = "HSC";
    } else if (bsc) {
        degree = "BSc";
    }

    if (!degree) {
        alert('Please select a degree!');
        //return; 
    }

    document.getElementById("degree").innerHTML = "Degree: " + degree;
    console.log(pic);

    if (!pic.files.length) {
        alert("Please upload a picture");
        return;
    } else {
        console.log(URL.createObjectURL(pic.files[0]));
        document.getElementById("pic").src = URL.createObjectURL(pic.files[0]);
    }
}

function validName(name) {
    let words = name.split(' ');
    return words.length >= 2;
}

