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
                alert('Task priority must be alphabetical');
                return false;
            }
        }
    }
    
}