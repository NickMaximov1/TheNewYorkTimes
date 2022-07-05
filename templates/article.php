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
<h1><?= $this->articles->title; ?></h1>
<hr>
<article>
    <p><?= $this->articles->content; ?></p>
    <p><i><?= $this->articles->author; ?></i></p>
</article>



</body>
</html>