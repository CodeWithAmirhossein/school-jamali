<?php

session_start();

$db = mysqli_connect('localhost', 'amir', 'amir', 'jamali');

// Post
if (isset($_POST['postit'])) {
    $subject = $_POST['subject'];
    $text = $_POST['posttext'];

    mysqli_query($db, "INSERT INTO `jamaliposts` (`subject`, `posttext`) VALUES ('$subject', '$text')");
    ?>
    <script>
        window.location.replace('.');
    </script>
    <?php
}

// Login
if (isset($_POST['loginform'])) {
    $phone = $_POST['phonenumber'];
    $pass = $_POST['pass'];

    if ($phone == '9014784361' && $pass == 'admin') {
        $_SESSION['islogin'] = 'yes';
        ?>
        <script>
            window.location.replace('.');
        </script>
        <?php
    }
}

// Logout
if ($_GET['action'] == 'logout') {
    session_destroy();
    ?>
    <script>
        window.location.replace('.');
    </script>
    <?php
}

?>