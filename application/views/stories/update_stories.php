<<<<<<< HEAD
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
=======
<?php $this->load->view("_partials/header_login.php"); ?>

<div class="csbg">
	<div class="csbg2">
		<center>
            <?php foreach ($stories as $val) : ?>
            
			<div class="createstorybox">
				<br>
				<h7>UPDATE PAGE</h7>
				<br>
				<pre>All on Medium, all for you.</pre>
				<hr>
				<form action="<?= base_url(); ?>stories/update/<?= $val['content_id']; ?>" method="post">
                <table border="0">
                    <tr>
                        <td><b>Title</b></td> 
                        <td width="5px">:</td>
                        <td><input type="text" name="title" value="<?= $val['title']; ?>" size="40"></td>
                    </tr>    
                    <tr>
                        <td><b>Content</b></td>
                        <td>:</td> 
                        <td><textarea class="form-control" name="content" rows="12"><?= $val['content']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><b>Media</b></td>
                        <td>:</td>
                        <td><input type="file" name="media" value="<?= $val['media']; ?>"></td>
                    </tr>
                </table>
					<hr>
                    <button type="submit" class="btn btn-success">Update</button>
					<hr>
				</form>
            </div>
            <?php endforeach; ?>
		</center>
	</div>
</div>

<?php $this->load->view("_partials/footer_login.php"); ?>

>>>>>>> 9839e6029adc6c4b95e83f51690b77326b75b702
