<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->widget('MasterMenu');
		$this->widget('AkademikMenu');
		$this->widget('MahasiswaMenu');
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>