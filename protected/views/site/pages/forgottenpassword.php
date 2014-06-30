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
        <a href="#">Forgotten Password</a>
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
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'forgottenpassword')); ?>">Forgotten Password</a>
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
            <h3>Forgot Your Password</h3>
            <ol class="rr">
              <li class="current">
                <h6>Forgot Your Password</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="full-col">
                    
                      <h6>New Password</h6>
                      
                      <form action="#" method="post" id="form-2">
                        <ul class="rr">
                          <li>
                          <div class="span2">
                              <span class="red">*</span> New Password:
                            </div>
                            <label>
                              <input type="password" name="account" placeholder="New Password..."/>
                            </label>
                          </li>
                          <li>
                          <div class="span2">
                              <span class="red">*</span> Confirm password:
                            </div>
                            <label>
                              <input type="password" name="password" placeholder="Confirm password..."/>
                            </label>
                          </li>
                        </ul>
                        
                        <a href="#" class="btn secondary" onclick="document.forms['form-2'].submit()">
                          <span class="gradient">Login</span>
                        </a>
                      </form>
                    
                    </div>  
                  </div>                      
                </div>
              </li>
              
            </ol>
          </div>
        
        </div>
      </div> 