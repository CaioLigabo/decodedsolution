function login() {
    // Get values from the form
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Create a FormData object and append form data
    var formData = new FormData();
    formData.append("username", username);
    formData.append("password", password);

    // Make an AJAX request to the server using Fetch API
    fetch("log.php", {
        method: "POST",
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        // Handle the response from the server
        if (data.success) {
            document.getElementById("result").innerHTML = "Login successful!";
            // You can redirect to another page or perform other actions here
        } else {
            document.getElementById("result").innerHTML = "Login failed. Please check your username and password.";
        }
    })
    .catch(error => {
        console.error("Error:", error);
    });
}

