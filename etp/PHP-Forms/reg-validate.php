<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        die("Name is required.");
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $_POST["name"])) {
        die("Name can only contain letters and spaces.");
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        die("Email is required.");
    } elseif (!preg_match("/^[\w\-\.]+@([\w-]+\.)+[a-zA-Z]{2,}$/", $_POST["email"])) {
        die("Invalid email format.");
    } else {
        $email = $_POST["email"];
    }

    // Validate Password
    if (empty($_POST["password"])) {
        die("Password is required.");
    } elseif (!preg_match("/^.{6,}$/", $_POST["password"])) { // At least 6 characters
        die("Password must be at least 6 characters long.");
    } else {
        $password = htmlspecialchars($_POST["password"]);
    }

    // Validate Gender
    if (empty($_POST["gender"])) {
        die("Gender is required.");
    } elseif (!preg_match("/^(male|female)$/", $_POST["gender"])) {
        die("Invalid gender selected.");
    } else {
        $gender = htmlspecialchars($_POST["gender"]);
    }

    // Validate Skills
    if (empty($_POST["skills"])) {
        die("At least one skill must be selected.");
    } else {
        $validSkills = ["PHP", "Laravel", "MySQL"];
        foreach ($_POST["skills"] as $skill) {
            if (!in_array($skill, $validSkills)) {
                die("Invalid skill selected.");
            }
        }
        $skills = $_POST["skills"];
    }

    // Validate Address
    if (empty($_POST["address"])) {
        die("Address is required.");
    } else {
        $address = htmlspecialchars($_POST["address"]);
    }

    // If all fields are valid
    echo "<h2>Form Submitted Successfully</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Skills:</strong> " . implode(", ", $skills) . "</p>";
    echo "<p><strong>Address:</strong> $address</p>";
}
?>
