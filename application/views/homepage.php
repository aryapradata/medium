<?php $this->load->view("_partials/header_login.php"); ?>

<div class="container mt-5">
	<div class="row">
		<div class="homepagebox">
			<center>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<div class="jarak">
							<a class="btn btn-outline-primary" href="<?= base_url(); ?>stories/create_form">Create
								Story<span class="sr-only">(current)</span></a>
							</div>
							<div class="jarak">
							<a class="btn btn-outline-info" href="<?= base_url(); ?>stories/drafts">Drafts<span
									class="sr-only">(current)</span></a>
							</div>
							<div class="jarak">
							<a class="btn btn-outline-success" href="<?= base_url(); ?>user">See Profile <span
									class="sr-only">(current)</span></a>
							</div>
							<div class="jarak">
							<a class="btn btn-outline-danger" href="<?= base_url(); ?>auth/logout">Logout <span
									class="sr-only">(current)</span></a>
							</div>
						</div>
					</div>
				</nav>
			</center>
		</div>
		<hr>

		
			<div class="row">
				<div class="col-9.5">
					<div class="homepagebox2">
						<?php foreach ($stories as $val) : ?>
						<div class="card-content">
							<div class="card ">
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

			<div class="homepagebox3">
				<div class="col-2.5">
					<div class="card" style="width: 14rem;">
						<img src="<?= base_url('assets/img/editprofile2.jpg')?>" class="card-img-top" alt="...">
						<div class="card-body">
							<pre>Our sole purpose is to help
you find compelling ideas,
knowledge, and perspectives.</pre>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>


	</div>



