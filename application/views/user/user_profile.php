<?php $this->load->view("_partials/header_login.php"); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
     
    <div class="jumbotron2">
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="profile">

            <h3 class="display-4"><b>Your Profile!</b></h3>
            <hr>
            <p class="lead">
            <center>
              <?php foreach ($user as $val) : ?>
            <table>
                    <tr>
                        <td><b>Name</b></td>
                        <td width="30px"></td>
                        <td>:</td>
                        <td><?= $val['first_name'] . " " . $val["last_name"]; ?></td>
                    </tr>
                    <tr>
                        <td><b>Username</b></td>
                        <td></td>
                        <td>:</td>
                        <td><?= $val['username'] ?></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td>     </td>
                        <td>:</td>
                        <td><?= $val['email'] ?></td>
                    </tr>
                    <tr>
                        <td><b>Bio</b></td>
                        <td>    </td>
                        <td>:</td>
                        <td><?= $val['bio'] ?></td>
                    </tr>
                    <tr>
                        <td><b>Status</b></td>
                        <td>   </td>
                        <td>:</td>
                        <td><?php
                            if ($val['role_id'] == 1) {
                                echo "Administrator";
                            } else {
                                echo "User";
                            } ?></td>
                    </tr>
                </table>
                <br>
                <button type="button" class="btn btn-info"><a href="<?= base_url("user/get_data/" . $val['user_id']); ?>">Edit Profile</a></button>
              <?php endforeach; ?>
              
              <?php foreach ($comment as $val) : ?>
        <table border="1">
            <tr>
                <td>
                    <a href="<?= base_url(); ?>stories/open_stories/<?= $val['content_id']; ?>"><?= $val['title']; ?></a>
                    <p><?= $val['comment']; ?></p>
                    <a href="<?= base_url(); ?>stories/deleteComment/<?= $val['content_id']; ?>/<?= $val['comment_id']; ?>">Delete</a>
                </td>
            </tr>
        </table>
    <?php endforeach; ?>
                <button type="button" class="btn btn-danger"><a href="<?= base_url('auth/logout'); ?>">LOGOUT</a></button>
                <button type="button" class="btn btn-dark"><a href="<?= base_url(); ?>stories/index">BACK</a></button>
            </center>
            </p>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>


    <div class="jumbotron3">

    <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
        <img src="<?= base_url('assets/img/editprofile.png')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><b>Expand your reading.</b></h5>
            <h5 class="card-title"><b>Expand your mind.</b></h5>
            <pre>Get smarter about 
what matters to you.</pre>
            <a href="<?= base_url(); ?>stories/index" class="btn btn-success">Go To Index</a>
        </div>
        </div>
    </div>

  </div>
</div>
</div>



<?php $this->load->view("_partials/footer_login.php"); ?>

