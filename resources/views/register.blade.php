<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanberbook | Sign-Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>

    <h3>Sign-Up Form</h3>

    <form method="POST" action="{{ url('/welcome') }}">
        @csrf
        <p><label for="first-name">First name:</label></p>
        <input type="text" name="first_name">

        <p></p><label for="last-name">Last name:</label></p>
        <input type="text" name="last_name">

        <p><label for="gender">Gender:</label></p>
        <input type="radio" id="gender" name="gender" value="male"> <label for="male">Male</label> <br>
        <input type="radio" id="gender" name="gender" value="female"> <label for="female">Female</label> <br>
        <input type="radio" id="gender" name="gender" value="other"> <label for="other">Other</label> <br>

        <p><label for="nationality">Nationality:</label></p>
        <select name="nationality" id="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Australian">Australian</option>
            <option value="English">English</option>
            <option value="Indian">Indian</option>
            <option value="Chinese">Chinese</option>
        </select>

        <p><label for="language">Language spoken:</label></p>
        <input type="checkbox" name="language" id="bahasa" value="bahasa"> <label for="bahasa">Bahasa</label> <br>
        <input type="checkbox" name="language" id="english" value="english"> <label for="english">English</label> <br>
        <input type="checkbox" name="language" id="other" value="other"> <label for="other">Other</label> <br>

        <p><label for="bio">Bio</label></p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>

        <p><input type="submit" value="Simpan"></p>
    </form>
</body>
</html>