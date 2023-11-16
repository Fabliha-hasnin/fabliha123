
function getgender() {
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let others = document.getElementById('others');
    let gender;

    if (!male.checked && !female.checked && !others.checked) {
        alert('Please select a gender!');
    }
    else if (male.checked) {
        gender = 'Male';
    } else if (female.checked) {
        gender = 'Female';
    } else if (others.checked) {
        gender = 'Others';
    }
    alert('Your gender is: ' + gender);
}

