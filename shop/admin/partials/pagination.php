
<div class="row" style="margin-bottom: 20px;">
	<div class="col-lg-4"><a class="btn btn-lg btn-warning" href="form.php">Add Category</a></div>
	<div class="col-lg-4 text-center">
		<div>
			<?php if ($currentPage > 1) { ?>
				<a class="btn btn-lg btn-primary" href="?page=<?= $currentPage - 1 ?>">&lt;&lt;&lt;</a>
			<?php } ?>
			&nbsp;&nbsp;&nbsp;

			<ul style="display: inline; padding:0;">
				<?php foreach ($pages as $page) { ?>
					<li style="display: inline;"><a class="btn btn-lg btn-primary" href="?page=<?= $page ?>"><?= $page ?></a></li>
				<?php } ?>
			</ul>

			&nbsp;&nbsp;&nbsp;
			<?php if ($currentPage < $lastPage) { ?>
				<a class="btn btn-lg btn-primary" href="?page=<?= $currentPage + 1 ?>">&gt;&gt;&gt;</a>
			<?php } ?>
		</div>
	</div>
	<div class="col-lg-4">&nbsp;</div>
</div>
<!-- /.row -->