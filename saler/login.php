<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'he';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($stmt = $con->prepare('SELECT id, password, role FROM users WHERE role=1 AND username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password, $role);
        $stmt->fetch();
        // if (password_verify($_POST['password'], $password)) {
        if ($_POST['password'] == $password) {
            $_SESSION['logined'] = true;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            $_SESSION['role'] = $role;
            header('Location: index.php?action=index&controller=dashboard');
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect username!';
    }

	$stmt->close();
}
?>