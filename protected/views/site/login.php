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
        <a href="#">Login</a>
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
            <h3>Account Login</h3>
            <ol class="rr">
              <li class="current">
                <h6>Account Login</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="left-col">
                  
                      <h6>New Customer</h6>
                      <p>
                        Create your account
                      </p>
                      
                      <form action="#" method="post" id="form-1">
                        <p>
                           Enter your e-mail address to create an account.
                        </p>
                          <ul class="rr">
                          <li>
                            <label>
                              <input type="text" name="account" class="inputtext" placeholder="Your account..."/>
                            </label>
                          </li>
                        </ul>
                        <a href="#" class="btn secondary" onclick="document.forms['form-1'].submit()">
                          <span class="gradient">Create  account</span>
                        </a>
                      </form>
                    
                    </div>
                    <div class="right-col">
                    
                      <h6>Login</h6>
                      <p>
                        Already registered
                      </p>
                      <?php
                      // print_r($model->errors);
                      $form = $this->beginWidget('booster.widgets.TbActiveForm',array(
                      	'id'=>'form-2',
                      	'enableAjaxValidation'=>true,
                      ));
                      // echo $form->errorSummary($model);
                      ?>
                      
                      <!-- <form method="post" id="form-2"> -->
                        <ul class="rr">
                          <li>
                            <!-- <label> -->
                              <!-- <input type="text" name="<?php echo CHtml::activeName($model,'username'); ?>" placeholder="Your account..."/> -->
                              <?php echo $form->textField($model,'username',array('placeholder'=>'Your Username')); ?>
                              <?php echo $form->error($model,'username'); ?>
                            <!-- </label> -->
                          </li>
                          <li>
                            <!-- <label> -->
                              <!-- <input type="password" name="<?php echo CHtml::activeName($model,'password'); ?>" placeholder="Your password..."/> -->
                              <?php echo $form->passwordField($model,'password',array('placeholder'=>'Your Password')); ?>
                              <?php echo $form->error($model,'username'); ?>
                            <!-- </label> -->
                          </li>
                        </ul>
                        
                        <a href="#" class="forgot">Forgot your password?</a>
                        
                        <a href="#" class="btn secondary" onclick="document.forms['form-2'].submit()">
                          <span class="gradient">LogIn</span>
                        </a>
                      <!-- </form> -->
                      <?php
                      $this->endWidget();
                      ?>
                    
                    </div>  
                  </div>                      
                </div>
              </li>
              
            </ol>
          </div>
        
        </div>
      </div> 