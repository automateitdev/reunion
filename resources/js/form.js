$(document).ready(function(){
    $(document).on('change', '.cat_id', function(){
      var cat_id=$(this).val();
      console.log(cat_id);
      var div=$(this).parent().parent().parent();
            var op=" ";

      $.ajax({
        type:'get',
        url: '/registerCategory',
        data:{'id':cat_id},
        success: function(data){

            console.log("d: "+data);
          op+= '<input type="text" class="form-control" value="'+data.price+'" name="pay" readonly required>'
          

          div.find('.pay').html(" ");
          div.find('.pay').append(op);

        },

      });

    });
});

$(document).ready(function(){
  $(".kjsyu").hover(
    function(){
    $(".able").addClass("show");
    },
    function(){
      $(".able").removeClass("show");
    }
  );
  $(".able").hover(function(){
    $(".able").addClass("show");
  });

  $(".bhjuy").hover(
    function(){
    $(".abler").addClass("show");
    },
    function(){
      $(".abler").removeClass("show");
    }
  );
  $(".abler").hover(function(){
    $(".abler").addClass("show");
  });
});

//reg
$(function(){
  $("#mySelectBox").change(function(){
      if($(this).val() =="1")
      {
          $("#register_table").css({"display":"block"});
      }
      else
      {
          $("#register_table").css({"display":"none"});
      }
  });
});