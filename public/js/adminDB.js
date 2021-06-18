$(document).ready(function(){
  $(".cart:eq(0)").css("display","flex");
  $("#p1").on("click",function(){
      $(".cart:eq(0)").slideDown(1500).css("display","flex");
      $(".cart:eq(0)").siblings().slideUp(1500);

  });
  $("#p2").on("click",function(){
      $(".cart:eq(1)").slideDown(1500);
      $(".cart:eq(1)").siblings().slideUp(1500);

  });
  $("#p3").on("click",function(){
      $(".cart:eq(2)").slideDown(1500);
      $(".cart:eq(2)").siblings().slideUp(1500);

  });

   
  // $("#p4").on("click",function(){
  //     $(".cart:eq(3)").slideDown(1500);
  //     $(".cart:eq(3)").siblings().slideUp(1500);

  // });
  // $("#p5").on("click",function(){
  //     $(".cart:eq(4)").slideDown(1500);
  //     $(".cart:eq(4)").siblings().slideUp(1500);

  // });
 





  $(".bod").css({"width":$(document).width(),
                 "height":$(document).height()});


  $(".cart").css("height",$(document).height());

  $(window).on("resaize",function(){
      $(".bod").css({"width":$(document).width(),
                     "height":$(document).height()});

      $(".cart").css("height",$(document).height());

  });






  /*JS FOR tabel in admin page*/
  $(".table1 .btn").click(function(){
    var inputValue = $(this).find("input").val();
    if(inputValue != 'all'){
      var target = $('.table-one tr[data-status="' + inputValue + '"]');
      $(".table-one tbody tr").not(target).hide();
      target.fadeIn();
    } else {
      $(".table-one tbody tr").fadeIn();
    }
  });
  /////////////////////////////////// 
  /*JS FOR tabel2 in admin page*/
  $(".table2 .btn").click(function(){
    var inputValue = $(this).find("input").val();
    if(inputValue != 'all'){
      var target = $('.table-tow tr[data-status="' + inputValue + '"]');
      $(".table-tow tbody tr").not(target).hide();
      target.fadeIn();
    } else {
      $(".table-tow tbody tr").fadeIn();
    }
  });
  ///////////////////////////////////
  /*JS FOR tabel3 in admin page*/
  // $(".table3 .btn").click(function(){
  //   var inputValue = $(this).find("input").val();
  //   if(inputValue != 'all'){
  //     var target = $('.table-three tr[data-status="' + inputValue + '"]');
  //     $(".table-three tbody tr").not(target).hide();
  //     target.fadeIn();
  //   } else {
  //     $(".table-three tbody tr").fadeIn();
  //   }
  // });
  ///////////////////////////////////

$('[data-toggle="tooltip"]').tooltip();
var actions = $("table td:last-child").html();
// Append table with add row form on add new button click
  $(".add-new").click(function(){
  $(this).attr("disabled", "disabled");
  var index = $("table tbody tr:last-child").index();
      var row = '<tr>' +
      '<td class="no img"><input class="form-control" type="text" name="image" placeholder="image">'+'</td>'
        '<td><input class="form-control" type="text" name="name" placeholder="name"></td>'+
        '<td><input class="form-control" type="text" name="states" placeholder="states"></td>'+
        '<td><input class="form-control" type="text" name="price" placeholder="Price"></td>'+
        '<td><input class="form-control" type="text" name="description" placeholder="description"></td>'+
        '<td><input class="form-control" type="text" name="brand" placeholder="brand"></td>'+
        '<td><input class="form-control" type="text" name="category" placeholder="categor"></td>'+
        '<td  class="no d-flex flex-row justify-content-center">'+ 
    '<td  class="d-flex flex-row justify-content-center no">' + actions + '</td>' +
      '</tr>';
    $(".table-one").append(row);		
  $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
      $('[data-toggle="tooltip"]').tooltip();
  });

  
// Add row on add button click
$(document).on("click", ".add", function(){
  var empty = false;
  var input = $(this).parents("tr").find('input[type="text"]');
      input.each(function(){
    if(!$(this).val()){
      $(this).addClass("error");
      empty = true;
    } else{
              $(this).removeClass("error");
          }
  });
  $(this).parents("tr").find(".error").first().focus();
  if(!empty){
    input.each(function(){
      $(this).parent("td").html($(this).val());
    });			
    $(this).parents("tr").find(".add, .edit").toggle();
    $(".add-new").removeAttr("disabled");
  }		
  });
// Edit row on edit button click
$(document).on("click", ".edit", function(){	
  $(this).parents("tr").find(".img").each(function(){
    $(this).html('<input type="file" name="image" class="form-control" id="customFile" value="' + $(this).text() + '">');
  });		
  /////////////	//////////////////////////////////
      $(this).parents("tr").find("td:not(.no)").each(function(){
    $(this).html('<input type="text" name="name" class="form-control" value="' + $(this).text() + '">');
  });		
  $(this).parents("tr").find(".add, .edit").toggle();
  $(".add-new").attr("disabled", "disabled");
  });
// Delete row on delete button click
$(document).on("click", ".delete", function(){
      $(this).parents("tr").remove();
  $(".add-new").removeAttr("disabled");
  });
////////////////////////////////////////////////////////
})
function myFunction(id){
 var add=document.getElementById("add").innerHTML ;
  window.open("https://www.google.com/maps/search/"+add, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=900,height=900");
}
function CopyFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}