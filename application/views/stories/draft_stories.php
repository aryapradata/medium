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
    					<a class="text-decoration-none"
    						href="<?= base_url(); ?>stories/update_form/<?=$val['content_id']?>"><?= $val['title']; ?></a>
    				</div>
    				<div class="content-draft">
    					<a class="text-decoration-none"
    						href="<?= base_url(); ?>stories/update_form/<?=$val['content_id']?>"><?= $val['content']; ?></a>
    				</div>
    				<hr>
    			</div>
    		</div>
    	</div>
    	<?php endforeach; ?>


    </body>

    </html>


    <td><a href="<?= base_url(); ?>stories/publish/<?=$val['content_id']?>">Publish</a></td>
    <td><a href="<?= base_url(); ?>stories/delete/<?=$val['content_id']?>">Delete</a></td>
