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
				<?php echo form_open_multipart('stories/createAction');?>
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
					<input type="submit" name="submit" value="Submit">
					<hr>
				</form>
			</div>
		</center>
	</div>
</div>

<?php $this->load->view("_partials/footer_login.php"); ?>
