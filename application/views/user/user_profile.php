<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php foreach ($user as $val) : ?>
    <title><?= "Welcome " . $val['first_name'] . "!" ?></title>
</head>

<body>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?= $val['first_name'] . " " . $val["last_name"]; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?= $val['username'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $val['email'] ?></td>
        </tr>
        <tr>
            <td>Bio</td>
            <td>:</td>
            <td><?= $val['bio'] ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?php
                if ($val['role_id'] == 1) {
                    echo "Administrator";
                } else {
                    echo "User";
                } ?></td>
        </tr>
    </table>
    <button type="button"><a href="<?= base_url("user/get_data/" . $val['user_id']); ?>">Edit Profile</a></button>
    <?php endforeach; ?>
    
    <?php foreach ($comment as $val) : ?>
        <table border="1">
            <tr>
                <td>
                    <a href=""><?= $val['title']; ?></a>
                    <p><?= $val['comment']; ?></p>
                    <a href="<?= base_url(); ?>stories/deleteComment/<?= $val['content_id']; ?>/<?= $val['comment_id']; ?>">Delete</a>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
        <button type="button"><a href="<?= base_url('auth/logout'); ?>">LOGOUT</a></button>
        <a href="<?= base_url(); ?>stories/index">Back</a>

</body>

</html>