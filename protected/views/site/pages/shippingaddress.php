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
                <a class="currentmethod" href="#">Shipping address</a>
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
              <li class="current">
                <h6>Shipping Address</h6>
                                <div class="row">
                                
                  <div class="span9 content-wrapper clearfix">
                  
                    <h6>Shipping Address</h6><br />
                    <div class="full-col">
                       <ul class="rr">
                          <li>
                            <div class="span2">
                              <span class="red">*</span> First Name:
                            </div>
                            <label>
                              <input type="text" name="first" placeholder="First Name.." value="Eka Chandra"/>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> Last Name:
                            </div>
                            <label>
                              <input type="text" name="last" placeholder="Last Name.." value="Setiawan"/>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> Address :
                            </div>
                            <label>
                                <input type="text" name="address" placeholder="Address.." value="Bekasi Timur"/>
                            </label>
                          </li>
                          <li>
                            <div class="span2"> Address (Line 2) :
                            </div>
                            <label>
                                <input type="text" name="address2" placeholder="Address.."/>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> Zip / Postal Code :
                            </div>
                            <label>
                                <input type="text" name="zipcode" placeholder="Zip / Postal Code.." value="17115"/>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> City :
                            </div>
                            <label>
                                <input type="text" name="city" placeholder="City.." value="Bekasi"/>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> Country  :
                            </div>
                            <label>
                                <select name="id_country" id="id_country"><option selected="selected" value="111">Indonesia</option></select>
                            </label>
                          </li>
                          <li>
                            <div class="span2">
                              <span class="red">*</span> State :
                            </div>
                            <label>
                               <select id="id_state" name="id_state">
		                             <option value="" selected="selected">-</option>
			                         <option value="233">Aceh</option><option value="234">Bali</option><option value="235">Bangka</option><option value="236">Banten</option><option value="237">Bengkulu</option><option value="238">Central Java</option><option value="239">Central Kalimantan</option><option value="240">Central Sulawesi</option><option value="241">Coat of arms of East Java</option><option value="242">East kalimantan</option><option value="243">East Nusa Tenggara</option><option value="245">Jakarta</option><option value="246">Jambi</option><option value="244">Lambang propinsi</option><option value="262">Lambang Provinsi Papua Barat</option><option value="254">Lambang Riau</option><option value="247">Lampung</option><option value="248">Maluku</option><option value="249">North Maluku</option><option value="250">North Sulawesi</option><option value="251">North Sumatra</option><option value="252">Papua</option><option value="253">Riau</option><option value="256">South Kalimantan</option><option value="257">South Sulawesi</option><option value="258">South Sumatra</option><option value="255">Southeast Sulawesi</option><option value="259">West Java</option><option value="260">West Kalimantan</option><option value="261">West Nusa Tenggara</option><option value="263">West Sulawesi</option><option value="264">West Sumatra</option><option value="265">Yogyakarta</option></select>
                            </label>
                          </li>
                          <li>
                            <div class="span2"> Additional information  :
                            </div>
                            <label>
                               <textarea name="aditioninformation" style="height: 9.8em;"></textarea>
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
                <h6>Shipping method</h6>
                <div class="row">
                  <div class="span9 content-wrapper">
                    Content
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