<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<?php $this->load->view('static/navbar.php'); ?>

<div class="col-sm-6">
<h4>Radno Vrijeme: 08:00h-23:00h<h4>
<h6>Adresa: Ulica Nikolaja Vladimirovića 19, Vlasenica<h6>
<h6>Telefon: 056/733-156<h6>
</div>

<div class="container" id="kontakt">
    <h3>Kontakt:</h3>
    <div class="inner">
        <div class="col-sm-6 offset-md-3">
            <div class="form-group">
                <label for="username"> Korisničko ime:<span style="color: red";>*</span></label>
                <input type="text" name="username" placeholder="Upiši korisničko ime" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone_number"> Broj telefona:</label>
                <input type="text" name="phone_number" placeholder="Upiši broj mobitela" class="form-control">
            </div>
            <div class="form-group">
                <label for="email"> E-mail:<span style= "color: red";>*</span></label>
                <input type="email" name="email" placeholder="example@example.com" class="form-control">
            </div>
            <div class="form-group">
                <label for="comments"> Komentar:<span style= "color: red";>*</span></label>
                <textarea name="comments" rows="7" cols="40" placeholder="Napiši nešto..." style="width: 450px";></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Pošalji" class="btn btn-primary"> <br>
            <span style= "color: red";>*</span> - <i>Obavezno</i>
        </div>
    </div>
</div>

<div class="col-sm-6"><h5><iframe src="https://www.google.com/maps/d/embed?mid=1-lxZdCJmw5_q7iXFxF2lWh0l9OQ" width="640" height="480"></iframe></h5></div>

<h5>Možete nas pronaći i na:<h5><br>
<a href="https://facebook.com"><i class="fa fa-fw fa-facebook"></i>Facebook</a><br>
<a href="https://instagram.com"><i class="fa fa-fw fa-instagram"></i>Instagram</a>

<?php $this->load->view('static/footer');