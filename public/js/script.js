$(document).ready(function(){
	
    $("#btn-ropa").click(function () {	
        
        $('.ropa').show(1000);
        $('.tablas').hide(1000);
        $('.tenis').hide(1000);
        $('.accesorios').hide(1000);
        });


     $("#btn-tenis").click(function () {	
        $('.tenis').show(1000);
        $('.tablas').hide(1000);
        $('.ropa').hide(1000);
        $('.accesorios').hide(1000);
        });

          
            
   $("#btn-tablas").click(function () {	
    $('.tablas').show(1000);
    $('.tenis').hide(1000);
    $('.ropa').hide(1000);
    $('.accesorios').hide(1000);
});
            $("#btn-accesorios").click(function () {	
             
                $('.tablas').hide(1000);
                $('.tenis').hide(1000);
                $('.ropa').hide(1000);
                $('.accesorios').show(1000);
    
        
                  });

                  $("#btn-todo").click(function () {	
                    $('.todo').show(1000);
                    $('.tablas').show(1000);
                    $('.tenis').show(1000);
                    $('.ropa').show(1000);
                    $('.armadas').show(1000);
             
                       });
    
});
