<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Stories</title>
</head>
<body>
<?php foreach ($stories as $val) : ?>
    <?php echo form_open_multipart('stories/updateAction/' . $val['content_id'] );?>
        Title: <input type="text" name="title" value="<?= $val['title']; ?>"><br>
        Content: <input type="text" name="content" value="<?= $val['content']; ?>"><br>
        Media: <input type="file" name="media" value="<?= base_url().'images/'.$val['media']?>"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
<?php endforeach; ?>
</body>
</html>