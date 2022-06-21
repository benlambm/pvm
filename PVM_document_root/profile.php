<?php

if (!isset($_SESSION)) {
    session_start();
}
if (empty($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    include 'index.php';
    exit("PLEASE TRY AGAIN: All users must login BEFORE attempting to access directory contents.");
}
$username = $_SESSION['username'];
require_once('database.php');

try {
    $get_user_query = "SELECT * FROM User WHERE Username='$username';";
    $tmp_pdo = $db->query($get_user_query);
    $user = $tmp_pdo->fetch();
} catch (Exception $exception) {
    print($exception . "\n");
    exit($query . " did not work");
}

$email = $user[1];
$first_name = $user[3];
$last_name = $user[4];
$bday = $user[5];
$birthday = new DateTime($bday);
$mday = $user[6];
$phone = $user[7];
$image_name = $user[8];

//determine how long this User has been a church member
$today = new DateTime();
$mem_start_date = new DateTime($mday);
$mem_length = $mem_start_date->diff($today);

?>
<?php include('header.php') ?>

    <h1>Member Home Page</h1>

    <div id="heroprofile">
        <h3 id="profile-header">Member<br><?php echo $mem_length->format('%y years'); ?></h3>

        <img src="images/<?php echo $image_name; ?>" alt="profile picture" id="profile-pic">
    </div>
    <p id="pp">
        <?php echo $first_name . " " . $last_name; ?> has been a member of Park View Ministries
        since <?php echo $mem_start_date->format('M d, Y'); ?>.
        <br>
        <strong>Birthday: </strong> <?php echo $birthday->format('M d, Y'); ?> <br>
        <strong>Phone Number: </strong> <?php echo $phone; ?>
        <br>
        <strong>Email: </strong> <?php echo $email; ?>
    </p>


<?php include('footer.php') ?>