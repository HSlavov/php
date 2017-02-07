<?php include __DIR__ . '/../partials/header.php'; ?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    New Page <small>Add New Page</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Add Page >
                        <i class="fa fa-dashboard"></i> New Page
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

                    <div class="form-group input-group">
                        <span class="input-group-addon">ID</span>
                        <input type="text" placeholder="ID Page" class="form-control">
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">URL</span>
                        <input type="text" placeholder="URL Page" class="form-control">
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">Title</span>
                        <input type="text" placeholder="Page Title" class="form-control">
                    </div>

                    <div class="form-group">
						<label>Content</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>

                    <button class="btn btn-lg btn-success" type="submit">Update Information</button>

                </form>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include __DIR__ . '/../partials/footer.php'; ?>