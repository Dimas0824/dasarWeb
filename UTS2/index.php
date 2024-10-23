<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

$users = include('users.php');
$username = $_SESSION['username'];
$user = $users[$username];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="navbar">
        <a class="home" href="index.php">Home</a>
        <div class="navbar-right">
            <img src="uploads/<?php echo isset($user['profile_picture']) ? $user['profile_picture'] : 'default.jpg'; ?>" alt="Profile Picture" class="profile-img">
            <span class="username"><?php echo isset($user['name']) ? $user['name'] : ''; ?></span>
            <a href="profile.php">Edit Profil</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <h2>Selamat Datang, <?php echo isset($user['name']) ? $user['name'] : ''; ?></h2>
    </div>
</body>

</html>