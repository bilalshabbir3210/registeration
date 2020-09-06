<!--Extends Basic Template !-->
<?= $this->extend('layouts/base')?>

<!--Render Title to Basic Template !-->

<?= $this->section('title')?>
	<?= $title ?>
<?php $this->endSection()?>	

<!--Render Body of Basic Template !-->

<?= $this->section('content')?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 leftCol">
			<?= $this->include('layouts/sectionOne')?>
		</div>
		<div class="col-md-6 rightCol">
			<?= $this->include('layouts/sectionTwo')?>
			
		</div>
	</div>
</div>
<?= $this->endSection()?>

