<?php
include __DIR__ . '/../partials/header.php';

if (isset($_GET['delete'])) {
	delete('product', (int)$_GET['delete']);
}

$relations = [
	'category' => [
		'type' => '1toM',
		'left_column' => 'category_id',
		'right_column' => 'id',
		'join' => 'INNER',
		'columns' => [
			'id' => 'category_id',
			'name' => 'category_name'
		]
	]
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$productResult = listItems('product', $currentPage, 10, $relations);
$products = $productResult['results'];
$pages = $productResult['pagination']['pages'];
$lastPage = $productResult['pagination']['lastPage'];


?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Products <small>Products Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Products
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
                                <th>Product Name</th>
								<th>Image</th>
								<th>Category</th>
                                <th>Product description</th>
                                <th>Availability</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php foreach ($products as $product) { ?>
								
							
                            <tr>
                                <td><?=$product['id']?></td>
								<td><img src="../../img/products/small/product1.jpg" alt=""/></td>
								<td><?=$product['category_name']?></td>
                                <td><?=$product['name']?> </td>
                                <td><?=$product['short_description']?></td>
                                <td><?=$product['availability']?></td>
                                <td><?=$product['price']?></td>

                                <td width="230px;">
                                    <a style="width:100px;" class="btn btn-lg btn-success" href="form.php?id=<?=$product['id']?>" > Update</a>
                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="?delete=<?=$product['id']?>">Delete</a>
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