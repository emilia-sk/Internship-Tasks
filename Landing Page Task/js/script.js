$(document).ready(function() {
    
  
    $(window).scroll( function(){
    
      
        $('.col-history-right').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
           
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},200);
                    
            }
            
        }); 

        $('.col-history-left').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
          
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},200);
                    
            }
            
        }); 
    
    });
    
});