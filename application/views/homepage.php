<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <form action="<?= base_url(); ?>stories" method="post">
        <input type="search" name="search" placeholder="Search">
        <input type="submit" name="submit" value="Search">
    </form>
    <br>
    <table border="1">
        <?php foreach ($stories as $val) : ?>
            <tr>
                <td>
                    <a href="<?= base_url(); ?>stories/open_stories/<?= $val['content_id']; ?>"><?= $val['title']; ?></a>
                    <p><a href="<?= base_url(); ?>user/get_user/<?= $val['username']; ?>"><?= $val['first_name']; ?> <?= $val['last_name']; ?></a></p>
                </td>
            </tr>
        <?php endforeach; ?>
        <a href="<?= base_url(); ?>stories/create_form">Create Story</a>
        <br>
        <a href="<?= base_url(); ?>stories/your_stories">Your Stories</a>
    </table>
    <a href="<?= base_url(); ?>user">See My Profile</a>
    <a href="<?= base_url(); ?>auth/logout">Logout</a>
</body>
</body>
</html>