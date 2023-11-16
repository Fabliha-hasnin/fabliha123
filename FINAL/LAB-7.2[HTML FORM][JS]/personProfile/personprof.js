function getInfo() {
    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let others = document.getElementById('others');
    let gender;
    let dob = document.getElementById("dob").value;
    let ssc = document.getElementById('ssc');
    let hsc = document.getElementById('hsc');
    let bsc = document.getElementById('bsc');
    let degree;
    let pic= document.getElementById('picture');


    if (name === '' || email === '') {
        alert('Empty field!');
     } 
     else if (!validName(name)) {
         alert('name must contain at least two words');
    } 
    else if(!email.includes("@") || !email.includes("@")){
        alert('Email must be valid like abc@gmail.com');
   }if (!male.checked && !female.checked && !others.checked) {
    alert('Please select a gender!');
    }
    else if (male.checked) {
        gender = 'Male';
    } else if (female.checked) {
        gender = 'Female';
    } else if (others.checked) {
        gender = 'Others';
    }else if (dob=='') {
        alert ("filed is empty");
    }else if (!ssc.checked && !hsc.checked && !bsc.checked) {
        alert('Please select a degree!');
    }
    else if (ssc.checked) {
        degree = 'SSC';
    } else if (hsc.checked) {
        degree = 'HSC';
    } else if (bsc.checked) {
        degree = 'BSc';
    }else if(!pic)
    {
        alert("empty file");
    }
    else {
            alert('Form submitted');
     }
}

 function validName(name) {
     let words = name.split(' ');
     return words.length >= 2;
 }
