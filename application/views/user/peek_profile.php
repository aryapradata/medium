<?php $this->load->view("_partials/header_login.php"); ?>

<div class="container mt-5 mb-5">
	
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<?php foreach ($user as $val) : ?>
					<div class="alert alert-warning" role="alert">
						<h1 class="display-4"><b>Welcome to <?= $val['first_name']; ?>'s Profile!</b></h1>
					</div>
					<hr>
					<div class="pp">
						<p class="lead">
							<center>
								<table>
									<tr>
										<td width="125px">Name</td>
										<td>:</td>
										<td><?= $val['first_name'] . " " . $val["last_name"]; ?></td>
									</tr>
									<tr>
										<td>Username</td>
										<td>:</td>
										<td><?= $val['username'] ?></td>
									</tr>
									<tr>
										<td>Bio</td>
										<td>:</td>
										<td><?= $val['bio'] ?></td>
									</tr>
									<tr>
										<td>Status</td>
										<td>:</td>
										<td><?php
                if ($val['role_id'] == 1) {
                    echo "Administrator";
                } else {
                    echo "User";
                } ?></td>
									</tr>
								</table>
							</center>
							<?php endforeach; ?>
							<br>
							<a class="btn btn-info btn-lg" href="<?= base_url(); ?>stories/index">Back</a>
						</p>
					</div>
				</div>
			</div>

			<div class="alert alert-primary" role="alert">
				<h2>All of <b><?= $val['first_name']; ?>'s</b> Stories Appear Here! </h2>
            </div>
            <div class="container">
                
			<?php foreach ($published as $val) : ?>
            <hr>
			<ul class="list-unstyled">
				<li class="media">
                <img src="<?= base_url('assets/img/editprofile2.jpg')?>" height="80px" width="80px"
						class="align-self-start mr-3" alt="...">
					<div class="media-body">
						<div class="peekprofile">
						<h5 class="mt-0 mb-1">
							<b><a href="<?= base_url(); ?>stories/open_stories/<?= $val['content_id']; ?>"><?= $val['title']; ?></a></b>
						</h5>
						<div class="content-draft">
							<p><?= $val['content']; ?></p>
						</div>
						</div>
                    </div>
                </li>
            </ul>
            <?php endforeach; ?>
            </div>

	</div>
</div>

<?php $this->load->view("_partials/footer_login.php"); ?>
