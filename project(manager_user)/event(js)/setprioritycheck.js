function getpriority() {
    let priority_task = document.getElementById('priority_task').value;
    let deadline = document.getElementById('deadline').value;

    let alph = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    if (priority_task === '' || deadline === '') {
        alert('Fill up the fields');
        return false;
    } else {
        for (let i = 0; i < priority_task.length; i++) {
            if (alph.indexOf(priority_task[i]) === -1) {
                alert('Task priority must be a valid');
                return false;
            }
        }
        alert('Priority added successfully');
        return true;
    }
    
}

function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    }

    const xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const suggestions = JSON.parse(this.responseText);

            if (suggestions.length === 0) {
                document.getElementById("txtHint").innerHTML = "No matching suggestions found.";
                return false;
            } else {
                document.getElementById("txtHint").innerHTML = suggestions.join(', ');
            }
        }
    };

    xhttp.open("GET", "../controller/setTaskPrioritycheck.php?q=" + str, true);
    xhttp.send();
}


