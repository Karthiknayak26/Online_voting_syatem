<?php
session_start();
error_reporting(0);
if ($_SESSION['adminLogin'] != 1) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <style>
        .del,
        .edit,
        .verify {
            display: block;
            margin-top: 0.5rem;
            margin-bottom: 0.5rem;
        }

        .verify {
            background-color: royalblue;
        }

        td {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <span class="menu-bar" id="show" onclick="showMenu()">&#9776;</span>
            <span class="menu-bar" id="hide" onclick="hideMenu()">&#9776;</span>
            <span class="logo">Voting System</span>
            <span class="profile" onclick="showProfile()"><img src="../res/user3.jpg" alt=""><label><?php echo $_SESSION['name']; ?></label></span>
        </div>
        <?php include '../includes/menu.php'; ?>
        <div id="profile-panel">
            <i class="fa-solid fa-circle-xmark" onclick="hidePanel()"></i>
            <div class="dp"><img src="../res/user3.jpg" alt=""></div>
            <div class="info">
                <h2><?php echo $_SESSION['name']; ?></h2>
                <h5>Admin</h5>
            </div>
            <div class="link"><a href="../includes/admin-logout.php" class="del"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></div>
        </div>
        <div id="main">
            <div class="heading"><a href="../registration.php" class="add-btn" onclick="showForm()">+ Add</a>
                <h2>Voters Information</h2>
            </div>
            <div class="heading">
                <h2 style="background:royalblue;">Verified Voters</h2>
            </div>
            <table class="table">
                <thead>
                    <th>Email</th>
                    <th>USN</th>
                    <th>Phone No</th>
                    <th>Status</th>
                    <th>Verify Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php

                    $con = mysqli_connect('localhost', 'root', '', 'voting');

                    $query = "SELECT * FROM register WHERE verify='yes'";

                    $data = mysqli_query($con, $query);

                    while ($result = mysqli_fetch_assoc($data)) {
                        // Determine verify button display
                        $verify = ($result['verify'] == "yes") ? "none" : "block";

                        echo "<tr>
                        <td>" . $result['email'] . "</td>
                        <td>" . $result['usn'] . "</td>
                        <td>" . $result['phone'] . "</td>
                        <td>" . $result['status'] . "</td>
                        <td>" . ($result['verify'] == 'yes' ? 'Verified' : 'Not Verified') . "</td>
                        <td>
                        <a href='verify_voter.php?vid=$result[id]' style='display:$verify' class='del verify' onClick='return validconfirm()'><i class='fa-solid fa-check'></i> Verify</a>
                        <a href='user-update.php?email=$result[email]&usn=$result[usn]&ph=$result[phone]' class='edit'><i class='fa-solid fa-pen-to-square'></i> Edit</a>
                        <a href='user-delete.php?email=$result[email]&ph=$result[phone]' class='del' onClick='return delconfirm()'><i class='fa-solid fa-trash-can'></i> Delete</a>
                        </td>
                        </tr>";
                    }

                    mysqli_close($con);
                    ?>
                </tbody>
            </table>
            <div class="heading">
                <h2 style="background:royalblue;">Not Verified Voters</h2>
            </div>
            <table class="table">
                <thead>
                    <th>Email</th>
                    <th>USN</th>
                    <th>Phone No</th>
                    <th>Status</th>
                    <th>Verify Status</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php

                    $con = mysqli_connect('localhost', 'root', '', 'voting');

                    $query = "SELECT * FROM register WHERE verify='no'";

                    $data = mysqli_query($con, $query);

                    while ($result = mysqli_fetch_assoc($data)) {
                        // Determine verify button display
                        $verify = ($result['verify'] == "yes") ? "none" : "block";

                        echo "<tr>
                        <td>" . $result['email'] . "</td>
                        <td>" . $result['usn'] . "</td>
                        <td>" . $result['phone'] . "</td>
                        <td>" . $result['status'] . "</td>
                        <td>" . ($result['verify'] == 'yes' ? 'Verified' : 'Not Verified') . "</td>
                        <td>
                        <a href='verify_voter.php?vid=$result[id]' style='display:$verify' class='del verify' onClick='return validconfirm()'><i class='fa-solid fa-check'></i> Verify</a>
                        <a href='user-update.php?email=$result[email]&usn=$result[usn]&ph=$result[phone]' class='edit'><i class='fa-solid fa-pen-to-square'></i> Edit</a>
                        <a href='user-delete.php?email=$result[email]&ph=$result[phone]' class='del' onClick='return delconfirm()'><i class='fa-solid fa-trash-can'></i> Delete</a>
                        </td>
                        </tr>";
                    }

                    mysqli_close($con);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script>
        function delconfirm() {
            return confirm('Delete this Voter?');
        }

        function validconfirm() {
            return confirm('Validate this Voter?');
        }
    </script>
</body>

</html>