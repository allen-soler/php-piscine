<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['passwd'])) {
	$_SESSION['user'] = "";
	$_SESSION['passwd'] = "";

}
if (isset($_GET)) {
	if (isset($_GET['login']) && isset($_GET['passwd']) && isset($_GET['submit'])) {
		$_SESSION['user'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
}
?>

<html>
	</head>
	<body>
	<form action="index.php" method="get">
	<input name="login" value="<?php echo $_SESSION?>">
	<br/>
	<input name="passwd" value="<?php echo $_SESSION['passwd']?>">
	<input type="submit" name="submit" value="OK">
	</form>
	</body>
</html>
