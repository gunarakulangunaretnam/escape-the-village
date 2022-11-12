
$(window).load(function(){
    
    function collision($div1, $div2) {
        var x1 = $div1.offset().left;
        var y1 = $div1.offset().top;
        var h1 = $div1.outerHeight(true);
        var w1 = $div1.outerWidth(true);
        var b1 = y1 + h1;
        var r1 = x1 + w1;
        var x2 = $div2.offset().left;
        var y2 = $div2.offset().top;
        var h2 = $div2.outerHeight(true);
        var w2 = $div2.outerWidth(true);
        var b2 = y2 + h2;
        var r2 = x2 + w2;
    
    if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2){
        return false ;

    }else{

        endgame();
        return true;
    }   
    
}
    
    
window.setInterval(function() {

    $('.result').text(collision($('#croco1'), $('#div2')));
    $('.result').text(collision($('#croco2'), $('#div2')));
    $('.result').text(collision($('#croco3'), $('#div2'))); 
    $('.result').text(collision($('#enm1'), $('#div2')));
    $('.result').text(collision($('#enm13'), $('#div2')));  
    $('.result').text(collision($('#enm14'), $('#div2')));  
    
    $('.result').text(collision($('#enm2'), $('#div2')));  
    $('.result').text(collision($('#enm3'), $('#div2')));  
    $('.result').text(collision($('#enm4'), $('#div2')));  
    $('.result').text(collision($('#enm5'), $('#div2')));  
    $('.result').text(collision($('#enm6'), $('#div2')));  
    $('.result').text(collision($('#enm7'), $('#div2')));  
    $('.result').text(collision($('#enm8'), $('#div2')));  
    $('.result').text(collision($('#enm10'), $('#div2')));  
    $('.result').text(collision($('#enm11'), $('#div2')));  
    $('.result').text(collision($('#enm12'), $('#div2')));  

}, 200); }); 
    
    
$(window).load(function(){
    
    function getpointscoin($div1, $div2, coin1) {
            var ci = coin1;
            var x1 = $div1.offset().left;
            var y1 = $div1.offset().top;
            var h1 = $div1.outerHeight(true);
            var w1 = $div1.outerWidth(true);
            var b1 = y1 + h1;
            var r1 = x1 + w1;
            var x2 = $div2.offset().left;
            var y2 = $div2.offset().top;
            var h2 = $div2.outerHeight(true);
            var w2 = $div2.outerWidth(true);
            var b2 = y2 + h2;
            var r2 = x2 + w2; 
        if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2){

            return false ;

        } else{
            
            addpoint(ci);
            return true;

        }
        
    }
    
window.setInterval(function() {
    $('.result').text(getpointscoin($('#coin1'), $('#div2'),'#coin1')); 
    $('.result').text(getpointscoin($('#coin2'), $('#div2'),'#coin2')); 
    $('.result').text(getpointscoin($('#coin3'), $('#div2'),'#coin3')); 
    $('.result').text(getpointscoin($('#coin4'), $('#div2'),'#coin4')); 
    $('.result').text(getpointscoin($('#coin5'), $('#div2'),'#coin5')); 
    $('.result').text(getpointscoin($('#coin6'), $('#div2'),'#coin6')); 
    $('.result').text(getpointscoin($('#coin7'), $('#div2'),'#coin7')); 
    $('.result').text(getpointscoin($('#coin8'), $('#div2'),'#coin8')); 
    $('.result').text(getpointscoin($('#coin9'), $('#div2'),'#coin9')); 
}, 200); }); 

    