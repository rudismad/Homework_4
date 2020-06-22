
<form action="login.php" method="post">
<label for="login" class="add-form">Email:</label>
<input id="login" type="email" name="myEmail" placeholder="user@todolist.com" required >
<label for="pw" class="add-form">Password:</label>
<input id="pw" type="password" name="myPw" placeholder="password" required>
<button type="submit">Login</button>
</form>
<?php
if (isset($_POST['myPw']) && $_POST['myEmail'] != "") {
    $myName = $_POST['myEmail'];
    $myPw = $_POST['myPw'];
}