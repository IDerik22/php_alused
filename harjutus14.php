<?php
/*
14 PHP
Erik Teppan
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .img-small {
            cursor: pointer;
            width: 100%;
        }
    </style>
    <title>Suvaline pilt</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <?php
            $dir = "pildid/";
            $images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            if (count($images) > 0) {
                $randomImage = $images[array_rand($images)];
                foreach ($images as $image) {
                    ?>
                    <div class="col-3">
                        <img src="<?php echo $image; ?>" alt="Pisipilt" class="img-thumbnail img-small">
                    </div>
                    <?php
                }
            } else {
                echo "Piltide kataloog on tühi.";
            }
            ?>
        </div>
        <div class="text-center">
            <form action="">
                <div class="form-group">
                    <label for="imgSize">Sisesta suure pildi suurus (px):</label>
                    <input type="text" class="form-control" id="imgSize" name="imgSize">
                </div>
                <button type="submit" class="btn btn-primary">Muuda suurust</button>
            </form>
        </div>
        <div class="text-center my-5">
            <?php
            if (isset($_GET["imgSize"]) && is_numeric($_GET["imgSize"])) {
                $imgSize = intval($_GET["imgSize"]);
            } else {
                $imgSize = 500;
            }
            ?>
            <img src="<?php echo $randomImage; ?>" alt="Suurem pilt" class="img-big"
                style="width: <?php echo $imgSize; ?>px;">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <div class="text-center my-5">
        <?php
        if (isset($_GET["imgSize"]) && is_numeric($_GET["imgSize"])) {
            $imgSize = intval($_GET["imgSize"]);
        } else {
            $imgSize = 500;
        }
        ?>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5K"
        crossorigin="anonymous"></script>
    </script>
</body>

</html>