<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <thead>
            <th>Title</th>
            <th>Content</th>
            <th>Media</th>
        </thead>
        <?php foreach ($stories as $val) : ?>
            <tr>
                <td><a href="<?= base_url(); ?>stories/update_form/<?=$val['content_id']?>"><?= $val['title']; ?></a></td>
                <td><?= $val['content']; ?></td>
                <td><?= $val['media']; ?></td>
                <td><a href="<?= base_url(); ?>stories/open_stories/<?= $val['title']; ?>/<?=$val['content_id']?>">Publish</a></td>
                <td><a href="<?= base_url(); ?>stories/delete/<?=$val['content_id']?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>