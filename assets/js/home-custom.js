var delivery = ''
var sort_type = 0;
var key_word = '';
var current_lat = '';
var current_lng = '';
if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(showPosition);
}

$(document).ready(function(){
	list_shops();
})

function list_shops(){
	$.ajax({
    url: base_url+"home/list_shop",
    data: "delivery="+delivery+"&sort_type="+sort_type+"&key_word="+key_word+"&current_lat="+current_lat+"&current_lng="+current_lng,
    type: 'post',
    success: function(response){
      $("#filter_result").html(response);
    }
  })
}

$("#delivery").on('change',function(){
  delivery = $(this).val();
  list_shops();
})

$("#sort_type").on('change',function(){
  sort_type = $(this).val();
  
    list_shops();
  
})

$("#keyword").on('keypress',function(){
  key_word = $(this).val();
  list_shops();
})

function showPosition(position){
  console.log(position);
  current_lat = position.coords.latitude;
  current_lng = position.coords.longitude;
  list_shops();
}

$("#reset").on('click',function(){
      delivery = ''
    sort_type = 0;
    key_word = '';
    list_shops();
})