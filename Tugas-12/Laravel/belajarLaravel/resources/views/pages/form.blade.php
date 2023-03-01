<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>

    <form action="/welcome" method="post">
        @csrf
        <label>First Name: </label><br>
        <input type="text" name="Fname" required><br><br>
        <label>Last Name: </label><br>
        <input type="text" name="Lname" required><br><br>
        <label >Gender: </label><br>
        <input type="radio" name="Gender" required>Male<br>
        <input type="radio" name="Gender" required>Female<br>
        <input type="radio" name="Gender" required>Other<br><br>
        <label>Nationality: </label><br>
        <select name="Nationality" required>
            <option value="Indonesia">Indonesia</option>
            <option value="German">German</option>
            <option value="Japan">Japan</option>
        </select><br><br>
        <label>Language Spoken: </label><br><br>
        <input type="checkbox" name="Language" >Bahasa Indonesia<br>
        <input type="checkbox" name="Language" >English<br>
        <input type="checkbox" name="Language" >Other<br><br>
        <label>Bio: </label><br>
        <textarea name="Bio"cols="30" rows="10"></textarea><br><br>
        <input type="Submit" value="Sin Up">
    </form>
</body>
</html>