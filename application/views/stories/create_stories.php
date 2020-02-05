<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Stories</title>
</head>
<body>
    <form action="<?= base_url(); ?>stories/create" method="post">
        Title: <input type="text" name="title"><br>
        Content: <input type="text" name="content"><br>
        Media: <input type="file" name="media"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>