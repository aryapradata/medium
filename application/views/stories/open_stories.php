
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>" />
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	   
    <!-- <script src="<?=base_url('assets/js/clap.js')?>"></script> -->


    <?php $this->load->view("_partials/header_isi1.php");?>
    </head>

    <body>
    	<?php foreach ($stories as $val): ?>
    	<div class="container content">
    		<div class="row">
    			<div class="col-sm-2">
    			</div>
    			<div class="col-7">
    				<hr>
    				<h1>

    					<center><?= $val['title']; ?></center>
    				</h1>
    				<hr>
    				<a href=""> <img src="<?= base_url('assets/img/profil.png')?>" height="45px" width="45px"

    						align="left"> </a>
    				<p class="content-size">
    					<?=$val['first_name'];?> <?=$val['last_name'];?>
    				</p>
    				<br>
    			</div>
    			<div class="col">
    			</div>
    		</div>

    		<CENTER>
				
					<a href=""><img src="<?= base_url().'images/'.$val['media']?>" alt="" height="400px"></a>
				
    		</CENTER>

    		<br>
    		<div class="container content content-size">
    			<div class="row">
    				<div class="col-sm-2">
    					<p></p>
    				</div>

    				<div class="col-8">
					<div class="open">
    					<pre>
							<?= $val['content']; ?>
							<hr>
						</pre>
					</div>
					
						</div>

    				</div>
    				<div class="col ">

    				</div>

                </div>

				<div id="celap">
					<img src="<?=base_url();?>assets/img/clap.png" alt="" style="width: 5%;">
					<p class="counter"><?php 
					 if($clap > 0){
						 foreach($clap as $vall) :
							echo $vall['clap'];
						 endforeach;
					 } else {
						 echo $clap;
					 }
					 ?></p>
                </div>
				

    			</div>


    		</div>
    	</div>

    	<?php endforeach;?>



    	<div class="jumbotron jumbotron-fluid">
    		<div class="container">
    			<h3 class="display-4"><u><b><i>Comment</i></b></u></h3>
    			<br>
    			<div class="alert alert-warning" role="alert">
    				<form action="<?= base_url(); ?>stories/createComment/<?= $val['content_id']; ?>" method="post">
    					<div class="form-group">
    						<label for="exampleInputEmail1">Type Your Comment Below...</label>
    						<input type="text" name="comment" class="form-control" placeholder="Comment...">
    						<br>
    						<button type="submit" class="btn btn-primary">Submit</button>
    					</div>
    				</form>
    			</div>
    			<div class="card">
    				<div class="card-body">
    					<?php foreach ($comment as $val) : ?>
    					<div class="ops">
    						<b><a
    								href="<?= base_url(); ?>user/get_user/<?=$val['username']; ?>"><?= $val['first_name']; ?><?= $val['last_name']; ?></a></b>
    					</div>
    					<p><?= $val['comment']; ?></p>
    					<a
    						href="<?= base_url(); ?>stories/deleteComment/<?= $val['content_id']; ?>/<?= $val['comment_id']; ?>" class="btn btn-danger btn-sm">Delete</a>
    					<br>
    					<hr>
    					<?php endforeach; ?>

    				</div>
    			</div>
    		</div>
    	</div>


		<script>
		$(document).ready(function () {
    var clapLimit = 50;
    var i = 1,
        timeOut = 0;


    $('#celap').on('mousedown touchstart', function (e) {
        $(this).addClass('active');
        timeOut = setInterval(function () {
            if (i < clapLimit) {
                $(".counter").html(parseInt($('.counter').html()) + 1);
                $(".counter").show("fast");
            } else {
                $(".counter").show("fast");
            }
        }, 500);
    }).bind('mouseup mouseleave touchend', function () {
        $(this).removeClass('active');
        clearInterval(timeOut);
        $(".counter").hide("slow");



        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>stories/autosave_celap/<?=  $val['content_id']; ?>",
            data: {
                clapCount: parseInt($('.counter').html()
                )
            },
            success: function (result) {
                console.log(result);
            }
        });	
    });
})
		
		</script>


    	<?php $this->load->view("_partials/footer_login.php"); ?>

