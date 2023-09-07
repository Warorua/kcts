<?php

//session_start();

$errmsg_arr = array();

$errflag = false;

include('./db.php');
include('./functions.php');
include('./conn2.php');
$user = $_POST['user'];
$pass = $_POST['pass'];
$mode = 'C0';
$source_id = '';

$status = 0;
$user_id = '';
/*
	$query = mysqli_query($conn2,"SELECT * FROM users natural join employee where username='$user' and password='$pass' and io='1'");
	$count = mysqli_num_rows($query);
	while($row = mysqli_fetch_assoc($query)){
		if($count > 0) {
			session_regenerate_id();
			$name = $row['first_name'] . ' ' . $row['last_name'];

			$_SESSION['ID'] = $row['eid'];
			$_SESSION['UID'] = $row['uid'];
			$_SESSION['TYPE'] = $row['user_type'];
			$_SESSION['NAME'] = $name;
			echo "true";
		}
	
	}
*/


try {

	$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
	$stmt->execute(['email' => $user]);
	$row = $stmt->fetch();
	if ($row['numrows'] > 0) {

		$user_id = $row['id'];

		if ($row['source'] == 'C0') {
			if ($row['status']) {
				if (password_verify($pass, $row['password'])) {
					if ($row['type'] == 2) {
						$_SESSION['admin'] = $row['id'];
					} else {

						$status = 1;
						$status_info = 'Login Successful';
						$pass = $row['password'];

						login_log($user, $pass, $status, $mode, $user_id, $source_id, $status_info);

						//twoAuth($row['id'], $row['two_auth'], $row['two_auth_secret']);

						if ($row['two_auth'] != 0) {
							if ($row['two_auth'] == 1) {
								$_SESSION['id_twoAuth'] = $row['id'];
								$_SESSION['mode_twoAuth'] = 1;
							} else {
								$_SESSION['id_twoAuth'] = $row['id'];
								$_SESSION['mode_twoAuth'] = 2;
							}
							header('location: ./two-steps.php');
						} else {
							$_SESSION['user_id'] = $row['id'];
							$_SESSION['info'] = 'Hello, ' . $row['first_name'];
							$name = $row['first_name'] . ' ' . $row['last_name'];
							$_SESSION['ID'] = $row['id'];
							$_SESSION['UID'] = $row['id'];
							$_SESSION['TYPE'] = $row['type'];
							$_SESSION['NAME'] = $name;
							echo "true";
						}


						die();
					}
				} else {
					echo 'Incorrect Password';
				}
			} else {
				echo 'Account not activated.';
			}
		} else {
			if ($row['source'] == 'G0') {
				echo 'This account has been registered with Google!';
			} elseif ($row['source'] == 'F0') {
				echo 'This account has been registered with Facebook!';
			} elseif ($row['source'] == 'T0') {
				echo 'This account has been registered with Twitter!';
			} elseif ($row['source'] == '') {
				echo 'This account has an error!';
			}
		}
	} else {

		echo 'Email not found';
	}
} catch (PDOException $e) {
	echo "There is some problem in connection: " . $e->getMessage();
}
