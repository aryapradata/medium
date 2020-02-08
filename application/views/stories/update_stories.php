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

