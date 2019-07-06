<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<div class="jumbotron">
    <h1 class="display-3">Kozmetički salon "Ljepota"</h1>
    <p class="lead">Web aplikacija za rezervaciju kozmetičkih tretmana</p>
    <hr class="my-4">
    <h3>Dobrodošli <?php echo $this->session->userdata('username'); ?>!</h3>
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
    </div><br><br><br>

    <div class="row">
        <div class="col-sm-4">
            <div class="room-container">
            <img src="<?php echo base_url(); ?>assets/images/9.jpg" width="250" height="250">
                <h5>Šminka</h5>
                <h3>30.00km</h3>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#login-modal">
                <a href="<?php echo base_url(). "index.php/home/reservation1"; ?>"> Rezerviraj</a></button><br><br>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="room-container">
            <img src="<?php echo base_url(); ?>assets/images/13.jpg" width="250" height="250">
                <h5>Frizura</h5>
                <h3>30.00km</h3>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="reservation-modal">
                        <a href="<?php echo base_url(). "index.php/home/reservation1"; ?>"> Rezerviraj</a></button>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="room-container">
            <img src="<?php echo base_url(); ?>assets/images/2.jpg" width="250" height="250">
                <h5>Nokti</h5>
                <h3>20.00km</h3>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#login-modal">
                        <a href="<?php echo base_url(). "index.php/home/reservation1"; ?>"> Rezerviraj</a></button>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="room-container">
            <img src="<?php echo base_url(); ?>assets/images/14.jpeg" width="250" height="250">
                <h5>Masaža</h5>
                <h3>20.00km</h3>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#login-modal">
                        <a href="reservation/create_reservation1"> Rezerviraj</a></button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('static/footer'); ?>