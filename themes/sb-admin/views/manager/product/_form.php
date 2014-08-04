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
		echo $form->errorSummary($model); 
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
		

		
		?>
		<div class="form-group">
			<label for="Product_price" class="col-sm-2 col-sm-3 control-label">Tags</label>
			<div class="col-xs-6 col-sm-4 col-sm-9">
				<!-- <input type="text" id="Product_price" name="Product[price]" placeholder="Price" class="form-control"> -->
				<?php
				$this->widget(
			'booster.widgets.TbSelect2',
			array(
				// 'id'=>CHtml::activeId($model,'value'),
				// 'id'=>'values',
				'asDropDownList' => false,
				// 'name' => 'clevertech',
				'form'=>$form,
				'model'=>$model,
				'attribute'=>'tags',
				'options' => array(
					'tags' => array(),
					'placeholder' => '..',
					'width' => '100%',
					'tokenSeparators' => array(',',' ','	'),
				)
			)
		);
				?>
			</div>
		</div>
		<?php
		
		/*echo $form->textFieldGroup(
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
		);*/


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