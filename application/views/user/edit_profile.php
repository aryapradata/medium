<!DOCTYPE html>
<html>

<head>
    <title>EDIT PROFILE</title>
</head>

<body>
    <h1>REGISTER<br>MEDIUM</h1>
    <form action="<?= base_url("User/edit_profile/" . $user['user_id']); ?>" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?= $user['first_name'] ?>"></td>
            <tr>
                <td></td>
                <td><?= form_error('first_name', '<small class="text-danger">', '</small>') ?></td>
            </tr>
            </tr>

            <td>Last Name</td>
            <td><input type="text" name="last_name" id="last_name" placeholder="last Name" value="<?= $user['last_name'] ?>"></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" id="username" placeholder="username" value="<?= $user['username'] ?>"></td>
                <td><small class="text-danger"><?= form_error('username') ?></small></td>
            </tr>
            <tr>
                <td>Bio</td>
                <td><input type="text" name="bio" id="bio" placeholder="Bio" value="<?= $user['bio'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">SUBMIT</button>
            </tr>
        </table>
    </form>
</body>

</html>