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
        <a href="#">Register Account</a>
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
            <h3>Register Account</h3>
            <ol class="rr">
            <form action="#" method="post" id="form-2">
            <!-- ----------- Your Personal Account ------------------- -->
              <li class="current">
                <h6>Your Personal information</h6>
                <div class="row">
                  <div class="span9 content-wrapper clearfix">
                    <div class="full-col">
                       <ul class="rr">
                        <li>
                            <div class="span2"> Title:
                            </div>
                            <label>
                             <input type="radio" name="newsletter" value="1"> Mr.
                              <input type="radio" name="newsletter" value="2">  Ms.
                                 <input type="radio" name="newsletter" value="3">   Miss.
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> First Name:
                            </div>
                            <label>
                              <input type="text" name="first" placeholder="First Name.."/>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> Last Name:
                            </div>
                            <label>
                              <input type="text" name="last" placeholder="Last Name.."/>
                            </label>
                          </li>

                          <li>
                            <div class="span2">
                              <span class="red">*</span> E-Mail:
                            </div>
                            <label>
                              <input type="text" name="last" placeholder="E-Mail.."/>
                            </label>
                          </li>

                            <li>
                            <div class="span2">
                              <span class="red">*</span> Telephone:
                            </div>
                            <label>
                              <input type="text" name="last" placeholder="Telephone.."/>
                            </label>
                          </li>
                           <li>
                            <div class="span2">
                              <span class="red">*</span> Password:
                            </div>
                            <label>
                              <input type="password" name="first" placeholder="Password.."/><br/>
                            </label>
                              <div class="span2">
                             
                              </div>
                               <label>
                                 (5 characters min.)
                               </label>
                              
                          </li>
                          <li>
                               <div class="span2">
                             
                              </div>
                               <label>
                                <input type="checkbox" name="newsletter" value="1"> Sign up for our newsletter
                               </label>
                          </li>
                        </ul>
                    
                    </div>  
                  </div>                      
                </div>
              </li>
              <!-- ---------- Newslatter--------------- -->

                <li class="current">
                <p>
                <input type="checkbox" name="agree" value="1">
                &nbsp; I have read and agree to the <b>Privacy Policy</b> </p>
                <a href="#" class="btn secondary" onclick="document.forms['form-2'].submit()">
                <span class="gradient">Register</span>
               </a>

              </li>
              </form>
            </ol>
          </div>
        
        </div>
      </div> 