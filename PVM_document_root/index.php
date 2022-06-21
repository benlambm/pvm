<?php include('header.php') ?>

<header>
    <h1>Park View Ministries</h1>
</header>
<p>
    <span class="intro-line">Welcome to our new Online Church Directory!</span>
</p>

<div id="login_form">
    <p>Please Login below using your e-mail address:</p>
    <form action="user_login.php" method="POST">
        <label>Email:</label>
        <input type="email" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="User Login">
    </form>
</div>

<?php include('footer.php') ?>

