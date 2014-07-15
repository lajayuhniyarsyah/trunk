<div class="container breadcrumb-wrapper">
<div class="row">
  <div class="span12 breadcrumb">
    <ul class="rr">
      <li>
        <span class="splitter">/</span>
        <a href="#">Home</a>
      </li>
      <li>
        <span class="splitter">/</span>
        <a href="#">Cart Trunk Show</a>
      </li>
    </ul>
  </div>
</div>
</div>
      <div role="main" class="container products grid">        
        <div class="row">
        
          <div class="span12">
            <h2>YOUR CART FOR MODEL TRUNK SHOW</h2>
            
            <ul id="productgrid" class="row-fluid clearfix rr grid-display" >
              <?php for($i=1; $i<=6; $i++){ ?> 
          <li class="span3 alpha33">
            <div class="prod-wrapper">
              <span class="badge corner-badge hot ir hidden">Hot</span>
              <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'productdetail')); ?>">
                <?php
                    if($i % 2==0){
                ?>
                  <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/ph/ph-home-big-1.png" class="desat-ie" alt=""/>
                 <?php      
                    }else if($i % 3==0){
                ?>
                <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/ph/ph-home-big-2.png" class="desat-ie" alt=""/>
                <?php }else { ?>
                <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/ph/ph-home-big-3.png" class="desat-ie" alt=""/>
                <?php } ?>
              </a>
              <span class="notif gradient">
                <span class="title block">Men glass mode 2012</span>
                
                <span class="red">Men glass mode 2012</span>
              </span>
            </div>
          </li>
          <?php } ?>
          </ul>
            
          <div class="row-fluid checkout">
          <div class="span12">
             <a href="#" class=" btn" style="float: left;"><span class="gradient">Back Up</span></a>
            <a href="#" class=" btn" style="float: right;"><span class="gradient">Checkout</span></a>
          </div>
        </div>
          </div>
          
        </div>
      </div>
      