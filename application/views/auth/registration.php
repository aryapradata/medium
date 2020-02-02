<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
</head>

<body>
    <h1>REGISTER<br>MEDIUM</h1>
    <form action="<?php echo base_url('Auth/registration'); ?>" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?= set_value('first_name'); ?>"></td>
            <tr>
                <td></td>
                <td><?= form_error('first_name', '<small class="text-danger">', '</small>') ?></td>
            </tr>
            </tr>

            <td>Last Name</td>
            <td><input type="text" name="last_name" id="last_name" placeholder="last Name" value="<?= set_value('last_name'); ?>"></td>
            </tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" id="username" placeholder="username" value="<?= set_value('username'); ?>"></td>
                <td><small class="text-danger"><?= form_error('username') ?></small></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" id="email" placeholder="Enter Email Address...." value="<?= set_value('email'); ?>"></td>
                <td><small class="text-danger"><?= form_error('email') ?></small></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password" placeholder="Password"></td>
                <td><small class="text-danger"><?= form_error('password') ?></small></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">REGISTER</button>
                    </button></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?= base_url('Auth') ?>">Already have an account? login</a></td>
            </tr>
        </table>
    </form>
</body>

</html>