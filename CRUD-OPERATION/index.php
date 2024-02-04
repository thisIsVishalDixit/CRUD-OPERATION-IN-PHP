<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #ffffff;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"], form input[type="reset"], form button {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        form input[type="submit"]:hover, form input[type="reset"]:hover, form button:hover {
            background-color: #45a049;
        }

        form a {
            display: block;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }

        .data-display {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .data-display h2 {
            color: #333;
        }

        .data-display table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-display th, .data-display td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Data Display</title>
</head>
<body>


<form action="insert.php" method="POST" enctype="multipart/form-data">
    <h2>Enter Information</h2>
    <input type="text" placeholder="Enter name here" name="name" required><br>
    <input type="text" placeholder="Enter mobile number here" name="mobile" pattern="[0-9]{10}" required><br>
    <input type="email" placeholder="Enter email here" name="email" required><br>
    <input type="text" placeholder="Enter city name here" name="city" required><br>
    <input type="text" placeholder="Enter address here" name="address" required><br>
    <input type="file" name="image"><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">
    <button type="button" onclick="window.location.href='display.php'">Read Data</button>

</form>

</body>
</html>
