
<?php $this->load->view("_partials/header_login.php"); ?>

    <div class="container">
  <div class="row">
    <div class="col-sm-8">
     
    <div class="jumbotron2">
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="profile">

            <h3 class="display-4"><b>Edit Your Profile!</b></h3>
            <hr>
            <center>
              <?php foreach ($user as $val) : ?>
                <form action="<?= base_url("User/edit_profile/" . $val['user_id']); ?>" method="post">
                    <table>
                        <tr>
                            <td><b>First Name</b></td>
                            <td width="20px"></td>
                            <td>:</td>
                            <td><input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?= $val['first_name'] ?>" size="40"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><?= form_error('first_name', '<small class="text-danger">', '</small>') ?></td>
                        </tr>

                        <tr>
                            <td><b>Last Name</b></td>
                            <td></td>
                            <td>:</td>
                            <td><input type="text" name="last_name" id="last_name" placeholder="last Name" value="<?= $val['last_name'] ?>" size="40"></td>
                        </tr>
                        <tr>
                            <td><b>username</b></td>
                            <td></td>
                            <td>:</td>
                            <td><input type="text" name="username" id="username" placeholder="username" value="<?= $val['username'] ?>" size="40"></td>
                            <td><small class="text-danger"><?= form_error('username') ?></small></td>
                        </tr>
                        <tr>
                            <td><b>Bio</b></td>
                            <td></td>
                            <td>:</td>
                            <td><input type="text" name="bio" id="bio" placeholder="Bio" value="<?= $val['bio'] ?>" size="40"></td>
                        </tr>
                       
                    </table>
                    <br>
                    
                    <button type="submit" class="btn btn-info">SUBMIT</button>

                </form>
                <?php endforeach; ?>
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
        <img src="<?= base_url('assets/img/editprofile2.jpg')?>" class="card-img-top" alt="...">
        <div class="card-body">
            <pre>Our sole purpose is to help
you find compelling ideas,
knowledge, and perspectives.</pre>
            <a href="<?= base_url(); ?>stories/index" class="btn btn-success">Go To Index</a>
        </div>
        </div>
    </div>

  </div>
</div>
</div>


<?php $this->load->view("_partials/footer_login.php"); ?>


