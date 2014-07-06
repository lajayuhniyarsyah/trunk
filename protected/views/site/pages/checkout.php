      <div role="main" class="container checkout">
        <div class="row">
        
          <div class="span3 progress">
            <h3>Checkout progress</h3>
            <ul class="rr">
             <li>
                <a href="#" class="currentmethod">Checkout method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'timeschedule')); ?>">Time Schedule</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'shippingaddress')); ?>">Shipping address</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'shippingmethod')); ?>">Shipping method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'paymentmethod')); ?>">Payment method</a>
              </li>
            </ul>
          </div>
          
          <div class="span9 checkout-list">
            <h3>Checkout</h3>
            <ol class="rr">
              <li class="current">
                <h6>Checkout method</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="left-col">
                  
                      <h6>Checkout as a guest or register</h6>
                      <p>
                        Register with us for future convenience
                      </p>
                      
                      <form action="#" method="post" id="form-1">
                        <ul class="rr">
                          <li>
                            <label>
                              <input type="radio" name="checkout-method" value="guest"/>
                              <span>Checkout as a guest</span>
                            </label>
                          </li>
                          <li>
                            <label>
                              <input type="radio" name="checkout-method" value="register"/>
                              <span>Register</span>
                            </label>
                          </li>
                        </ul>
                        
                        <a href="#" class="btn secondary" onclick="document.forms['form-1'].submit()">
                          <span class="gradient">Continue</span>
                        </a>
                      </form>
                    
                    </div>
                    <div class="right-col">
                    
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
              <li>
                <h6>Time Schedule</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li>
                <h6>Shipping Address</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li>
                <h6>Shipping method</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li>
                <h6>Payment information</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li class="last">
                <h6>Order review</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
            </ol>
          </div>
        
        </div>
      </div> 