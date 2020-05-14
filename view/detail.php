<?php
include 'view/header.php';
?>
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <legend>Edit <?= $product->name ?></legend>
            <form action="?mode=products&action=edit" method="post" role="form">


               <div class="form-group">
                  <label for="">Name :</label>
                  <input type="text" class="form-control" name="name" value="<?= $product->name ?>" placeholder="Name" required>
               </div>
               <div class="form-group">
                  <label for="">Price :</label>
                  <input type="number" class="form-control" name="price" value="<?= $product->price ?>"" placeholder="Price" required>
               </div>
               <div class="form-group">
                  <label for="">Description :</label>
                  <textarea name="description" class="form-control" id="" rows="3"><?= $product->description ?></textarea>
               </div>
               <div class="form-group">
                  <label for="">Manufactor :</label>
                  <input type="text" class="form-control" name="manufactor" value="<?= $product->manufactor ?>"" placeholder="Manufactor">
               </div>
               <br>
               <div class="form-group" style="text-align: center">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-success">Update</button>
               </div>
            </form>
         </div>
      </div>
   </div>


<?php
include "view/footer.php";
?>