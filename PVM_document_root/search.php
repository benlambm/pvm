<?php

session_start();
if (empty($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    include 'index.php';
    exit("PLEASE TRY AGAIN: All users must login BEFORE attempting to access directory contents.");
} ?>

<?php include('header.php') ?>

    <header>
        <h1>Member Search</h1>
        <h2 class="intro-line">What is the first and/or last name?:</h2>
    </header>
    <form action="search_db.php" method="GET">
        <fieldset>
            <legend>SEARCH DIRECTORY</legend>
            <label for="first-name" class="contact">FIRST NAME:</label>
            <input type="text" name="first_name" id="first-name" placeholder="First Name"><br>
            <label for="last-name" class="contact">LAST NAME:</label>
            <input type="text" name="last_name" id="last-name" placeholder="Last Name"><br>
        </fieldset>
        <br>
        <input type="submit">
    </form>
<?php include('footer.php') ?>