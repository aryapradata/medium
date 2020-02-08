<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= "Welcome " . $user['first_name'] . "!" ?></title>
</head>

<body>
    <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><?= $user['first_name'] . " " . $user["last_name"]; ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?= $user['username'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $user['email'] ?></td>
        </tr>
        <tr>
            <td>Bio</td>
            <td>:</td>
            <td><?= $user['bio'] ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?php
                if ($user['role_id'] == 1) {
                    echo "Administrator";
                } else {
                    echo "User";
                } ?></td>
        </tr>
    </table>
    <table>
    <?php foreach ($data as $value){?>
        <tr>
            <td>title</td>
            <td>:</td>
            <td><?= $value['title'] ?></td>
        </tr>
            <?php }; endforeach; die; ?>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?= $user['username'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $user['email'] ?></td>
        </tr>
        <tr>
            <td>Bio</td>
            <td>:</td>
            <td><?= $user['bio'] ?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?php
                if ($user['role_id'] == 1) {
                    echo "Administrator";
                } else {
                    echo "User";
                } ?></td>
        </tr>
    </table>
    }
    
    </table>
    <button type="button"><a href="<?= base_url("user/get_data/" . $user['user_id']); ?>">Edit Profile</a></button>
        <button type="button"><a href="<?= base_url('auth/logout'); ?>">LOGOUT</a></button>
        <a href="<?= base_url(); ?>stories/index">Back</a>

</body>

</html>