<?php require_once('../../../private/init.php');?>

<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div id="wrapper">
	<aside class="main_sidebar">
		<ul class="sidebar-nav">
			<li><a href="#">profile</a></li>
			<li><a href="#">User authentication</a></li>
			<li><a href="<?php echo url_for('/members/admin/tourn.php'); ?>">Tournaments</a></li>
			<li><a href="#">Teams</a></li>
			<li><a href="#">Fixtures</a></li>
			<li><a href="#">Results</a></li>
		</ul>
	</aside>
</div>