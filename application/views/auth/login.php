<?php $this->load->view("_partials/header.php"); ?>


<div class="modallbg2">
    <div class="modallbg">
    <div class="boxlogin">
    
    <br>
    <h1>WELCOME BACK</h1>
    <b>
    <pre>Sign in to get personalized story recommendations,
follow authors and topics you love, and interact with stories.</Pre>
<p>Input Your Email & Password</p>
    </b>
        <center>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?php echo base_url('Auth'); ?>" method="post">
        <hr>
            <table>
                <tr>
                    <td>Email</td>
                    <td></td>
                    <td>:</td>
                    <td><input type="text" name="email" id="email" placeholder="Enter Email Address...." value="<?= set_value('email') ?>"></td>
                    <td><small class="text-danger"><?= form_error('email') ?></small></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password" placeholder="Password"></td>
                    <td><small class="text-danger"><?= form_error('password') ?></small></td>
                </tr>     
            </table>
            <br>
            <button type="submit" class="btn btn-success">LOGIN</button> 
            <br>
            <br>
            <pre><b>No account?</b></pre><a href="<?= base_url('Auth/registration') ?>">Create one</a>
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