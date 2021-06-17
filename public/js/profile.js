$(document).ready(function(){


    let input_names = ['name','phone', 'email', 'password'];
    let input_type = ['text','text', 'email', 'password'];
    $(".navbar-brand").click(function(){
    $(".navbar-toggler").addClass("collapsed");
    $(".navbar-toggler").attr("aria-expanded","false");
    $(".navbar-collapse").removeClass("show");
    });
      $("#btn").click(function(){
        $("#name").toggle();
      
      });


      $(document).on("click", ".edit", function(){
        $(this).parents("div, .name").find(".input1").each(function(el){
        $(this).html('<input name="' + input_names[el] + '" type="'+input_type[el]+'" class="form-control" value="' + $(this).text() + '">');
                });
               
            });


    $(document).on("click", ".save", function(){
        if($(this).parents("div").find(".form-control")){
        $(this).parents("div ,.name").find(".form-control").each(function(el){
            $('.input1')[el].append($(this).val())
        $(this).hide();
                });
                $( ".par" ).text($('.name').text())
           
            }
           

            });

            
         
            input.each(function(){
                            $(this).parent(".input").html($(this).val());
                            var parg = document.getElementsByClassName('par')[0];
                            parg.append($(this).val());
                        });
    
                    });
                
                
                
                
                    var readURL = function(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                  
                            reader.onload = function (e) {
                                $('.profile-pic').attr('src', e.target.result);
                                console.log(e.target.result);
                            }
                    
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    
                  
                    $(".file-upload").on('change', function(){
                        readURL(this);
                    });
                    
                    $(".upload-button").on('click', function() {
                       $(".file-upload").click();
                    });

                    var inputimage =  document.querySelectorAll('input[type="file"]')[0];
                    // $(".file-upload").click(function(){
                        var hidden = inputimage.value;

                        //var inputHidden = document.getElementsByClassName('file-upload')[0].innerHTML =inputimage ;
                        console.log(hidden);
                     // });
                     $(".f").click(function(){
                        $(".soshal").toggleClass("show");
                      });
            