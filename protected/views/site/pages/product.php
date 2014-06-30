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
        <a href="#">Product Harxa</a>
      </li>
    </ul>
  </div>
</div>
</div>
      <div role="main" class="container products grid">        
        <div class="row">
        
          <div class="span12">
            <h2>Products</h2>
            <div class="featured clearfix hidden-phone">
              <span class="corner-badge hot-right ir">Hot</span>
              <figure>
                <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/ph/ph-featured-1.png" alt=""/>
              </figure>
              <div class="content">
                <a href="#"><h1 class="featured-title">New trend for men 2012</h1></a>
                <p>
                  Sed eu lorem sit amet tellus hendrerit dignissim ac id nibh. In hac habitasse platea dictumst
                </p>
              </div>
            </div>
            
            <div class="products-view-nav row">
              <div class="span3">
                <ul class="views rr">
                  <li class="current"><a href="#" id="gridproduct" class="grid ir">Grid view</a></li>
                  <li><a href="#" class="list ir" id="listproduct">List view</a></li>
                </ul>
              </div>
            </div>
            
            <ul id="productgrid" class="row-fluid clearfix rr grid-display" >
              <?php for($i=1; $i<=15; $i++){ ?> 
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
            <span class="status stylestatus">
                <table class="simple-table">
                    <tr>
                        <td colspan="3" style="color: #ed1c24 !important;">PRODUCT STATUS</td>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>Not Available</td>
                        <td>1 Buking</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>Ready</td>
                        <td>1 Buking</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>Ready</td>
                        <td>1 Buking</td>
                    </tr>
                </table>
            </span>
              <span class="info gradient">
                <span class="title">Men glass mode 2012</span>
                <span class="add-to-view clearfix">
                  <span class="icon ir">Cart</span>
                  <a href="7-cart.html" class="text">View Detail</a>
                </span>
                    <div class="grid-display">
                        <span class="badge price-badge">
                        <span class="value">
                        <span>Rp.</span>
                          <span>1.500.000</span>
                        </span>
                      </span>
                  </div>
              </span>
            </div>
          </li>
          <?php } ?>
          </ul>
            
            <?php
              echo $this->renderPartial('/site/pages/productlist');
                //include "content/productlist.php";
            ?>
            <div class="products-view-nav row bottom">
            
              <div class="span3">
                <ul class="views rr">
                  <li class="current"><a href="#" class="grid ir" id="gridproduct">Grid view</a></li>
                  <li><a href="#" class="list ir" id="listproduct">List view</a></li>
                </ul>
              </div>
           
            </div>
            
          </div>
          
        </div>
      </div>
      