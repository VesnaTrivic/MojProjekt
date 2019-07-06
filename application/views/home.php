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
                    <li><a href="<?php echo base_url(). "index.php/home"; ?>">Početna</a></li>
                    <li><a href="<?php echo base_url(). "index.php/home/reservation"; ?>">Rezervacije</a></li>
                    <li><a href="<?php echo base_url(). "Vizija.pdf"; ?>">Vizija</a></li>
                    <li><a href="<?php echo base_url(). "index.php/home/kontakt"; ?>">Kontakt</a></li>
                    <li><a href="<?php echo base_url(). "index.php/home/login"; ?>">Prijava/Registracija</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">    
        <div class="col-sm-6">
        <p>Kozmetički salon "Ljepota" vam nudi široku lepezu usluga u kozmetici, pedikuri i manikuri. Težnja nam je 
			da osjetite djelić opuštajućeg ugođaja za vrijeme korištenja bilo kojeg od naših vrhunskih tretmana. 
			Uvođenje novih, modernijih kozmetičkih usluga garancija je kvaliteta i pružanja vrhunskih kozmetičkih
			tretmana koristeći pritom samo preparate vrhunske provjere i profesionalne kvalitete.<br><br>

			Naša otvorenost i susretljivost pomoći će vam pronaći kozmetičke usluge i kombinaciju tretmana koji 
			baš Vama odgovaraju. Primjenjujući samo visoko kvalitetne i profesionalne preparate kozmetičkih kuća,
			uspješno rješavamo probleme najosjetljivije mladenačke kože, ali i kože zrelije dobi.
		</p>
	    <h4>Očekujemo Vas s veseljem!</h4>
        </div>

        <img src="<?= base_url("assets/images/10.jpg"); ?>">
    </div>

<?php $this->load->view('static/header.php'); ?>