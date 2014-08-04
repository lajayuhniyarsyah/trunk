<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'setting-detail-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
	<!-- <div class="form-group">
		<label for="<?php echo CHtml::activeId($model,'setting_id'); ?>" class="control-label">For</label> -->
		<?php
			// echo $form->textFieldGroup($model,'setting_id',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5'))));
			// echo $form->dropDown($model,'setting_id',CHtml::listData(Setting::model()->findAll(),'id','name'));
		// var_dump(CHtml::listData(Setting::model()->findAll(),'id','name'));
			$this->widget(
				'booster.widgets.TbSelect2',
				array(
					'form'=>$form,
					'model'=>$model,
					'attribute' => 'setting_id',
					'data' => CHtml::listData(Setting::model()->findAll(),'id','name'),
					'options' => array(
						'placeholder' => 'Setting',
						'width' => '40%',
						)
					)
				);
		?>
	<!-- </div> -->
	<?php echo $form->textFieldGroup($model,'param',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>255)))); ?>
	


	<?php 
		//echo $form->textAreaGroup($model,'value', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8'))));
		/*$this->widget('booster.widgets.TbTags',array(
			'model'=>$model,
			'attribute'=>'value'
		));*/

		$this->widget(
			'booster.widgets.TbSelect2',
			array(
				// 'id'=>CHtml::activeId($model,'value'),
				// 'id'=>'values',
				'asDropDownList' => false,
				// 'name' => 'clevertech',
				'form'=>$form,
				'model'=>$model,
				'attribute'=>'value',
				'options' => array(
					'tags' => array(),
					'placeholder' => '..',
					'width' => '40%',
					'tokenSeparators' => array(',',' ','	'),
					'separator'=>'|',
				)
			)
		);

	?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
