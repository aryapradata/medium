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
        <img src="<?= base_url().'images/'.$val['media']?>" alt="">
        <h3><?= $val['title']; ?></h3>
        <p><?= $val['content']; ?></p>
        <br>
        <p><a href="<?= base_url(); ?>user/get_user/<?= $val['username']; ?>"><?= $val['first_name']; ?> <?= $val['last_name']; ?></a></p>
        
        <br><br>

        <form action="<?= base_url(); ?>stories/createComment/<?= $val['content_id']; ?>" method="post">
            <input type="text" name="comment" placeholder="Comment...">
            <button type="submit">Submit</button>
        </form>
    <?php endforeach; ?>
    <br><br>
    <?php foreach ($comment as $val) : ?>
        <table border="1">
            <tr>
                <td>
                    <b><?= $val['first_name']; ?> <?= $val['last_name']; ?></b>
                    <p><?= $val['comment']; ?></p>
                    <a href="<?= base_url(); ?>stories/deleteComment/<?= $val['content_id']; ?>/<?= $val['comment_id']; ?>">Delete</a>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>

    <a href="<?= base_url(); ?>stories/index">Back</a>
</body>
</html>