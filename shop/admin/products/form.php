<?php 
include __DIR__ . '/../partials/header.php'; 

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	if ( isset($_POST['id']) && !empty($_POST['id']) ) {
		//We are updating
		$result = update('product', $_POST, $_POST['id']);
		if ( $result ) {
			redirect('list.php');
		}
	}
	
}

$possibleAvailability = ['in_stock', 'not_in_stock'];

$product = selectById('product', $_GET['id']);

$categoryResults = listItems('category', 1, PHP_INT_MAX);
$categories = $categoryResults['results'];

?>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Products <small>Add Product</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i>Products >
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
                <form method="POST" role="form">
					<input value='<?=$product['id']?>' name='id' type="hidden"/>
                    <div class="form-group input-group">
                        <span class="input-group-addon">Product name</span>
                        <input name='name' value='<?=$product['name']?>' type="text" placeholder="Product name" class="form-control">
                    </div>

					<div class="form-group">
						<label>Category</label>
						<select name='category_id' class="form-control">
							<?php foreach ( $categories as $category ) { ?>
							<option <?php if ( $category['id'] == $product['category_id'] ) { ?> selected="selected" <?php } ?> value='<?=$category['id']?>'><?=$category['name']?></option>
							<?php } ?>
							
						</select>
					</div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">Product description</span>
                        <input name='short_description' value='<?=$product['short_description']?>' type="text" placeholder="Product description" class="form-control">
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">Availability</span>
                        <select name='availability' class="form-control">
							<?php foreach ( $possibleAvailability as $availability ) { ?>
							<option <?php if ( $availability == $product['availability'] ) { ?> selected="selected" <?php } ?> ><?=$availability?></option>
							<?php } ?>
							
						</select>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon">Price</span>
                        <input name='price' value='<?=$product['price']?>' type="text" placeholder="Price" class="form-control">
                    </div>

					<div class="form-group">
						<label>Image</label>
						<img src="../../img/products/small/product1.jpg" alt=""/>
						<input type="file">
					</div>
					
                    <div class="form-group">
                        <label>Long description</label>
                        <textarea class="form-control" rows="3"><?=$product['long_description']?></textarea>
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