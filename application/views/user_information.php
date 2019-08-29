<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<?php $this->load->view('static/navbar.php'); ?>

<div class="container">
    <div class="col-lg-6">
        <h2>Vaš profil</h2>
        <h5>Korisničko ime: <?php echo $this->session->userdata('username'); ?></h5>
        <h5>Tip korisnika: <?php echo $this->session->userdata('user_type'); ?></h5>
	</div>

</div>
<?php $this->load->view('static/footer'); ?>