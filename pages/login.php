<?php
// Path: pages\login.php
// Is the user already logged in?

global $token;
if (isset($_SESSION['user']) && $_SESSION['user'] == $token) {
    // Redirect to home page
    echo "<script>window.location.replace(\"index.php?page=competences\");</script>";
    exit;
}

// Is the user trying to log in?
if (isset($_POST['login'])) {
    // Get the user's name and password
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Check the user's name and password
    if ($name == 'jury' && $password == 'Not24get') {
        // Success! Set up the session
        $_SESSION['user'] = $token;
        // Redirect to home page
        echo "<script>window.location.replace(\"index.php?page=competences\");</script>";
        exit;
    } else {
        // Invalid name or password
        $error = 'Invalid name or password';
    }
}

?>

<form method="POST">
    <!-- Login form -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h1>Connexion</h1>
                <p>Merci de remplir les champs ci-dessous</p>
                <hr>
                <label for="name"><b>Nom</b></label>
                <input class="form-control" type="text" placeholder="Nom" name="name" id="name" required>
                <label for="password"><b>Mots de passe</b></label>
                <input class="form-control" type="password" placeholder="Mot de passe" name="password" id="password" required>
                <hr>
                <?php
                    if (isset($error)) {
                        echo "<p class=\"text-danger\">$error</p>";
                    }
                ?>
                <button class="btn btn-primary" type="submit" name="login">Se connecter</button>
            </div>
        </div>
</form>
