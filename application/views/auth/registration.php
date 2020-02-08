<?php $this->load->view("_partials/header.php"); ?>


<div class="modallbg4">
    <div class="modallbg3">
    <div class="boxlogin">

            <br>
            <h1>Join Medium.</h1>
            <b>
            <pre>Create an account to receive great stories in your inbox, 
personalize your homepage, and follow authors and 
topics that you love.</Pre>
            </b>

            <center>

            <hr>
            <form action="<?php echo base_url('Auth/registration'); ?>" method="post">
                <table>
                    <tr>
                        <td>First Name</td>
                        <td>:</td>
                        <td><input type="text" name="first_name" id="first_name" placeholder="First Name" value="<?= set_value('first_name'); ?>"></td>
                        <td><?= form_error('first_name', '<small class="text-danger">', '</small>') ?></td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>:</td>
                        <td><input type="text" name="last_name" id="last_name" placeholder="last Name" value="<?= set_value('last_name'); ?>"></td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" id="username" placeholder="username" value="<?= set_value('username'); ?>"></td>
                        <td><small class="text-danger"><?= form_error('username') ?></small></td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" id="email" placeholder="Enter Email Address...." value="<?= set_value('email'); ?>"></td>
                        <td><small class="text-danger"><?= form_error('email') ?></small></td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" id="password" placeholder="Password"></td>
                        <td><small class="text-danger"><?= form_error('password') ?></small></td>
                    </tr>
                   
                </table>
                <br>
                <button type="submit" class="btn btn-success">REGISTER</button> 
                <br>
                <br>
                <a href="<?= base_url('Auth') ?>">Already have an account? login</a>

            </form>

            </center>

            <hr>
        <b>
        <pre>
    To make Medium work, we log user data and share it 
with service providers. Click “Sign In” above to accept
Medium’s <a href="termofservice.html">Terms of Service </a> & <a href="privacypolicy.html">Privacy Policy.</a>
        </pre>
        </b>

    </div>
    </div>
</div>

<?php $this->load->view("_partials/footer.php"); ?>


