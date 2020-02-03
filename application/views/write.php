    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap/bootstrap.min.css')?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" />

    <?php $this->load->view("_partials/header.php"); ?>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col">
            <div class="u-banner">
                <div class="brand-header">
                    <h3>A place to publish your best work</h3>
                    <p>The internet should reward quality thinking, not clickbait. That’s why we’ve created a better
                        home for writers, journalists and experts. It’s simple to use, free from ads, and connects
                        you to curious, avid readers, so you can focus on what matters: putting your best work out
                        there.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <img src="<?= base_url('assets/img/wrimg1.png')?>" width="460" height="470">
        </div>
    </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col">
           <img src="<?= base_url('assets/img/wrimg2.png')?>" width="460" height="470">
        </div>
        <div class="col">
            <div class="brand-header" style="padding-top: 80px">            
            <h3>We believe ideas are worth something</h3>
            <p>Writers should be paid for the quality of their ideas — not the attention they attract for advertisers.
                That’s why anyone can join the Medium Partner Program and earn money when Medium members read their
                 stories.
            </p>
            </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">
                Join the Medium Partner Program</button>  
        </div>
    </div>





<?php $this->load->view("_partials/footer.php"); ?>
