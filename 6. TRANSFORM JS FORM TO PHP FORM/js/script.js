
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let password = document.getElementById('password').value;

    // Send password to a PHP script for validation
    fetch('./js/login.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'password=' + encodeURIComponent(password),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.getElementById('hidden').style.display = 'block';
            document.getElementById('hidden1').style.display = 'none';

        }
        else{
            document.getElementById('hidden1').style.display = 'block';
            document.getElementById('hidden').style.display = 'none';

        }
    });
});