function getemail()
{
    let email = document.getElementById('email').value;

    
    if (email=='')
    {
        alert("enter email");
    }
    else 
    {
        alert('YOUR email is : ' + email);
    }
}