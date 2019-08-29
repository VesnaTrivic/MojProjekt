<div class="jumbotron">
    <h1 class="display-3">Kozmetički salon "Ljepota"</h1>
    <p class="lead">Web aplikacija za rezervaciju kozmetičkih tretmana</p>
    <hr class="my-4">
    <h3>Dobrodošli <?php echo $this->session->userdata('username'); ?>!</h3>
</div>

<style>
 .dropbtn {
  background-color: lightcoral;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: gray;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<div class="container">
    <div class="container">
        <div class="navbar">
            <a class="active" href="<?php echo base_url(). "index.php/home"; ?>"><i class="fa fa-fw fa-home"></i>Početna</a>
            <a href="<?php echo base_url(). "index.php/home/aboutUs"; ?>"><i class="fa fa-fw fa-info"></i>O nama</a> 
            <a href="<?php echo base_url(). "index.php/home/reservation"; ?>"><i class="fa fa-fw fa-user"></i>Rezervacija</a>
            <a href="<?php echo base_url(). "Vizija.pdf"; ?>"><i class="fa fa-fw fa-info"></i>Vizija</a>
            <a href="<?php echo base_url(). "index.php/home/contact"; ?>"><i class="fa fa-fw fa-envelope"></i>Kontakt</a>
            <a href="<?php echo base_url(). "index.php/home/search"; ?>"><i class="fa fa-fw fa-search"></i>Pretraga</a>
            <a href="<?php echo base_url(). "index.php/home/admin"; ?>"><i class="fa fa-fw fa-user"></i>Admin</a>
            <?php if($this->session->userdata('username') ): ?>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><?php echo $this->session->userdata('username'); ?></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="<?php echo base_url(). "index.php/home/user_information"; ?>"><i class="fa fa-fw fa-user"></i>Profil</a>
                        <a href="<?php echo base_url(). "index.php/home/logout"; ?>"><i class="fa fa-fw fa-sign-out"></i>Odjava</a>
                    </div>
                </div>                
            <?php else: ?>
                <a href="<?php echo base_url(). "index.php/home/login"; ?>"><i class="fa fa-fw fa-sign-in"></i>Prijava/Registracija</a>
            <?php endif; ?>
        </div>
    </div><br><br>