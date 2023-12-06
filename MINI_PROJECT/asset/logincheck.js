function loginvheck(){

    let id = document.getElementById('id').value;
    let password = document.getElementById('password').value;

    if(id==''||password=='')
    {
        document.getElementById('h1').innerHTML = "empty field";
        return false;
    }
    return true;
}