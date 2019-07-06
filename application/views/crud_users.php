<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url(). "index.php/crud_products"; ?>">Uređivanje tretmana</a>
    </nav><br><br>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?php echo base_url(). "index.php/crud_users"; ?>">Uređivanje korisnika</a>
    </nav><br><br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Dodaj korisnika</button>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Dodavanje korisnika</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">              
                    <form method="post" action="<?php echo site_url('crud_users/create_user') ?>">
                    <div class="form-group">
                        <label for="exampleInputPassword">Korisničko ime:</label>
                        <input type="text" class="form-control" name="username" placeholder="Upiši korisničko ime">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFirstName">Ime korisnika:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Upiši ime korisnika">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLastName">Prezime:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Upiši prezime korisnika">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">E-mail:</label>
                        <input type="email" class="form-control" name="email" placeholder="example@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Lozinka</label>
                        <input type="password" class="form-control" name="password" placeholder="Upiši lozinku korisnika">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Potvrda lozinke</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Upiši ponovo lozinku korisnika">
                    </div>
                    <div class="form-group">
                        <label for="exampleUserType">Tip korisnika</label>
                        <input type="text" class="form-control" name="user_type" placeholder="Upiši tip korisnika">
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
        <th scope="col">Korisničko ime</th>
        <th scope="col">Ime korisnika</th>
        <th scope="col">Prezime korisnika</th>
        <th scope="col">E-mail korisnika</th>
        <th scope="col">Lozinka korisnika</th>
        <th scope="col">Ponovo lozinka korisnika</th>
        <th scope="col">Tip korisnika</th>
        <th scope="col">Akcije</th>
        </tr>
    </thead>
    <tbody>
    <?php if(!empty($result)){ ?>
    <?php foreach($result as $row) {?>
    <tr>
    <th scope="row"><?php echo $row->user_id; ?></th>
    <td><?php echo $row->username; ?></td>
    <td><?php echo $row->first_name; ?></td>
    <td><?php echo $row->last_name; ?></td>
    <td><?php echo $row->email; ?></td>
    <td><?php echo $row->password; ?></td>
    <td><?php echo $row->cpassword; ?></td>
    <td><?php echo $row->user_type; ?></td>
    <td><button type="button" class="btn btn-info"><a href="<?php echo site_url('crud_users/edit_user'); ?>/<?php echo $row->user_id; ?>">Uredi</a></button>|
    <button type="button" class="btn btn-success"><a href="<?php echo site_url('crud_users/delete_user'); ?>/<?php echo $row->user_id; ?>">Obriši</a></button></td>
    </tr>
    <?php } }?>

    </tbody>
    </table>

    <button btn btn-primary>
    <a href="<?php echo base_url().'index.php/home/logout' ?>">Odjava</a>
    </button><br>
</div>