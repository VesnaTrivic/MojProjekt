<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<div class="jumbotron">
    <h1 class="display-3">Kozmetički salon "Ljepota"</h1>
    <p class="lead">Web aplikacija za rezervaciju kozmetičkih tretmana</p>
    <hr class="my-4">
    <h3>Dobrodošli!</h3>
    </div>

<div class="container">
    <h2>Rezervacija</h2>
    <h5>Uspješno ste se prijavili!</h5>
    <div class="col-sm-8">
        <ul>
            <li><a href="<?php echo base_url(). "index.php/home"; ?>">Početna</a></li>
            <li><a href="<?php echo base_url(). "Vizija.pdf"; ?>">Vizija</a></li>
            <li><a href="<?php echo base_url(). "kontakt"; ?>">Kontakt</a></li>
            <li><a href="<?php echo base_url(). "index.php/home/logout"; ?>">Odjava</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="card mb-3">
        <h3 class="card-header">Nadogradnja noktiju</h3>
            <div class="card-body">
            <h5 class="card-title">20.00km</h5>
         </div>
            <img style="height: 200px; width: 300px; display: block;" src="<?= base_url("assets/images/1.jpg"); ?>" alt="Card image">
    </div>

    <div class="row">
        <div class="card mb-3">
        <h3 class="card-header">Nadogradnja noktiju</h3>
            <div class="card-body">
            <h5 class="card-title">20.00km</h5>
         </div>
            <img style="height: 200px; width: 300px; display: block;" src="<?= base_url("assets/images/1.jpg"); ?>" alt="Card image">
    </div>

    <div class="row">
        <div class="card mb-3">
        <h3 class="card-header">Nadogradnja noktiju</h3>
            <div class="card-body">
            <h5 class="card-title">20.00km</h5>
         </div>
            <img style="height: 200px; width: 300px; display: block;" src="<?= base_url("assets/images/1.jpg"); ?>" alt="Card image">
    </div>

    <div class="row">
        <div class="card mb-3">
        <h3 class="card-header">Nadogradnja noktiju</h3>
            <div class="card-body">
            <h5 class="card-title">20.00km</h5>
         </div>
            <img style="height: 200px; width: 300px; display: block;" src="<?= base_url("assets/images/1.jpg"); ?>" alt="Card image">
    </div>
</div>
                    
<?php $this->load->view('static/footer'); ?>