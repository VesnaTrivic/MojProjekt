<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<h1>Dobrodošao Admin <?php echo $this->session->userdata('username'); ?></h1>

<button btn btn-primary>
<a href="<?php echo base_url().'index.php/home/logout' ?>">Odjava</a>
</button>

<?php $this->load->view('static/footer'); ?>