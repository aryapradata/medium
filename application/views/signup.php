<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
	<form action="" method="post">
		First Name: <input type="text" name="first_name">
		Last Name: <input type="text" name="last_name">
		Email: <input type="email" name="email">
		Password: <input type="password" name="password">
		Username: <input type="text" name="username">
		<button type="submit">Submit</button>
	</form>
</body>
</html>