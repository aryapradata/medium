<div class="d-flex flex-column bd-highlight mb-3">
	<div class="p-2 bd-highlight">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-4">
					<div class="title-draft">
						<h1>Your stories</h1>
					</div>
				</div>
				<div class="col-4">
					<div class="button-header-draft">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
							<a class="text-decoration-none" style="color: green"
								href="<?= base_url(); ?>stories/create_form">Write a
								story</a>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="p-2 bd-highlight">
		<div class="container">
			<div class="row justify-content-betweent">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="<?= base_url(); ?>stories/drafts">Drafts<span
									class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="<?= base_url(); ?>stories/published">Published</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<hr>
		</div>
	</div>
</div>