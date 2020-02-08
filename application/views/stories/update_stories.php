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
				<?php echo form_open_multipart('stories/updateAction/' . $val['content_id'] );?>
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
                        <td><input type="file" name="media" value="<?= base_url().'images/'.$val['media']?>"></td>
                    </tr>
                </table>
					<hr>
                    <input type="submit" name="submit" value="Update" class="btn btn-success">
					<hr>
				</form>
            </div>
            <?php endforeach; ?>
		</center>
	</div>
</div>

<?php $this->load->view("_partials/footer_login.php"); ?>
