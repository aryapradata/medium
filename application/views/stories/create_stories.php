<?php $this->load->view("_partials/header_login.php"); ?>

    <form action="<?= base_url(); ?>stories/create" method="post">
        Title: <input type="text" name="title"><br>
        Content: <input type="text" name="content"><br>
        Media: <input type="file" name="media"><br>
        <button type="submit">Submit</button>
    </form>

<?php $this->load->view("_partials/footer_login.php"); ?>