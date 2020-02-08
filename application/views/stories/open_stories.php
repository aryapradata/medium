    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" />

    <?php $this->load->view("_partials/header_isi1.php"); ?>
    </head>

    <body>
    	<?php foreach ($stories as $val) : ?>
    	<div class="container content">
    		<div class="row">
    			<div class="col-sm-2">
    			</div>
    			<div class="col-7">
    				<h1>
    					<?= $val['title']; ?>
    				</h1>
    				<a href=""> <img src="<?= base_url('assets/img/comment/comment_1.png')?>" height="45px" width="45px"
    						align="left"> </a>
    				<p class="content-size">
    					<?= $val['first_name']; ?> <?= $val['last_name']; ?>
    				</p>
    			</div>
    			<div class="col">
    			</div>
    		</div>

    		<a href=""><img src="<?= base_url('assets/img/content/c1.png')?>" width="1100" height="400"></a>
    		<br>
    		<div class="container content content-size">
    			<div class="row">
    				<div class="col-sm-2">
    					<p></p>
    				</div>
    				<div class="col-7">
    					<p>
    						<?= $val['content']; ?>
						</p>
						
    				</div>
    				<div class="col ">
    					
    				</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		
    	<?php $this->load->view("_partials/footer_login.php"); ?>