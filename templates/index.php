<?php
/** @var \App\View $this */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THE NEW YORK TIMES</title>
</head>
<body>
    <h1>News</h1>
    <?php foreach ($this->articles as $article):?>
    <article>
        <h2>
            <a href="?ctrl=Article&id=<?= $article->id;?>">
                <?= $article->title; ?>
            </a>
        </h2>
        <p><?= $article->shortContent; ?></p>
    </article>

    <hr>
    <?php endforeach; ?>

    <button>
        <a href="login.php">
            log in
        </a>
    </button>

</body>
</html>