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
                <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'shippingmethod')); ?>">Shipping method</a>
              </li>
              <li>
                <a class="currentmethod" href="#">Payment method</a>
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
              <li>
                <h6>Shipping method</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
                  </div>
                </div>
              </li>
              <li>
                <h6>Payment method</h6>
              </li>
              <li class="current">
                <h6>Order review</h6>
                <div class="row">
                  <div class="span9 content-wrapper cart">
                    <table class="span8">
                          <tr class="headers">
                            <th class="alpha50 dark">
                              Products
                            </th>
                            <th class="alpha16">
                              Quantity
                            </th>
                            <th class="alpha16 dark">
                              Unit price
                            </th>
                            <th class="alpha16">
                              Price
                            </th>
                          </tr>
                          <tr>
                            <td class="clearfix">
                              <div class="info-wrapper">
                                <h2>Men glass mode 2012</h2>
                                <div class="info">
                                  <p class="clearfix">
                                    <span>Size:</span>
                                    <span class="value">M</span>
                                  </p>
                                </div>
                              </div>
                              
                            </td>
                            <td class="quantity dark">
                            
                              <div class="quant-input">1
                              </div>
                              
                            </td>
                            <td>
                            
                              <span class="currency">Rp.</span><span class="value">1.500.000</span>
                            
                            </td>
                            <td class="dark">
                            
                              <span class="currency">Rp.</span><span class="value">1.500.000</span>
                            
                            </td>
                          </tr>
                          <tr>
                            <td class="clearfix">
                              
                              <div class="info-wrapper">
                                <h2>Men glass mode 2012</h2>
                                <div class="info">
                                  <p class="clearfix">
                                    <span>Size:</span>
                                    <span class="value">L</span>
                                  </p>
                                </div>
                              </div>
                              
                            </td>
                            <td class="quantity dark">
                            1
                              </div>
                              
                            </td>
                            <td>
                            
                              <span >Rp.</span><span class="value">1.000.000</span>
                            
                            </td>
                            <td class="dark">
                            
                              <span >Rp.</span><span class="value">1.000.000</span>
                            
                            </td>
                          </tr>
                         <tr>
                            <td colspan="3" class="left">
                              Total products (tax incl.):
                            </td>
                            <td colspan="2" class=" rigth">
                               <span >Rp.</span><span class="value">3.000.000</span>
                            </td>
                         </tr>
                          <tr>
                            <td colspan="3" class="left">
                              Shipping:
                            </td>
                            <td colspan="2" class=" rigth">
                               <span >Rp.</span><span class="value">10.000</span>
                            </td>
                         </tr>
                         <tr>
                            <td colspan="3" class="left coklat whitefont">
                              Total:
                            </td>
                            <td colspan="2" class=" rigth">
                               <span >Rp.</span><span class="value">3.010.000</span>
                            </td>
                         </tr>
                        </table>
                                <div class="row-fluid checkout">
                                  <div class="span4">
                                    <a href="<?php echo Yii::app()->createUrl('site/page',array('view'=>'invoice')); ?>" class="btn"><span class="gradient">Submit</span></a>
                                  </div>
                                </div>
                  </div>
                </div>
              </li>
            </ol>
          </div>
        
        </div>
      </div> 