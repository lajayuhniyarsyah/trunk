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
        <a href="#">Newslatter</a>
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
            <h3>Register Account</h3>
            <ol class="rr">
              <li class="current">
                <h6>Your Personal Details</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="full-col">
                    
                      <h6>Login</h6>
                      <p>
                        Already registered
                      </p>
                      
                      <form action="#" method="post" id="form-2">
                        <ul class="rr">
                          <li>
                            <label>
                              <input type="text" name="account" placeholder="Your account..."/>
                            </label>
                          </li>
                          <li>
                            <label>
                              <input type="password" name="password" placeholder="Your password..."/>
                            </label>
                          </li>
                        </ul>
                        
                        <a href="#" class="forgot">Forgot your password?</a>
                        
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