<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Profile");
$this->breadcrumbs=array(
	UserModule::t("Profile"),
);
?>

<div id="profileArea">
	<h1><?php echo UserModule::t('Your Profile'); ?></h1>
	<div style="float:left;">
		<?php echo CHtml::image(Yii::app()->baseUrl.'/images/users/'.(empty($profile->photo) ? 'default.png':$profile->photo)); ?>
	</div>
	<div>
		<?php
			$this->widget('booster.widgets.TbEditableDetailView',array(
				'data'=>$profile,
				'attributes'=>array(
					array(
						'name'=>'first_name'
					),
					array(
						'name'=>'last_name'
					),
					array(
						'name'=>'birth_place'
					),
					array(
						'name'=>'birth_date'
					),
					/*
					array(
						'name'=>'delivery_addr'
					),
					array(
						'name'=>'city'
					),
					array(
						'name'=>'district'
					),
					array(
						'name'=>'postal_code'
					),
					*/
				)
			));
		?>
	</div>
</div>
<div id="accountArea" style="clear:both;">
<h1><?php echo UserModule::t('Your Account'); ?></h1>

<?php if(Yii::app()->user->hasFlash('profileMessage')): ?>
<div class="success">
	<?php echo Yii::app()->user->getFlash('profileMessage'); ?>
</div>
<?php endif; ?>

<?php
    $this->widget(
	    'booster.widgets.TbEditableDetailView',
	    array(
		    // 'id' => 'region-details',
		    'data' => $model,
		    // 'type'=>'checklist',
		    // 'url' => $endpoint,
		    'url'=>array(),
		    'attributes' => array(
			    array(
			    	'name'=>'username',
			    	'editable'=>array('type'=>'text')
			    ),
			    array(
			    	'name'=>'email',
			    	'editable'=>array('type'=>'text')
			    ),
			    array(
			    	'name'=>'superuser',
			    	'editable'=>array('type'=>'select','source'=>array('1'=>'Yes','0'=>'No'))
			    ),
			    array(
			    	'name'=>'status',
			    	'label'=>'Active',
			    	'editable'=>array('type'=>'select','source'=>array('1'=>'Yes','0'=>'No'))
			    )
		    )
	    )
    );
?>
</div>