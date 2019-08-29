<!DOCTYPE html>
<?php $this->load->view('static/header'); ?><br><br>

<?php $this->load->view('static/navbar.php'); ?>

<div class="container">
    <form method="post" action="<?php echo site_url('crud_products/update_product') ?>/<?php echo $row->product_id; ?> ">
        <div class="form-group">
            <label for="exampleInputPassword">Ime tretmana</label>
            <input type="text" class="form-control" name="product_name" value="<?php echo $row->product_name; ?>"  placeholder="Upiši ime tretmana">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Cijena tretmana</label>
            <input type="text" class="form-control" name="price" value="<?php echo $row->price; ?>" placeholder="Upiši cijenu tretmana">
        </div> <div class="form-group">
            <label for="exampleInputPassword">Slika</label>
            <input type="text" class="form-control" name="image" value="<?php echo $row->image; ?>" placeholder="Dodaj sliku tretmana">
        </div>
            <button type="submit" class="btn btn-primary" value="save">Sačuvaj</button>
    </form>
</div>