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
        <h3><?= $val['title'] ?></h3>
        <p><?= $val['content'] ?></p>
        <a href="<?= base_url(); ?>stories/update/<?= $val['content_id']?>">Edit Content</a>
        <a href="<?= base_url(); ?>stories/delete/<?=$val['content_id']?>">Delete</a>
    <?php endforeach; ?>
    <a href="<?= base_url(); ?>stories/index">Back</a>
</body>
</html>