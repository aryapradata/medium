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
    <div class="brand u-background">
        <div class="brand-header">
            <h3>Why people love writing on Medium</h3>
        </div>
        <div class="avatar-image">
            <div class="container">
                <div class="row">
                    <div class="col">
                    <a href=""> <img src="<?= base_url('assets/img/comment/comment_1.png')?>" height="65px" width="65px"> </a>
                        <br><br>
                        <h5>Baratunde Thurstonh</h5>
                        <p>I love that Medium is trying to support art and writing without shoveling its users into
                           the gaping maw that is the soul-crushing advertising machine.</p>
                    </div>
                    <div class="col">
                    <a href=""> <img src="<?= base_url('assets/img/comment/comment_2.png')?>" height="65px" width="65px"> </a>
                        <br><br>
                        <a href=""><h5>Edith Zimmerman</h5></a>
                        <p>Medium opens doors. I started out writing online with the sense that I was dropping
                           sentences into the void. Medium showed me that people are listening, and that they care
                           about what I have to say.</p>
                    </div>
                    <div class="col">
                        <a href=""> <img src="<?= base_url('assets/img/comment/comment_3.png')?>" height="65px" width="65px"> </a>
                        <br><br>
                        <a href=""><h5>John DeVore</h5></a>
                        <p>As a professional writer I am a hired gun: I don’t always get to pick my paycheck. But
                            Medium is a place where I can be untethered from fashion and write what I want and 
                            hope others will read it.</p>
                    </div>
                </div>
            </div>
        </div>

        
    </div>





<?php $this->load->view("_partials/footer.php"); ?>
