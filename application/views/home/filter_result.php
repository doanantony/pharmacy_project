
<ul>
<?php
foreach ($data as $rs) { ?>
<li class="shop-details">
   <div class="row">
      <div class="col-md-5"> <img class="shopimage" src="<?php echo base_url($rs->logo); ?>" alt="Naturals Salon"> </div>
      <div class="col-md-7">
         <h1> <?php echo $rs->name; ?> </h1>
         <div class="search-result-sparator"></div>
         <div class="search-result-loction"> <p>Contact No: <?php echo $rs->phone_no; ?> </p>
         <p> Email ID: <?php echo $rs->email_id; ?> </p>
          Location: <?php echo $rs->location; ?> </div>
         <div class="search-result-ratingbtm">
            <div class="col-md-12">
               <p class="col-md-6 fieldset">
                  <a href="<?php echo base_url('home/details/'.$rs->id); ?>" class="viewprflbook-btn btn">VIEW DETAILS</a>
               </p>
               <p class="col-md-4 fieldset">
                  <a href="<?php echo base_url('home/map/'.$rs->lat.'/'.$rs->lng); ?>" class="viewprflbook-btn btn">VIEW MAP</a>
               </p>
            </div>
         </div>
      </div>
   </div>
</li>
<?php } ?>
</ul>