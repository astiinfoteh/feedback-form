<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form action="/submit-feedback" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <label for="Mobile No.">Mobile No.:</label><br>
        <input type="number" id="number" name="Mobile No."><br><br>
        
        <label for="feedback">Feedback:</label><br>
        <textarea id="feedback" name="feedback" rows="4" cols="50" placeholder="Write your feedback here..."></textarea><br><br>
        
        <input type="submit" value="Submit Feedback">
    </form>
</body>
</html>

