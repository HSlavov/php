<?php include __DIR__.'/../partials/header.php'; ?>
		<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Users <small>Add User</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Users >
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
                                <span class="input-group-addon">Username</span>
                                <input type="text" placeholder="Username" class="form-control">
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">First Name</span>
                                <input type="text" placeholder="First Name" class="form-control">
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">Last Name</span>
                                <input type="text" placeholder="Last Name" class="form-control">
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">Email</span>
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">Address</span>
                                <input type="text" placeholder="Address" class="form-control">
                            </div>
							
							<div class="form-group">
                                <label>Sex</label>
                                <select class="form-control">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">Birth Date</span>
                                <input type="text" placeholder="Birth Date" class="form-control">
                            </div>
							
							<div class="form-group input-group">
                                <span class="input-group-addon">Password</span>
                                <input type="password" placeholder="Password" class="form-control">
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