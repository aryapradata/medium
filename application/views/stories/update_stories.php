<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Stories</title>
</head>
<body>
<?php foreach ($stories as $val) : ?>
    <form action="<?= base_url(); ?>stories/update/<?= $val['content_id']; ?>" method="post">
        Title: <input type="text" name="title" value="<?= $val['title']; ?>"><br>
        Content: <input type="text" name="content" value="<?= $val['content']; ?>"><br>
        Media: <input type="file" name="media" value="<?= $val['media']; ?>"><br>
        <button type="submit">Update</button>
    </form>
<?php endforeach; ?>
</body>
</html>