<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <?php foreach ($stories as $val) : ?>
            <tr>
                <td><a href="<?= base_url(); ?>stories/open_stories/<?= $val['title']; ?>/<?=$val['content_id']; ?>"><?= $val['title']; ?></a></td>
            </tr>
        <?php endforeach; ?>
        <a href="<?= base_url(); ?>stories/create_form">Create Story</a>
        <a href="<?= base_url(); ?>stories/view_all">Drafts</a>
    </table>   
</body>
</body>
</html>