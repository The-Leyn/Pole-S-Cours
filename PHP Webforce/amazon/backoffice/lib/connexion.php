<?php
if (!empty($_POST)) {

    extract($_POST);
    if (!empty($email) && !empty($password)) {

        $passwordCrypted = md5($password);
        echo $passwordCrypted;

        $sqlSelectUser = "SELECT * FROM user WHERE email = '$email' AND password = '$passwordCrypted'";

        $tableSelectUser = mysqli_query($connexion, $sqlSelectUser);

        $user = mysqli_fetch_assoc($tableSelectUser);
        print_r($user);


        if (mysqli_num_rows($tableSelectUser) == 1) {


            session_start();

            $_SESSION['user_id'] = $user['id_user'];
            $_SESSION['user_firstname'] = $user['firstname'];
            $_SESSION['user_lastname'] = $user['lastname'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_register_date'] = $user['date_register'];
            $_SESSION['user_statut'] = $user['user_statut'];
            $_SESSION['user_image'] = $user['user_image'];


            if ($user['user_statut'] == 0) {
                // Utilisateur
                header('Location: ../index.php');
            } else if ($user['user_statut'] == 1) {
                // Modérateur
                header('Location: index.php');
            } else if ($user['user_statut'] == 2) {
                // Administrateur
                header('Location: index.php');
            }


            // echo "Bienvenue, " . $_SESSION['user_lastname']  . $_SESSION['user_name'];
        } else {
            $backgroundImage = "https://source.unsplash.com/oWTW-jNGl9I/600x800";
            $textError = "Identifiant ou mot de passe incorrect";
        }
    }
}
