$(window).on('load', function(){

    $('form').on('submit', function(){

        return false; //Disabled Form Submission

    });


    $('body').on('keyup', function(e){
  
        if(e.key== " "){
            
            jumper();

        }
       
    });

    

    $('#level-play-btn').on('mouseenter', this, function() {

        this.src = "images/ui-assets/play-btn-2.png";

     }).on('mouseleave', this , function() {

        this.src = "images/ui-assets/play-btn-1.png";
     
    });


    $( "#level-play-btn" ).on( "click", function() {
        InitialObjectsMover();
        $("#level-1-cover-box").hide();
    });

});



