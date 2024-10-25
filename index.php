<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #cccccc;
            color: #212529;
            margin: 0;
            display: flex;
            flex-direction: column; /* Align items in a column */
            align-items: center;
            min-height: 100vh;
            background-image: url("back.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            color: #00cccc; /* Slightly darker pink for the title */
            text-align: center; 
            margin-bottom: -30px; /* Add some space below the title */
            margin-right: 450px;
            background-color: #e91e63;
            padding: 40px;
            border-radius: 25px;
        }

        form {
            background: #fce4ec; /* Light pink background for the form */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
        }

        #formm {
            background-color: #ff80ff;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #ffffff;
        }

        input, textarea {
            width: calc(100% - 22px);
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        button[type="submit"] {
            background-color: #ff66ff;
            color: white;
            padding: 10px 20px;
            border: dotted;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <h1>PHP</h1>

    <form action="/submit" method="post" id="formm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone">

        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <label for="time">Time:</label>
        <input type="time" id="time" name="time">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5"></textarea>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
<?php
    $name = "Bro";
    echo $name;
?>