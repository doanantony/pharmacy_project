
$(".cd-error-message").hide();
var images = [];

$("#basic_submit").on('click',function(){
  $(".cd-error-message").hide();
  var basic_form = $("#basic_form").serializeArray();
  console.log(basic_form);
  var error = 0;
  $.each( basic_form, function( key, item ) {
    console.log(item);
    if(item.value === ""){
      error = 1;
      $("#"+item.name+"_error").show();
    } else {
      $("#data_"+item.name).html(item.value);
    }
  });
  if(error==0){
    $("#basic_form_data").val(JSON.stringify(basic_form));
    $("#basic").hide();
    $("#media").show();
  }
})

$("#logo").on('change',function(){
  var file_data = $("#logo").prop('files')[0];
  var form_data = new FormData();
  form_data.append('file',file_data);
  form_data.append('type','logo');
  image_upload(form_data,'logo');
})

$("#images").on('change',function(){
  var file_data = $("#images").prop('files');
  var form_data = new FormData();
  var count = file_data.length;
  for(var i=0;i<count;i++){
    form_data.append('file_'+i,file_data[i]);
  }
  form_data.append('counts',count);
  form_data.append('type','gallery');
  image_upload(form_data,'gallery');
})

function image_upload(form_data,type){
  console.log(form_data);
  $.ajax({
    url: base_url+"register/image_upload",
    dataType: 'text',
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'post',
    success: function(response){
      response = JSON.parse(response);
      if(response.status == 'success'){
        if(type == 'logo'){
          var string = '<img src="'+base_url+response.data+'" width="100" height="100" />';
          $(".logo_output").html(string);
          $("#data_logo").val(response.data);
        } else {
          images = images.concat(response.ids);
          response.data.forEach(function(item){
            var string = '<img src="'+base_url+item+'" width="100" height="100" />';
            $(".images_output").append(string);
          })
          console.log(images);
          $("#data_image").val(images.join());
          
        }
      }
      console.log(response)
    }
  })
}

$("#media_submit").on('click',function(){
  $(".cd-error-message").hide();
  var status = 0
  var logo = $("#data_logo").val();
  var images = $("#data_image").val();
  if(logo == ""){
    $("#logo_error").show();
    status = 1;
  }

  if(images == ""){
    $("#images_error").show();
    status = 1;
  }

  if(status==0){
    $("#media").hide();
    $("#contact").show();
  }
  
})


$("#contact_submit").on('click',function(){
  $(".cd-error-message").hide();
  var contact_form = $("#contact_form").serializeArray();
  console.log(basic_form);
  var error = 0;
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  $.each( contact_form, function( key, item ) {
    console.log(item);
    if(item.value === ""){
      error = 1;
      $("#"+item.name+"_error").show();
    } else if(item.name=='email_id'){
      if (!filter.test(item.value)) {
        error = 1;
        $("#"+item.name+"_error").show();
      } else {
        $("#data_"+item.name).html(item.value);
      }
    } else {
      $("#data_"+item.name).html(item.value);
    }   
  });
  if(error==0){
        $("#contact_form_data").val(JSON.stringify(contact_form));
        $("#contact").hide();
        $("#confirm").show();
    }
})

$("#basic_prev").on('click',function(){
  $("#basic").show();
  $("#media").hide();
})

$("#media_prev").on('click',function(){
  $("#media").show();
  $("#contact").hide();
})

$("#contact_prev").on('click',function(){
  $("#contact").show();
  $("#confirm").hide();
})



      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('location')),
            {types: ['geocode']});

        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        document.getElementById('lat').value = place.geometry.location.lat();
        document.getElementById('lng').value = place.geometry.location.lng();

        //console.log();
        //console.log(place.geometry.location.lng);

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        /*for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }*/
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            console.log(position);
            
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }

