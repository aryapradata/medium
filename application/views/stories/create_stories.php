<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Stories</title>
</head>
<body>
    <?php echo form_open_multipart('stories/createAction');?>
        Title: <input type="text" name="title"><br>
        Content: <input type="text" name="content"><br>
        Media: <input type="file" name="media"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>