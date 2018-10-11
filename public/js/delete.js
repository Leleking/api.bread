
  $(document).ready(function(){
    $('#loader').hide();
    $(document).delegate('#deleteItem','click',function(){
      var id  = $(this).attr('itemId');
      document.item.item_id.value = id;
     
    })
    $('#submit').click(function(e){
      e.preventDefault();
      var id = document.item.item_id.value
      $("[itemId=" +id+ "]").hide(); 
     ajaxPostFunction('/admin/product/delete');
     $("[data-dismiss=modal]").click();
  })
  })
