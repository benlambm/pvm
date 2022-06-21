<?php
include('header.php');
?>

    <h1>Search Results</h1>

<?php
//var_dump is for troubleshooting only
#var_dump($_SESSION['user']);
if (!$_SESSION['user']) {
    include('search_fail.php');
    include('footer.php');
    exit();
}
?>
    <div id="display_search">
    <p><strong>
            <?php echo $_SESSION['user']['FirstName'] . " " . $_SESSION['user']['LastName'] . ": "; ?></strong>
    </p>
    <p>
        <?php echo "\nPhone Number: " . $_SESSION['user']['Phone']; ?>
    </p>
    <p>
        <?php echo "\nEmail: " . $_SESSION['user']['Username']; ?>
    </p>
    <p>
        <?php echo "\nBirthday: " . $_SESSION['user']['Birthday']; ?>
    </p>
    <img src="images/<?php echo $_SESSION['user']['ImageFileName']; ?>" alt="profile picture" class="member-pic">


    <div>
<?php
include('footer.php');
?>