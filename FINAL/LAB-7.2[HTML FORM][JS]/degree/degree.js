function getdegree() {
    let ssc = document.getElementById('ssc');
    let hsc = document.getElementById('hsc');
    let bsc = document.getElementById('bsc');
    let degree;

    if (!ssc.checked && !hsc.checked && !bsc.checked) {
        alert('Please select a degree!');
    }
    else if (ssc.checked) {
        degree = 'SSC';
    } else if (hsc.checked) {
        degree = 'HSC';
    } else if (bsc.checked) {
        degree = 'BSc';
    }
    alert('Your degree is: ' + degree);
}

