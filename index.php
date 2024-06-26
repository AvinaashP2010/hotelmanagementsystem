<!DOCTYPE html>
<html lang="en">

<style>

body {
    font-family: Arial, sans-serif;
    background-image: url('');
    background-repeat: no-repeat;
    background-size: cover;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 450px;
    margin: 100px auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.5);
    max-width: 430px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="userType">User Type:</label>
                <select id="userType" name="userType">
                    <option value="receptionist">Receptionist</option>
                    <option value="manager">Manager</option>
                </select>
            </div>
         <button type="submit">Login</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>

<script>
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var userType = document.getElementById("userType").value;

    // You can add your authentication logic here
    // For simplicity, I'll just log the credentials to the console
    console.log("Username:", username);
    console.log("Password:", password);
    console.log("User Type:", userType);

    // Redirect based on user type
    if (userType === "receptionist") {
        window.location.href = "receptionist.html";
    } else if (userType === "manager") {
        window.location.href = "manager.html";
    }
});
</script>
</html>
