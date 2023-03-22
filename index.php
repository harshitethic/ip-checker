<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR IP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="https://harshitethic.in" class="nav-link">Home</a>
            <a href="https://harshitethic.in/contact-us" class="nav-link">Contact Us</a>
        </nav>
    </header>
    <div class="container">
        <h1>YOUR IP</h1>
        <form id="email-form">
            <label for="email">Enter your email to copy the data</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Copy Data</button>
        </form>
        <table>
            <tr>
                <th>IP</th>
                <th>Country</th>
                <th>City</th>
            </tr>
            <tr>
                <td id="ip"></td>
                <td id="country"></td>
                <td id="city"></td>
            </tr>
        </table>
    </div>
    <footer>
        Built by <a href="https://harshitethic.in">harshitethic</a>
    </footer>
    <script src="javascript.js"></script>
</body>
</html>
