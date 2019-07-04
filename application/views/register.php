<!DOCTYPE html>
<?php $this->load->view('static/header.php'); ?>

<div class="jumbotron">
    <h1 class="display-3">Kozmetički salon "Ljepota"</h1>
    <p class="lead">Web aplikacija za rezervaciju kozmetičkih tretmana</p>
    <hr class="my-4">
    <h3>Dobrodošli!</h3>
    </div>

<div class="container">
<h1>Registracija: </h1>

<?php
echo validation_errors('<div class="alert alert-danger">', '</div>');
echo form_open('home/register_validation'); ?>

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="form-group">
            <label for="first_name"><b>Ime: </b></label>
            <input type="text" name="first_name" placeholder="Upiši ime" class="form-control" required>
        <div>
        <div class="form-group">
            <label for="last_name"><b>Prezime: </b></label>
            <input type="text" name="last_name" placeholder="Upiši prezime" class="form-control" required>
        <div>
        <div class="form-group">
            <label for="username"><b>Korisničko ime: </b></label>
            <input type="text" name="username" placeholder="Upiši korisničko ime" class="form-control" required>
        <div>
        <div class="form-group">
            <label for="email"><b>E-mail</b></label>
            <input type="email" name="email" placeholder="example@example.com" class="form-control" required>
        <div>
        <div class="form-group">
            <label for="password"><b>Lozinka: </b></label>
            <input type="password" name="password" placeholder="Upiši lozinku: " class="form-control" required>
        <div>
        <div class="form-group">
            <label for="cpassword"><b>Potvrdi lozinku: </b></label>
            <input type="password" name="cpassword" placeholder="Upiši ponovo lozinku" class="form-control" required>
        <div><br>
            <button type="submit" class="btn btn-primary btn-block">Registracija</button>
    </div>
</div>

<?php echo form_close(); ?>

</div>

<?php $this->load->view('static/footer.php'); ?>