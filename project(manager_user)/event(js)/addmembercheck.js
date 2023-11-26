function getmember() {   
    let  qa = document.getElementById('QA').checked;
    let  sm = document.getElementById('SM').checked;
    let  sa = document.getElementById('SA').checked;
    let username = document.getElementById('username').value;

    if (qa || sm|| sa)
    {
        if (username === '') {
            alert("Select a user");
            return false;
        }

        return true;
    }else
    {
        alert("Select Role");
        return false;
    }   
}