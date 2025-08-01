<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['register'])) {
    // Database connection
    $con = mysqli_connect("localhost", "root", "", "voting");

    if (!$con) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    // Sanitize inputs
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $usn = mysqli_real_escape_string($con, $_POST['usn']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Validation checks
    $errors = [];

    // Email validation
    $email_pattern = '/^(.+\.(22|23|24)(cs|ai|ad|ec|me|cv)\d{3}@sode-edu\.in)$/';
    if (!preg_match($email_pattern, $email)) {
        $errors[] = "Invalid email format. Use example.22cs123@sode-edu.in";
    }

    // USN validation
    if (strlen($usn) < 10) {
        $errors[] = "USN must be at least 10 characters";
    }

    // Password validation
    if (strlen($_POST['password']) < 8) {
        $errors[] = "Password must be at least 8 characters";
    }

    // Display validation errors
    if (!empty($errors)) {
        echo "<script>
                alert('" . implode('\n', $errors) . "');
                window.history.back();
              </script>";
        exit();
    }

    // Check for existing entries
    $check_query = "SELECT * FROM register WHERE email = '$email' OR usn = '$usn' OR phone = '$phone'";
    $check_result = mysqli_query($con, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $duplicate = mysqli_fetch_assoc($check_result);
        $duplicate_message = "Registration failed. ";

        if ($duplicate['email'] == $email) $duplicate_message .= "Email already registered. ";
        if ($duplicate['usn'] == $usn) $duplicate_message .= "USN already registered. ";
        if ($duplicate['phone'] == $phone) $duplicate_message .= "Phone already registered. ";

        echo "<script>
                alert('$duplicate_message');
                window.history.back();
              </script>";
        exit();
    }

    // Insert new registration
    $query = "INSERT INTO register (email, usn, password, phone, status, verify) 
              VALUES ('$email', '$usn', '$password', '$phone', 'not voted', 'no')";

    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
                alert('Registration Successful!');
                window.location.href='index.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Registration Failed: " . mysqli_error($con) . "');
                window.history.back();
              </script>";
        exit();
    }

    mysqli_close($con);
}
