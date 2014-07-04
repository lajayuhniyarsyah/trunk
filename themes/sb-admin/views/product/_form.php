<div class="form">

<?php
	$form = $this->beginWidget(
		'booster.widgets.TbActiveForm',
		array(
			'id' => 'horizontalForm',
			'type' => 'horizontal',
		)
	);
?>
<fieldset>
	<legend>Please Fill The Form Inside</legend>

	<?php 
		echo $form->textFieldGroup(
			$model,
			'name',
			array(
				// 'hint'=>'Name Of Product'
				'wrapperHtmlOptions' => array(
					'class' => 'col-xs-6 col-sm-4',
				),
				'labelOptions'=>array(
					'class'=>'col-sm-2',
				)
			)
		);
		echo $form->textFieldGroup(
			$model,
			'price',
			array(
				// 'hint'=>'Tags'
				'wrapperHtmlOptions' => array(
					'class' => 'col-xs-6 col-sm-4',
				),
				'labelOptions'=>array(
					'class'=>'col-sm-2',
				)
			)
		);
		echo $form->textFieldGroup(
			$model,
			'qty',
			array(
				// 'hint'=>'Tags'
				'wrapperHtmlOptions' => array(
					'class' => 'col-xs-6 col-sm-4',
				),
				'labelOptions'=>array(
					'class'=>'col-sm-2',
				)
			)
		);
		echo $form->textFieldGroup(
			$model,
			'tags',
			array(
				// 'hint'=>'Tags'
				'wrapperHtmlOptions' => array(
					'class' => 'col-xs-6 col-sm-4',
				),
				'labelOptions'=>array(
					'class'=>'col-sm-2',
				)
			)
		);


	?>
	<div class="form-group">
		<div class="col-sm-2">&nbsp;</div>
		<div class="col-xs-6">
		<?php
			$this->widget(
		        'booster.widgets.TbButton',
		        array(
		            'label' => 'Add New',
		            'context' => 'primary',
		            'buttonType'=>'submit',
	            )
	        );
        ?>
        </div>
	</div>
</fieldset>
<?php
	$this->endWidget();
	unset($form);
?>
</div>