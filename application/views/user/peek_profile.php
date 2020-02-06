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
    <?php endforeach; ?>
<br><br>
    <?php foreach ($published as $val) : ?>
            <table border="1">
                <tr>
                    <td>
                        <a href="<?= base_url(); ?>stories/open_stories/<?= $val['content_id']; ?>"><?= $val['title']; ?></a>
                        <p><?= $val['content']; ?></p>
                        <p><?= $val['media']; ?></p>
                    </td>
                </tr>
            </table>
        <?php endforeach; ?>
</body>

</html>