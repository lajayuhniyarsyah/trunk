      <div role="main" class="container checkout">
        <div class="row">
        
          <div class="span3 progress">
            <h3>Checkout progress</h3>
            <ul class="rr">
             <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'checkout')); ?>" >Checkout method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'timeschedule')); ?>">Time Schedule</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'shippingaddress')); ?>">Shipping address</a>
              </li>
              <li>
                <a class="currentmethod" href="#">Shipping method</a>
              </li>
              <li>
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'paymentmethod')); ?>">Payment method</a>
              </li>
            </ul>
          </div>
          
          <div class="span9 checkout-list">
            <h3>Checkout</h3>
            <ol class="rr">
              <li>
                <h6>Checkout method</h6>
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
              <li class="current">
                <h6>Shipping method</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                  
                    <h6>Shipping Method</h6><br />
                    Please Select Shipping Method<br /><br />
                    <div class="full-col">
                     <ul class="rr">
                          <li class="span8">
                            <div class="block bold black"> TIKI JNE REGULER:
                            </div>
                          <div class="span5">
                              <input type="radio" name="shippingmethod" value="1"/> 
                              <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/jne.png" />
                              
                              Reguler Shipping Rate By TIKI JNE
                          </div>
                          <div class="span2 rigth">
                            Rp.16.000
                          </div>
                          </li>
                          
                          <li class="span8">
                            <div class="block bold black"> TIKI JNE YES:
                            </div>
                          <div class="span5">
                              <input type="radio" name="shippingmethod" value="1"/> 
                              <img src="<?php echo yii::app()->theme->baseUrl.'/assets/' ?>img/jne.png" />
                              
                              Yakin Esok Sampai Shipping Rate By TIKI JNE
                          </div>
                          <div class="span2 rigth">
                            Rp.20.000
                          </div>
                          </li>
                          <li>
                            <a onclick="document.forms['form-1'].submit()" class="btn secondary" href="#">
                              <span class="gradient">Continue</span>
                            </a>
                          </li>
                        </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <h6>Payment method</h6>
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