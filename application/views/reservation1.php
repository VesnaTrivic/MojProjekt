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
    <div class="col-sm-8">
        <ul>
            <li><a href="<?php echo base_url(). "index.php/home"; ?>">Početna</a></li>
            <li><a href="<?php echo base_url(). "Vizija.pdf"; ?>">Vizija</a></li>
            <li><a href="<?php echo base_url(). "kontakt"; ?>">Kontakt</a></li>
            <li><a href="<?php echo base_url(). "index.php/home/logout"; ?>">Odjava</a></li>
        </ul>
    </div>

    <div class="col-sm-6">
        <form>
            <div class="form-group">
                <label for="input" class="col-sm-5 control-label">Datum rezervacije:</label>
                <div class="col-sm-5">
                    <input type="date" value="2019-18-06" max="2020-12-31" min="2019-06-06" class="form-control" id="input" name="date">
                </div>
            </div>

            <div class="form-group">
                <label for="input" class="col-sm-5 control-label">Vrijeme početka:</label>
                <div class="col-sm-5">
                    <input type="time" max="23:00" min="08:00" class="form-control" id="input" name="begin_time">
                </div>
            </div>
            <div class="form-group">
                <label for="input" class="col-sm-5 control-label">Vrijeme završetka:</label>
                <div class="col-sm-5">
                    <input type="time" max="23:00" min="08:00" class="form-control" id="input" name="end_time">
                </div>
            </div>
            <div class="form-group">
                <label for="input" class="col-sm-5 control-label">Količina:</label>
                <div class="col-sm-5">
                    <input type="number" value="2019-18-06" max="5" min="1" class="form-control" id="input" name="quantity">
                </div>
            </div>
                <input type="hidden" name="product_name">
            <div class="col-sm-6">
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#login-modal">
                    <a href="<?php echo base_url(). "index.php/home/reserved"; ?>"> Rezerviraj</a></button>
            </div>
        </form>
    </div>

</div>
<?php $this->load->view('static/footer'); ?>