<?php
include __DIR__ . '/../partials/header.php';

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$categoriesResult = listItems('category', $currentPage, 10);
$categories = $categoriesResult['results'];
$pages = $categoriesResult['pagination']['pages'];
$lastPage = $categoriesResult['pagination']['lastPage'];
?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Categories <small>Categories Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Categories
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

        <?php showPagination($currentPage, $pages, $lastPage); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php foreach ( $categories as $category ) { ?>
                            <tr>
                                <td><?=$category['id']?></td>
                                <td><?=$category['name']?></td>
                                <td><?=$category['description']?></td>
                                <td width="230px;">
                                    <a style="width:100px;" class="btn btn-lg btn-success" href="#" > Update</a>
                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="#">Delete</a>
                                </td>
                            </tr>
							<?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <?php showPagination($currentPage, $pages, $lastPage); ?>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php include __DIR__ . '/../partials/footer.php'; ?>