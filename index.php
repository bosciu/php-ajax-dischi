<?php 
    require __DIR__ . "/db/databese.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Spotify albums</title>
</head>
<body>
    <?php require __DIR__ . "/container/header.php" ?>
        <main>
            <div class="container">
                <?php foreach ($albums as $album){?>
                    <div class="card">
                        <img src="<?= $album['poster'] ?>" alt="">
                        <h2><?= $album["title"] ?></h2>
                        <h3><?= $album["author"] ?></h3>
                        <h4><?= $album["year"] ?></h4>
                    </div>
                <?php } ?>
            </div>
        </main>
    <?php require __DIR__ . "/container/footer.php" ?>
</body>
</html>