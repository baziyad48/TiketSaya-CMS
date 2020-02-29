<?php

include 'firebase.php';

if (isset($_POST['sign_in'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username != null && $password != null) {
        //Nama child-nya nanti tolong sesuaikan.
        $reference = 'User/' . $username;
        $data = $database->getReference($reference)->getValue();

        if ($data['username'] == $username) {
            if ($data['password'] == $password) {
                session_start();
                $_SESSION['username'] = $username;
                header('location: ../dashboard.php');
            } else {
                echo "Username atau Password salah!";
            }
        } else {
            echo "Username atau Password salah!";
        }
    }
}
