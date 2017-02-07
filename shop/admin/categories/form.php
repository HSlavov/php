<?php include __DIR__.'/../partials/header.php'; ?>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categories <small>Add Category</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Categories >
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
                    <div class="col-lg-3">
                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">Name</span>
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">Description</span>
                                <input type="text" placeholder="Description" class="form-control">
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
		
<?php include __DIR__.'/../partials/footer.php'; ?>