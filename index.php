<?php require_once './partials/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>Document</title>
</head>
<body>

    <header>
        <div class="navbar">
            <img src="./img/logo.png" alt="">
        </div>
    </header>

    <main>
        <?php foreach( $database as $element){ ?>
            <div class="poster">
                <img src="<?php echo $element ["poster"] ?>" alt="">

                <h3 class="title"><?php echo $element["title"]?></h3>

                <small class="author"><?php echo $element["author"]?></small>

                <h3 class="year"><?php echo $element["year"]?></h3>

                <small class="genre"><?php echo $element["genre"]?></small>
            </div>
        <?php } ?>       
    </main>


    <!-- JS -->
    <script src="./dist/js/app.js"></script>

</body>
</html>