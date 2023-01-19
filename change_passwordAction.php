<?php

include 'config.php';


if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];


    $res = mysqli_query($conn, "SELECT * FROM `user` WHERE id=$id AND password='$current_password'");


    if ($res == true) {

        $count = mysqli_num_rows($res);   

        if ($count == 1) {

            if ($new_password == $confirm_password) {



                $res2 = mysqli_query($conn, "UPDATE `user` SET 
                password='$new_password' 
                WHERE id=$id
            ");


                if ($res2 == true) {

                    echo "<script>alert('Password Change Successfully')</script>";
                    echo "<script>location.href = 'index.php'</script>";
                } else {

                    echo "<script>alert('Failed To Change Password')</script>";
                    echo "<script>location.href = 'change_password.php'</script>";
                }
            } else {

                echo "<script>alert('Password Did not match')</script>";
                echo "<script>location.href = 'change_password.php'</script>";
        }
        } else {

            echo "<script>alert('User Not Found')</script>";
            echo "<script>location.href = 'change_password.php'</script>";
        }
    }
}
