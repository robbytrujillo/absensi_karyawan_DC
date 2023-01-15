<?php
include("connection.php");
include("Users.php");

session_start();

$user = new Users();

if (isset($_POST['login'])) {

    if (strlen($_POST['nip']) <= 2 || strlen($_POST['password']) <= 2) {
        //echo "testing";
        header("location:index.php?message=data yang anda inputkan tidak valid");
    } else {
        // echo "aman";
        $user->set_login_data($_POST['nip'], $_POST['password']);

        $id = $user->get_employe_id();
        $password = $user->get_password();

        $sql = "SELECT * FROM users WHERE employe_id=$id AND password='$password' ";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            //data yang akan masuk ke bagian dashboard
            while ($row = $result->fetch_assoc()) {
                $_SESSION['status'] = "login";
                $_SESSION['employe_id'] = $row['employe_id'];
                $_SESSION['fullname'] = $row['fullname'];
                $_SESSION['role'] = $row['role'];
            }
            if ($_SESSION['role'] == 'admin') {
                header("location:dashboard/index-admin.php");
            } else {
                header("location:dashboard/index.php");
            }

        } else {
            header("location:index.php?message=user dan password gagal!!");
        }


    }

}

?>