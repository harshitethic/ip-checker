document.addEventListener('DOMContentLoaded', function() {
    fetch('https://ipapi.co/json/')
        .then(response => response.json())
        .then(data => {
            displayUserInfo(data.ip, data.country_name, data.city);
        });

    const emailForm = document.getElementById('email-form');
    emailForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const email = document.getElementById('email').value;
        if (email) {
            const ip = document.getElementById('ip').textContent;
            const country = document.getElementById('country').textContent;
            const city = document.getElementById('city').textContent;

            fetch('process.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    email: email,
                    ip: ip,
                    country: country,
                    city: city
                })
            })
                .then(response => response.text())
                .then(result => {
                    alert(result);
                    navigator.clipboard.writeText(`User: ${ip}, Country: ${country}, City: ${city}`)
                        .then(() => {
                            alert('Data copied to clipboard');
                        })
                        .catch(err => {
                            alert('Error copying data to clipboard');
                        });
                })
                .catch(error => {
                    alert('Error saving data');
                });
        } else {
            alert('Please enter a valid email');
        }
    });
});

function displayUserInfo(ip, country, city) {
    document.getElementById('ip').textContent = ip;
    document.getElementById('country').textContent = country;
    document.getElementById('city').textContent = city;
}
