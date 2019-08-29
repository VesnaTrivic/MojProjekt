<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<?php $this->load->view('static/navbar.php'); ?>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable, #table {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td, #table th, #table td {
  text-align: left;
  padding: 12px;
}

#myTable tr, #table tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover, #table tr.header, #table tr:hover {
  background-color: #f1f1f1;
}
</style>

<div class="container">
    <h2>Pretraga</h2>

    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pretraga korisnika.." title="Type in a name">

    <table id="myTable">
    <tr class="header">
        <th><h3>Korisnici</h3></th>
    </tr>
    <tr class="header">
        <th>Korisničko ime</th>
        <th>Ime</th>
        <th>Prezime</th>
        <th>E-mail</th>
        <th>Tip korisnika</th>
    </tr>
    <tr>
        <td>admin</td>
        <td>Admin</td>
        <td>Admin</td>
        <td>admin@gmail.com</td>
        <td>admin</td>
    </tr>
    <tr>
        <td>Petar123</td>
        <td>Petar</td>
        <td>Petrović</td>
        <td>petar@gmail.com</td>
        <td>user</td>
    </tr>
    <tr>
        <td>MarkoM</td>
        <td>Marko</td>
        <td>Marković</td>
        <td>markom@gmail.com</td>
        <td>user</td>
    </tr>
    <tr>
        <td>Peca</td>
        <td>Petar</td>
        <td>Petrovic</td>
        <td>peca@gmail.com</td>
        <td>moderator</td>
    </tr>
    <tr>
        <td>VesnaT</td>
        <td>Vesna</td>
        <td>Trivić</td>
        <td>vesnatrivic@gmail.com</td>
        <td>user</td>
    </tr>
    <tr><td></td></tr>
    <tr class="header">
        <th><h3>Tretmani</h3></th>
    </tr>
    <tr class="header">
        <th>Ime tretmana</th>
        <th>Cijena tretmana</th>
        <th>Slika</th>
    </tr>
    <tr>
        <td>Šminka</td>
        <td>30</td>
        <td>9.jpg</td>
    </tr>
    <tr>
        <td>Frizura</td>
        <td>30</td>
        <td>13.jpg</td>
    </tr>
    <tr>
        <td>Masaža</td>
        <td>20</td>
        <td>14.jpeg</td>
    </tr>
    <tr>
        <td>Nokti</td>
        <td>20</td>
        <td>2.jpg</td>
    </tr>
    </table><br><br>

    <script>
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
    }
    </script>

</div>

<?php $this->load->view('static/footer'); ?>