<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <?php foreach ($stories as $val) : ?>
            <tr>
                <td>
                    <a href="<?= base_url(); ?>stories/open_stories/<?=$val['content_id']; ?>"><?= $val['title']; ?></a>
                    <p><?= $val['first_name']; ?> <?= $val['last_name']; ?></p>
                </td>
            </tr>
        <?php endforeach; ?>
        <a href="<?= base_url(); ?>stories/create_form">Create Story</a>
        <br>
        <a href="<?= base_url(); ?>stories/drafts">Drafts</a>
    </table>  
    <a href="<?= base_url(); ?>auth/logout">Logout</a>
</body>
</body>
</html>