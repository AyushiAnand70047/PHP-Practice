<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
<form action="reg-validate.php" method="post">
        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <!-- Gender -->
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <br><br>

        <!-- Skills -->
        <label for="skills">Skills:</label>
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" id="laravel" name="skills[]" value="Laravel">
        <label for="laravel">Laravel</label>
        <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
        <label for="mysql">MySQL</label>
        <br><br>

        <!-- Address Dropdown -->
        <label for="address">Address:</label>
        <select id="address" name="address" required>
            <option value="" disabled selected>Select your address</option>
            <option value="Punjab">Punjab</option>
            <option value="Bihar">Bihar</option>
            <option value="Delhi">Delhi</option>
            <option value="Haryana">Haryana</option>
            <option value="Kashmir">Kashmir</option>
        </select>
        <br><br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
</body>

</html>