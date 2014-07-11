<?php

	$form = $this->beginWidget('booster.widgets.TbActiveForm',array(
	    'type'=>'horizontal',
	    'id'=>'galleryDescriptionForm',
	    'enableAjaxValidation'=>true,
	));
?>
	<div class="row">
		<?php echo $form->textFieldGroup($model,'name'); ?>
	</div>
	<div class="row">
		<?php
			$this->widget(
				'booster.widgets.TbRedactorJs',
				[
					'model'=>$model,
					'attribute' => 'description',
					'value' => $model->description,
					'editorOptions' => [
						'lang' => 'ko',
						'plugins' => [
							'fontfamily', 'textdirection'
						]
					],
				]
			);
		?>
	</div>
<?php
	$this->endWidget();
?>