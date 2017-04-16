$('select').on('change', function() {
  var source =  this.value ;
  var _token = $('input[name="_token"]').val();

   $.ajax({
        type: "POST",
        url: "/source_id",
        data: { source: source, _token : _token },
        success:function(result){

          $('#appenDivNews').html(result);    
          },

        error:function(){
          alert("An error occoured, please try again!")
        }
    });

})

