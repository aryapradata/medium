<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
</head>

<body>
    <h1>LOGIN PAGE<br>MEDIUM</h1>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?php echo base_url('Auth'); ?>" method="post">
        <table>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" id="email" placeholder="Enter Email Address...." value="<?= set_value('email') ?>"></td>
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
                    <button type="submit">LOGIN</button>
                    </button></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?= base_url('Auth/registration') ?>">Create an account</a></td>
            </tr>
        </table>
    </form>
</body>

</html>