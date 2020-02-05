<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php foreach ($stories as $val) : ?>
        <title><?= $val['title']; ?></title>
    <?php endforeach; ?>
</head>
<body>
    <?php foreach ($stories as $val) : ?>
        <h3><?= $val['title']; ?></h3>
        <p><?= $val['content']; ?></p>
        <br>
        <p><a href="<?= base_url(); ?>user/get_user/<?= $val['username']; ?>"><?= $val['first_name']; ?> <?= $val['last_name']; ?></a></p>
    <?php endforeach; ?>
    <a href="<?= base_url(); ?>stories/index">Back</a>
</body>
</html>