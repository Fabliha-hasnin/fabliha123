function getbg() {
    
    let bg= document.getElementById('bg').value;

    if (bg=='')
    {
        alert("blood group must be selected");
    }
    else{
        document.getElementById("h").innerHTML= bg;
    }
}