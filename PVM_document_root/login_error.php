<?php
global $username;
global $password;
?>
<?php include 'header.php' ?>
    <p>
        LOGIN FAILED: Please double check your credentials below:
    </p>
    <p>
        Your username is: <?php echo $username; ?>
    </p>
    <p>
        Your password is: <?php echo $password; ?>
    </p>
<?php include 'footer.php' ?>