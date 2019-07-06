<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<div class="container">
    <ul>
        <li><a href="<?php echo base_url(). "index.php/home"; ?>">Početna</a></li>
        <li><a href="<?php echo base_url(). "Vizija.pdf"; ?>">Vizija</a></li>
        <li><a href="<?php echo base_url(). "kontakt"; ?>">Kontakt</a></li>
        <li><a href="<?php echo base_url(). "index.php/home/logout"; ?>">Odjava</a></li>
    </ul><br><br>

    <div class="col-sm-8">
    <h2>Uspješno ste rezervirali termin!</h2> 
    <button type="button" class="btn btn-outline-primary"><a href="<?php echo base_url(). "index.php/home"; ?>">NATRAG</button>
    </div>
</div>