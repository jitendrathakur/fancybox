

<!DOCTYPE html>
<html>
<head>

<?php echo $html->css(array('bootstrap', 'style', 'jquery.fancybox')) ?>
<?php echo $html->script(array('jquery-1.8.3.min', 'jquery.dataTables', 'datatables.bootstrap', 'jquery.fancybox', 'iframe-custom')) ?>

</head>

<body>

<div class="container" style="margin-top:50px;">
	<!-- Here's where I want my views to be displayed -->
	<?php echo $content_for_layout ?>

</div>

<!-- Add a footer to each displayed page -->
<div id="footer"></div>

</body>
</html>
