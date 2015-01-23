$(document).ready(function(){
     
     $('ul li a').bind('click', function(e) {  
            var url = $(this).attr('href');
            if(url=="#"){
                e.preventDefault(); 
            } 
            else{
                    $('#tabInfo').fadeOut(100,function () {
                    $('#tabInfo').load(url,function (){
                        $('#tabInfo').fadeIn(100);
                    }); 
                 });
                history.pushState("", "", url+"?id=1"); //url directing 
                $('ul li.active').removeClass('active');
                $(this).closest('li').addClass('active');
                e.preventDefault();
              
            } 
        });      
});
