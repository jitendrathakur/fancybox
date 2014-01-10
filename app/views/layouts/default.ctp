

<!DOCTYPE html>
<html>
<head>

<?php echo $html->css(array('bootstrap', 'style', 'jquery.fancybox')) ?>
<?php echo $html->script(array('jquery-1.8.3.min', 'jquery.dataTables', 'datatables.bootstrap', 'jquery.fancybox', 'custom')) ?>

</head>

<body>

<!-- If you'd like some sort of menu to
show up on all of your views, include it here -->
<div id="header">
  <?php echo $this->element('navbar'); ?>
</div>

<div class="container" style="margin-top:50px;">
	<!-- Here's where I want my views to be displayed -->
	<?php echo $content_for_layout ?>

</div>

<!-- Add a footer to each displayed page -->
<div id="footer"></div>

</body>
</html>
