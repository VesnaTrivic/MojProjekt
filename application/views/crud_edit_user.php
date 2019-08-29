<!DOCTYPE html>
<?php $this->load->view('static/header'); ?><br><br>

<?php $this->load->view('static/navbar.php'); ?>

<div class="container">
    <form method="post" action="<?php echo site_url('crud_users/update_user') ?>/<?php echo $row->user_id; ?> ">
        <div class="form-group">
            <label for="exampleInputUsername">Korisničko ime</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row->username; ?>"  placeholder="Upiši korisičko ime">
        </div>
        <div class="form-group">
            <label for="exampleInputFirstName">Ime korisnika</label>
            <input type="text" class="form-control" name="first_name" value="<?php echo $row->first_name; ?>" placeholder="Upiši ime korisnika">
        </div>
        <div class="form-group">
            <label for="exampleInputLastName">Prezime korisnika</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $row->last_name; ?>" placeholder="Upiši prezime korisnika">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">E-mail korisnika</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" placeholder="Upiši E-mail korisnika">
        </div> <div class="form-group">
            <label for="exampleInputPassword">Lozinka korisnika</label>
            <input type="password" class="form-control" name="password" value="<?php echo $row->password; ?>" placeholder="Upiši lozinku korisnika">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Ponovo lozinka korisnika</label>
            <input type="password" class="form-control" name="cpassword" value="<?php echo $row->cpassword; ?>" placeholder="Upiši ponovo lozinku korisnika">
        </div>
        <div class="form-group">
            <label for="exampleInputUserType">Tip korisnika</label>
                <select type="text" class="form-control" name="user_type" value="<?php echo $row->user_type; ?>" placeholder="Upiši tip korisnika">
                    <option selected>Izaberi...</option>
                    <option>admin</option>
                    <option>user</option>
                    <option>moderator</option>
                </select>
        </div>
            <button type="submit" class="btn btn-primary" value="save">Sačuvaj</button>
    </form>
</div>