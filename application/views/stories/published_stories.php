<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Published</title>
</head>
<body>
    <table border="2">
        <thead>
            <th>Title</th>
            <th>Content</th>
            <th>Media</th>
        </thead>
        <?php foreach ($published as $val) : ?>
            <tr>
                <td><?= $val['title']; ?></td>
                <td><?= $val['content']; ?></td>
                <td><?= $val['media']; ?></td>
                <td><a href="<?= base_url(); ?>stories/update_form/<?=$val['content_id']?>">Update</a></td>
                <td><a href="<?= base_url(); ?>stories/delete/<?=$val['content_id']?>">Delete</a></td>
        <?php endforeach; ?>
        <a href="<?= base_url(); ?>stories/your_stories">Back</a>
    </table>
</body>
</html>