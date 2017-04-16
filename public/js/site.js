// $("#loading").hide();$(window).on('load', function(){ ...});
// $(window).on('load',function() {
//   $("#loading").fadeOut("slow");
// })

$('select').on('change', function() {
  var source =  this.value ;
  var _token = $('input[name="_token"]').val();

   $.ajax({
        type: "POST",
        url: "/source_id",
        data: { source: source, _token : _token },
        success:function(result){

            // jQuery('#loading').show();
           //   $("#loading").show();
            //jQuery('#loading').show(0).delay(5000).hide(0);
            $('#appenDivNews').html(result);    
            },

        error:function(){
          alert("An error occoured, please try again!")
        }
    });

})
