<div class="center_div"><h3>Pharmacy Registration</h3></div>
<div class="search-result-main" id="basic">
  <div class="container">
    <div class="contact-us-details">
       <div class="row">
          <div class="col-md-5">
             <div class="message" style="margin-bottom:10px;">
             </div>
             <div class="contact-left">
                <p style="text-align: center;">PLEASE FILL THE BASIC INFORMATION .</p>
                <form method="post" id="basic_form" name="basic_form" class="cd-form validate" style="padding:0;">
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Name :<br>
                         <input type="text" name="name" class="required padding-left20 has-border bms-cntct-input" id="name">
                         <span class="cd-error-message" id="name_error">Enter Shop Name!</span>
                      </p>
                      <p></p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Location :<br>
                         <input type="text" name="location" class="bms-cntct-input required padding-left20 has-border" id="location" onFocus="geolocate()">
                         <input type="hidden" name="lat" id="lat" value="0">
                         <input type="hidden" name="lng" id="lng" value="0">
                         <span class="cd-error-message" id="location_error">Enter The Location</span>
                      </p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Address :<br>
                         <textarea rows="4" name="address" class="bms-cntct-input required padding-left20 padding-top10 has-error" id="address" style="height: 100px !important;"></textarea>
                         <span class="cd-error-message" id="address_error">Enter The Address</span>
                      </p>
                      <p></p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Working Time :<br>
                         <input type="text" name="working_time" id="working_time" class="bms-cntct-input required padding-left20 has-border">
                         <span class="cd-error-message" id="working_time_error">Enter The Working Time</span>
                      </p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Delivery :<br>
                         <input type="radio" name="delivery" value="1" checked="checked"> Yes
                         <input type="radio" name="delivery" value="0"> No
                      </p>
                      <p></p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20 align-right">
                      <button type="button" class="submt-btn" id="basic_submit">Next</button>
                   </div>
                </form>
             </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5 padding0">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
             <div class="contact-right">
                <img src="<?php echo base_url('assets/img/pharmacy_image.jpg'); ?>" style="max-height: 350px">
             </div>
          </div>
       </div>
    </div>
  </div>
</div>


<div class="search-result-main" id="media" style="display: none">
  <div class="container">
    <div class="contact-us-details">
       <div class="row">
          <div class="col-md-5 padding0">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
             <div class="contact-right">
                <img src="<?php echo base_url('assets/img/pharmacy_image.jpg'); ?>" style="max-height: 350px">
             </div>
          </div>
        <div class="col-md-2"></div>
          <div class="col-md-5">
             <div class="message" style="margin-bottom:10px;">
             </div>
             <div class="contact-left">
                <p style="text-align: center;">PLEASE FILL THE GALLERY INFORMATION .</p>
                <form method="post" id="media_form" name="media_form" class="cd-form validate" style="padding:0;">
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Logo :<br>
                         <input type="file" name="logo" id="logo" accept=".gif,.jpg,.jpeg,.png">
                         <span class="cd-error-message" id="logo_error">Choose Logo</span>
                      </p>
                      <p class="logo_output"></p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Images :<br>
                         <input type="file" name="images" id="images" multiple="" accept=".gif,.jpg,.jpeg,.png">
                         <span class="cd-error-message" id="images_error">Choose atleast one image</span>
                      </p>
                      <p class="images_output"></p>
                      <p></p>
                   </div>
                   
                   <div class="row padding-left20 padding-right20 align-right">
                      <button type="button" class="submt-btn" id="basic_prev">Back</button>
                      <button type="button" class="submt-btn" id="media_submit">Next</button>
                   </div>
                </form>
             </div>
          </div>
          
       </div>
    </div>
  </div>
</div>


<div class="search-result-main" id="contact" style="display: none">
  <div class="container">
    <div class="contact-us-details">
       <div class="row">
          <div class="col-md-5">
             <div class="message" style="margin-bottom:10px;">
             </div>
             <div class="contact-left">
                <p style="text-align: center;">PLEASE FILL THE CONTACT INFORMATION .</p>
                <form method="post" id="contact_form" name="contact_form" class="cd-form validate" style="padding:0;">
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Phone No:<br>
                         <input type="text" name="phone_no" class="required padding-left20 has-border bms-cntct-input" id="phone_no" pattern="[789][0-9]{9}">
                         <span class="cd-error-message" id="phone_no_error">Enter Phone Number!</span>
                      </p>
                      <p></p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Email Id :<br>
                         <input type="email" name="email_id" class="bms-cntct-input required padding-left20 has-border" id="email_id">
                         <span class="cd-error-message" id="email_id_error">Invalid Email ID</span>
                      </p>
                      <p></p>
                   </div>
                   <div class="row padding-left20 padding-right20 align-right">
                    <button type="button" class="submt-btn" id="media_prev">Back</button>
                      <button type="button" class="submt-btn" id="contact_submit">Next</button>
                   </div>
                </form>
             </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5 padding0">
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
             <div class="contact-right">
                <img src="<?php echo base_url('assets/img/pharmacy_image.jpg'); ?>" style="max-height: 350px">
             </div>
          </div>
       </div>
    </div>
  </div>
</div>


<div class="search-result-main" id="confirm" style="display: none">
  <div class="container">
    <div class="contact-us-details">
       <div class="row">
             <p style="text-align: center;">PLEASE CONFIRM THE INFORMATION .</p>
          <div class="col-md-5">
             <div class="contact-left">
                
               
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Name: <span id="data_name"></span>
                      </p>
                      <p class="fieldset">
                        Location: <span id="data_location"></span>
                      </p>
                      <p class="fieldset">
                        Address: <span id="data_address"></span>
                      </p>
                      <p class="fieldset">
                        Working Time: <span id="data_working_time"></span>
                      </p>
                      <p class="fieldset">
                        Delivery: <span id="data_delivery"></span>
                      </p>
                   </div>
                   <hr/>
                   <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Logo: <p class="logo_output"></p>
                      </p>
                      <p>Gallery</p>
                      <p class="images_output"></p>
                   </div>
             </div>
          </div>
          <div class="col-md-2"></div>
          <div class="col-md-5 padding0">
           <div class="contact-right">
             <div class="row padding-left20 padding-right20">
                      <p class="fieldset">
                         Contact No: <span id="data_phone_no"></span>
                      </p>
                      <p class="fieldset">
                        Email ID: <span id="data_email_id"></span>
                      </p>
              </div>
           </div>
          </div>
         
       </div>
        <div class="row" style="text-align: center;">
           <form method="post" id="confirm_form" name="confirm_form" class="cd-form validate" style="padding:0;" action="<?php echo base_url('register/pharm_reg'); ?>">
                  <input type="hidden" name="basic_form_data" id="basic_form_data">
                  <input type="hidden" name="data_logo" id="data_logo">
                  <input type="hidden" name="data_image" id="data_image">
                  <input type="hidden" name="contact_form_data" id="contact_form_data">
          <button type="button" class="submt-btn" id="contact_prev">Back</button>
                      <button type="submit" class="submt-btn" id="contact_submit">Confirm</button>
                    </form>
                   </div>
    </div>
  </div>
</div>

