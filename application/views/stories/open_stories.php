<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php foreach ($stories as $val) : ?>
        <h3><?= $val['title']; ?></h3>
        <p><?= $val['content']; ?></p>
        <br>
        <p><?= $val['first_name']; ?> <?= $val['last_name']; ?></p>
        <br>
        <p><?= "Claps : " . $val['clap']; ?></p>
    <?php endforeach; ?>
    <a href="<?= base_url(); ?>stories/index">Back</a>
    <a href="<?= base_url('stories/clap/') . $val['content_id'] ?>">clap</a>
</body>

</html>