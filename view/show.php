
<?php
include "view/header.php";
?>
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="table-responsive">
                <legend>List Products</legend>
                <a class="btn btn-success" data-toggle="modal" href="#modal-add">Add new</a>

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Manufactor</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $product): ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $product->name ?></td>
                            <td><?= $product->price ?></td>
                            <td><?= $product->description ?></td>
                            <td><?= $product->manufactor ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="?mode=products&action=detail&id=<?= $product->id ?>" type="button" class="btn btn-warning">Edit</a>
                                </div>
                                <div class="btn-group">
                                    <a class="btn btn-danger" onclick="confirmDelete(this)" data-id="<?= $product->id ?>" data-toggle="modal"
                                       href="#modal-confirm">Delete</a>
                                </div>

                            </td>

                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add New Product</h4>
                </div>
                <div class="modal-body">
                    <form action="?mode=products&action=add" method="post" role="form">


                        <div class="form-group">
                            <label for="">Name :</label>
                            <input type="text" class="form-control" name="name" id="" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Price :</label>
                            <input type="number" class="form-control" name="price" id="" placeholder="Price" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description :</label>
                            <textarea name="description" class="form-control" id="" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Manufactor :</label>
                            <input type="text" class="form-control" name="manufactor" id="" placeholder="Manufactor">
                        </div>
                        <br>
                        <div class="form-group" style="text-align: center">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="modal fade" id="modal-confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                </div>
                <div class="modal-body">
                    <h1 style="color: red;text-align: center">Are you sure ?</h1>
                </div>
                <div class="modal-footer" style="text-align: center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <a id="confirm-delete" type="button" class="btn btn-danger">Sure</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div><!-- /.container -->
<?php
include "view/footer.php";
