<!DOCTYPE html>
<?php $this->load->view('static/header.php'); ?>

<?php $this->load->view('static/navbar.php'); ?>

<div class="container">
<h1>Prijava:</h1>
<p><b>Niste prijavljeni, ako nemate račun, <a href="<?php echo base_url(). "index.php/home/register" ?>">REGISTRIRAJTE SE</a></b></p>
<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
<?php echo form_open('home/login_validation'); ?>
    <div class='row'>
        <div class="col-md-4 col-md-offset-4">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Upiši korisničko ime" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Upiši lozinku" required>
            </div>
            <button type="submit" class="btn btn-primary">Prijava</button>
        </div>
    </div>

    <h5 style: font-weight = bold;>
    <?php if(isset($error)){
        echo $error;
    }
    ?>
    </h5>

<?php echo form_close(); ?>
</div>

<?php $this->load->view('static/footer.php'); ?>