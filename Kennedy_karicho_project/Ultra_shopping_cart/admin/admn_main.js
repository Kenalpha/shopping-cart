$(document).ready(function (e){
  cat();
  brand();

  function cat(){
  	$.ajax({
  		url     : "admn_action.php",
  		method  : "POST",
  		data    :{categoryy:1},
  		success : function(data){
  			$("#get_categoryy").html(data);
  		}
  	})
  }


  function brand(){
    $.ajax({
      url     : "admn_action.php",
      method  : "POST",
      data    :{brandd:1},
      success : function(data){
        $("#product_brdd").html(data);
      }
    })
   }

   $("#admn_data").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
         url: "admn_action.php",
         type: "POST",
         data:  new FormData(this),
         contentType: false,
         cache: false,
         processData:false,
         success: function(data)
            {
            // alert(data);
            $(".e_message").html(data);
            },
         error: function()
            {
            }           
     });
  });

  $("#add_products").on('click',(function(e) {
    e.preventDefault();
    $.ajax({
         url: "admn_action.php",
         type: "POST",
         data:  {get_addContent: 1},
         contentType: false,
         cache: false,
         processData:false,
         success: function(data)
            {
            alert(data);
            // $(".e_message").html(data);
            },
         error: function()
            {
            }           
     });
  }); 

})