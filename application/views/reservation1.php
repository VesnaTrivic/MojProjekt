<!DOCTYPE html>
<?php $this->load->view('static/header'); ?>

<?php $this->load->view('static/navbar.php'); ?>

<div class="container">
  <h2>Rezervacija</h2>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" >Dodaj rezervaciju</button><br><br>
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Dodavanje rezervacije</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">              
          <form method="post" action="<?php echo site_url('controller_reservation/create_reservation') ?>">
            <div class="form-group">
              <label for="inputUser_id" class="col-sm-5 control-label">Id korisnika:</label>
              <input type="number" value="" class="form-control" name="user_id" placeholder="Upiši Id korisnika">
            </div>
            
            <div class="form-group">
              <label for="inputProduct_id" class="col-sm-5 control-label">Id proizvoda:</label>
              <input type="number" value="" class="form-control" name="product_id" placeholder="Upiši Id proizvoda">
            </div> 

            <div class="form-group">
              <label for="input" class="col-sm-5 control-label">Datum rezervacije:</label>
              <input type="date" value="18-06-2019" max="31-12-2019" min="06-06-2019" class="form-control" name="date">
            </div>

            <div class="form-group">
              <label for="input" class="col-sm-5 control-label">Vrijeme početka:</label>
              <input type="time" min="08:00" max="23:00" class="form-control" name="begin_time">
            </div>
                  
            <div class="form-group">
              <label for="input" class="col-sm-5 control-label">Vrijeme završetka:</label>
              <input type="time" min="08:00" max="23:00" class="form-control" name="end_time">
            </div>
                  
            <div class="form-group">
              <label for="input" class="col-sm-5 control-label">Količina:</label>
              <input type="number" value="2019-18-06" max="5" min="1" class="form-control" name="quantity">
            </div>

            <button type="submit" class="btn btn-primary" value="save">Sačuvaj</button>
          </form>
        </div>

        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zatvori</button>
        </div>
      </div>
    </div>
  </div>

  <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Id korisnika</th>
        <th scope="col">Id proizvoda</th>
        <th scope="col">Datum</th>
        <th scope="col">Početno vrijeme</th>
        <th scope="col">Završno vrijeme</th>
        <th scope="col">Količina</th>
        </tr>
    </thead>
    <tbody>
    <?php if(!empty($result)){ ?> 
    <?php foreach($result as $row) {?>
    <tr>
        <th scope="row"><?php echo $row->order_id; ?></th>
        <td><?php echo $row->user_id; ?></td>
        <td><?php echo $row->product_id; ?></td>
        <td><?php echo $row->date; ?></td>
        <td><?php echo $row->begin_time; ?></td>
        <td><?php echo $row->end_time; ?></td>
        <td><?php echo $row->quantity; ?></td>
        </tr>
    <?php } }?>

    </tbody>
    </table>
</div>

<?php $this->load->view('static/footer'); ?>