<?php $this->load->view("_partials/header_login.php"); ?>

<div class="container mt-5">
	<div class="row">

		<div class="col-sm-2">
			<div class="homepagebox">

				<ul class="nav flex-column">
					<hr>
					<li class="nav-item">
						<a class="btn btn-outline-primary" href="<?= base_url(); ?>stories/create_form">Create Story</a>
					</li>
					<hr>
					<li class="nav-item">
						<a class="btn btn-outline-info" href="<?= base_url(); ?>stories/drafts">Drafts</a>
					</li>
					<hr>
					<li class="nav-item">
						<a class="btn btn-outline-success" href="<?= base_url(); ?>user">See Profile</a>
					</li>
					<hr>
					<li class="nav-item">
						<a class="btn btn-outline-danger" href="<?= base_url(); ?>auth/logout">Logout</a>
					</li>
					<hr>
				</ul>

			</div>
		</div>

		<div class="col-sm-10">
			<div class="homepagebox2">
				<?php foreach ($stories as $val) : ?>
				<div class="card-content">
					<div class="card sm-">
						<h5 class="card-header"></h5>
						<div class="card-body">
							<h5 class="card-title"><a
									href="<?= base_url(); ?>stories/open_stories/<?=$val['content_id']; ?>"><?= $val['title']; ?></a>
							</h5>
							<p class="card-text"><?= $val['first_name']; ?> <?= $val['last_name']; ?></p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</div>
