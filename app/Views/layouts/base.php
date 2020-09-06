<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $this->renderSection('title') ?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Registered Page">
    <meta name="author" content="Author Content">
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/font-awesome.min.css')?>">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
</head>
<body>


	<?= $this->renderSection('content')?>



	<script src="<?= base_url('assets/js/jquery_bootstrap.js')?>"></script>
	<script src="<?= base_url('assets/js/jquery.js')?>"></script>
	<script src="<?= base_url('assets/js/JavaScript.js')?>"></script>
	<script src="<?= base_url('assets/js/popover.js')?>"></script>
	<script src="<?= base_url('assets/js/bootstrap.js')?>"></script>

</body>
</html>