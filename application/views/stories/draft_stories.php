    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" />

    <?php $this->load->view("_partials/header_isi1.php"); ?>
    <?php $this->load->view("_partials/draft_header.php"); ?>
    </head>

    <body>
    	<?php foreach ($stories as $val) : ?>
    	<div class="d-flex flex-column bd-highlight mb-3">
    		<div class="p-2 bd-highlight">
    			<div class="container">
    				<div class="title-content-draft">
    					<div class="btn-group">
    						<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
    							id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true"
    							aria-expanded="false" data-reference="parent">
    							<span class="sr-only">Toggle Dropdown</span>
    						</button>
    						<div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                <a class="dropdown-item"
                                <?php if ($val['title'] != null) : ?>
                                    href="<?= base_url(); ?>stories/publish/<?=$val['content_id']?>">Publish</a>
                                <?php endif; ?>
    							<a class="dropdown-item"
    								href="<?= base_url(); ?>stories/delete/<?=$val['content_id']?>">Delete</a>
    						</div>
    					</div>
    					<a class="text-decoration-none"
    						href="<?= base_url(); ?>stories/update_form/<?=$val['content_id']?>"><?= $val['title']; ?></a>
    				</div>
    				<div class="content-draft">
    					<a class="text-decoration-none"
    						href="<?= base_url(); ?>stories/update_form/<?=$val['content_id']?>"><?= $val['content']; ?></a>
                    </div>
                    <img src="<?= base_url().'images/'.$val['media']?>" alt="" height="300" width="450">
    				<hr>
    			</div>
    		</div>
    	</div>
    	<?php endforeach; ?>


    	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    	</script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    	</script>
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    	</script>

    </body>
</html>
