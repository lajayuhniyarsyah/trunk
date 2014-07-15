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
        <a href="#">My Account</a>
      </li>
    </ul>
  </div>
</div>
</div>
      <div role="main" class="container checkout">
        <div class="row">
        
          <div class="span3 progress">
            <h3>Account</h3>
            <ul class="rr">
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'login')); ?>">Login</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'register')); ?>">Register</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'account')); ?>">My Account</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'OrderHistory')); ?>">Order History</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'newslatter')); ?>">Newslatter</a>
              </li>
            </ul>
          </div>
          
          
          <div class="span9 checkout-list">
            <h3>My Account</h3>
            <ol class="rr">
            <form action="#" method="post" id="form-2">
            <!-- ----------- Your Personal Account ------------------- -->
              <li class="current">
                <h6>Your Personal Details</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="left-account">
                       <ul class="rr">
                          <li>
                            <div class="span2"> Name:
                            </div>
                            <label>
                              EKA CHANDRA SETIAWAN
                            </label>
                          </li>
                        
                          <li>
                            <div class="span2">E-Mail:
                            </div>
                            <label>
                              ekachandrasetiawan@yahoo.com
                            </label>
                          </li>

                            <li>
                            <div class="span2">Telephone:
                            </div>
                            <label>
                              0812-8876-8191
                            </label>
                          </li>
                        </ul>
                    
                    </div>
                    <div class="right-account">
                     <img src="<?php echo yii::app()->theme->baseUrl.'/assets'; ?>/image/profile/banner1.jpg" class="desat-ie" alt=""/>

                    </div> 
                  </div>                      
                </div>
              </li>

              <!-- ---------------- Your Address---------------- -->
              <li class="current">
                <h6>Your Address</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="full-col">
                       <ul class="rr">
                          <li>
                            <div class="span2"> Address:
                            </div>
                            <label>
                              BEKASI TIMUR
                            </label>
                          </li>
                          <li>
                            <div class="span2">City:
                            </div>
                            <label>
                              BEKASI
                            </label>
                          </li>
                          <li>
                            <div class="span2"> Post Code:
                            </div>
                            <label>
                              17115
                            </label>
                          </li>
                        </ul>
                    
                    </div>  
                  </div>                      
                </div>
              </li>
              </form>
            </ol>
          </div>
        
        </div>
      </div> 