<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<div class="jumbotron">
    <h1 class="display-3">Kozmetički salon "Ljepota"</h1>
    <p class="lead">Web aplikacija za rezervaciju kozmetičkih tretmana</p>
    <hr class="my-4">
    <h3>Dobrodošli <?php echo $this->session->userdata('username'); ?>!</h3>
</div>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo base_url(). "index.php/crud_products"; ?>">Uređivanje tretmana</a>
</nav><br><br>

<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url(). "index.php/crud_users"; ?>">Uređivanje korisnika</a>
    </nav><br><br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Dodaj tretman</button>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Dodavanje tretmana</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">              
                <form method="post" action="<?php echo site_url('crud_products/create_product') ?>">
                <div class="form-group">
                <label for="exampleInputPassword">Ime tretmana</label>
                <input type="text" class="form-control" name="product_name" placeholder="Upiši ime tretmana">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword">Cijena tretmana</label>
                <input type="text" class="form-control" name="price" placeholder="Upiši cijenu tretmana">
                </div> <div class="form-group">
                <label for="exampleInputPassword">Slika</label>
                <input type="text" class="form-control" name="image" placeholder="Dodaj sliku tretmana">
                </div>
                <button type="submit" class="btn btn-primary" value="save">Sačuvaj</button>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
                    <button type="submit" class="btn btn-primary" value="save">Sačuvaj promjene</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Ime tretmana</th>
        <th scope="col">Cijena</th>
        <th scope="col">Slika</th>
        <th scope="col">Akcije</th>
        </tr>
    </thead>
    <tbody>
    <?php if(!empty($result)){ ?>
    <?php foreach($result as $row) {?>
    <tr>
    <th scope="row"><?php echo $row->product_id; ?></th>
    <td><?php echo $row->product_name; ?></td>
    <td><?php echo $row->price; ?></td>
    <td><?php echo $row->image; ?></td>
    <td><button type="button" class="btn btn-info"><a href="<?php echo site_url('crud_products/edit_product'); ?>/<?php echo $row->product_id; ?>">Uredi</a></button>|
    <button type="button" class="btn btn-success"><a href="<?php echo site_url('crud_products/delete_product'); ?>/<?php echo $row->product_id; ?>">Obriši</a></button></td>
    </tr>
    <?php } }?>

    </tbody>
    </table>

    <button btn btn-primary>
        <a href="<?php echo base_url().'index.php/home/logout' ?>">Odjava</a>
    </button><br>
</div>

<?php $this->load->view('static/footer'); ?>