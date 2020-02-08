<<<<<<< HEAD
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
=======

<?php $this->load->view("_partials/header_login.php"); ?>

<div class="csbg">
	<div class="csbg2">
		<center>
			<div class="createstorybox">
				<br>
				<h7>Medium is truly where ideas </h7>
				<br>
				<h7> are born, shared, and spread.</h7>
				<br>
				<pre>All on Medium, all for you.</pre>
				<hr>
				<form action="<?= base_url(); ?>stories/create" method="post">
					<table border="0">
						<tr>
							<td><b>Title</b></td>
							<td>:</td>
							<td><input type="text" name="title" size="40"></td>
						</tr>
						<tr>
							<td><b>Content</b></td>
							<td width="50px">:</td>
							<div class="form-group">
								<td><textarea class="form-control" name="content" rows="12"></textarea> </td>
							</div>
						</tr>
						<tr>
							<td><b>Media</b></td>
							<td>:</td>
							<td><input type="file" name="media" size="40"></td>
						</tr>
					</table>
					<hr>
					<button type="submit">Submit</button>
					<hr>
				</form>
			</div>
		</center>
	</div>
</div>

<?php $this->load->view("_partials/footer_login.php"); ?>

>>>>>>> 9839e6029adc6c4b95e83f51690b77326b75b702
