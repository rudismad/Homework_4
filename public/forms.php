<form action="login.php" method="post">
<input type="email" name="myEmail" placeholder="example@example.com" >
<input type="password" name="myPw" placeholder="password" required>
<!-- <input type="text" name="myName" placeholder="username" value="Rudis"> -->
<button type="submit">Login</button>
</form>
<?php
// Check if login information is valid
if (isset($_POST['myPw']) && $_POST['myPw'] != "" && isset($_POST['myName'])) {
    $myName = $_POST['myName'];
    $myPw = $_POST['myPw'];
    echo "Going to log in $myName with password $myPw in some place";
} 