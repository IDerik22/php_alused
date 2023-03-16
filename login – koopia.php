<?php
$lifetime = 1800;
session_set_cookie_params($lifetime);
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
  header('Location: admin.php');
  exit;
}

if (isset($_POST['login'])) {
  if ($_POST['username'] === 'erik' && $_POST['password'] === 'password') {
    $_SESSION['logged_in'] = true;
    header('Location: admin.php');
    exit;
  } else {
    $error = 'Vale kasutaja nimi või parool';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <title>Sisselogimine</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto justify-content-end">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <form action="index.php" method="POST">
                            <li class="nav-item">
                                <button type="submit" class="btn">Back to main page</button>
                            </li>
                        </form>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <h2 class="text-center">Sisselogimine</h2>
            <?php if (isset($error)): ?>
            <p class="text-danger text-center"><?php echo $error; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Kasutajanimi:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">Parool:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <input
                    type="submit"
                    class="btn btn-primary btn-block"
                    value="Login"
                    name="login">
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        </div>
        <footer class="bg-light py-3">
            <div class="container">
                <p class="text-center">&copy; Erik Teppan
                    <?php echo date('Y'); ?></p>
            </div>
        </footer>
    </body>
</html>