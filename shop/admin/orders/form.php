<?php 
include __DIR__ . '/../partials/header.php'; 

?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Orders <small>Add Orders</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Orders >
                        <i class="fa fa-dashboard"></i> Add
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  STATUS_MESSAGE
                </div>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">
                <form role="form">
                    <div class="form-group">
                        <label>User</label>
                        <select class="form-control">
                            <option>Pnecho</option>
                            <option>Pnecho</option>
                            <option>Pnecho</option>
                        </select>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">Address</span>
                        <input type="text" placeholder="Address" class="form-control">
                    </div>

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Lapatop</option>
                                            <option>Desktop</option>
                                            <option>Tablet</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Qty</span>
                                        <input type="number" placeholder="Quantity" value="3" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Lapatop</option>
                                            <option>Desktop</option>
                                            <option>Tablet</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Qty</span>
                                        <input type="number" placeholder="Quantity" value="3" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Lapatop</option>
                                            <option>Desktop</option>
                                            <option>Tablet</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">Qty</span>
                                        <input type="number" placeholder="Quantity" value="3" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="#">Delete</a>
                                </td>
                            </tr>

                        </tbody>

                    </table>


                    <div class="form-group input-group">
                        <span class="input-group-addon">Total</span>
                        <input type="number" placeholder="Total" value="3" class="form-control">
                    </div>

                    <button class="btn btn-lg btn-success" type="submit">Submit Button</button>

                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include __DIR__ . '/../partials/footer.php'; ?>