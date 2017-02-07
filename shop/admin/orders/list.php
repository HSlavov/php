<?php
include __DIR__ . '/../partials/header.php';

if (isset($_GET['delete'])) {
	delete('order', (int)$_GET['delete']);
}

$relations = [
	'user' => [
		'type' => '1toM',
		'left_column' => 'user_id',
		'right_column' => 'id',
		'join' => 'INNER',
		'columns' => [
			'id' => 'user_id',
			'first_name' => 'first_name',
			'last_name' => 'last_name',
			'email' => 'email',
			'address' => 'address'
		]
	],
	'product' => [
		'type' => 'MtoM',
		'through' => [
			'table'=>'order_has_product',
			'left_column' => 'order_id',
			'right_column' => 'product_id',
			'join' => 'LEFT',
			'columns' => [
				'qty' => 'qty',
			]
		],
		'left_column' => 'id',
		'right_column' => 'id',
		'join' => 'LEFT',
		'columns' => [
			'id' => 'id',
			'name' => 'product_name',
			'price' => 'price'
		]
	],
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$orderResult = listItems('order', $currentPage, 5, $relations);
$orders = $orderResult['results'];
$pages = $orderResult['pagination']['pages'];
$lastPage = $orderResult['pagination']['lastPage'];

?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Orders <small>Orders Overview</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Orders
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
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Products</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
							<?php foreach ( $orders as $order ) { ?>
                            <tr>
                                <td><?=$order['id']?></td>
                                <td><?=$order['first_name']?></td>
                                <td><?=$order['last_name']?></td>
                                <td><?=$order['address']?></td>
                                <td><?=$order['email']?></td>
                                <td>
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Qty</th>
                                                <th>Total Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php if (isset($order['product'])) { foreach ( $order['product'] as $product ) { ?>
                                            <tr>
                                                <td><?=$product['id']?></td>
                                                <td><?=$product['product_name']?></td>
                                                <td>$<?=$product['price']?></td>
                                                <td><?=$product['qty']?></td>
                                                <td>$<?=bcmul($product['qty'], $product['price'], 2)?></td>
                                                <td>
                                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="#">Delete</a>
                                                </td>
                                            </tr>
											<?php }  } ?>
                                        </tbody>
                                        <tfoot>
                                        <td colspan="4">Total</td>
                                        <td>$134</td>
                                        </tfoot>
                                    </table>
                                </td>
                                <td width="230px;">
                                    <a style="width:100px;" class="btn btn-lg btn-success" href="#" > Update</a>
                                    <a style="width:100px;" class="btn btn-lg btn-danger" href="?delete=<?=$order['id']?>">Delete</a>
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