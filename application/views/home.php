<!DOCTYPE html>
<?php $this->load->view('static/header.php'); ?>
    <div class="jumbotron">
    <h1 class="display-3">Kozmetički salon "Ljepota"</h1>
    <p class="lead">Web aplikacija za rezervaciju kozmetičkih tretmana</p>
    <hr class="my-4">
    <h3>Dobrodošli!</h3>
    </div>

    <div class="container">
        <div class="col-sm-4"><h1>Kozmetički salon "Ljepota"</h1></div>
            <div id="menubar">
                <ul>
                    <li><a href="<?php echo base_url(). "#"; ?>">Početna</a></li>
                    <li><a href="<?php echo base_url(). "index.php/home/reservation"; ?>">Rezervacije</a></li>
                    <li><a href="<?php echo base_url(). "Vizija.pdf"; ?>">Vizija</a></li>
                    <li><a href="<?php echo base_url(). "kontakt"; ?>">Kontakt</a></li>
                    <li><a href="<?php echo base_url(). "index.php/home/login"; ?>">Prijava/Registracija</a></li>
                </ul>
            </div>
        </div>
        
        <div class="container">
        <img src="<?= base_url("assets/images/10.jpg"); ?>">
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
                <div class="col-sm-6"><h5><iframe src="https://www.google.com/maps/d/embed?mid=1-lxZdCJmw5_q7iXFxF2lWh0l9OQ" width="640" height="480"></iframe></h5></div>
            </div>

            <script>
            $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>

<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
</div>

        </div>
        
        <?php $this->load->view('static/footer.php'); ?>

        <div class="container" id="login">
    <h3>Prijava korisnika:</h3>
        <table style="width: 550px; border:0;" cellpadding="10" cellspacing="0">
            <tr><td><label for="username">Korisničko ime:</label></td>
                <td><input type="text" name="username" maxlength="60" placeholder="Unesi korisničko ime" width="350px"; height="10px"; /></td></tr>
                <tr><td><label for="password">Lozinka: </label></td>
                <td><input type="password" name="password" maxlength="20" placeholder="Unesi lozinku" width="350px"; height="10px"; /></td></tr>
            <tr><td><input type="submit" name="submit" value="Prijavi se" class="btn btn-primary" /></td></tr>
        </table>
</div>