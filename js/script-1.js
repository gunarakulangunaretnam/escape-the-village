
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

    //Flying Birds on High
    $('.result').text(collision($('#skybirds-enm1'), $('#div2')));

    $('.result').text(collision($('#croco1'), $('#div2')));
    $('.result').text(collision($('#croco2'), $('#div2')));
    $('.result').text(collision($('#croco3'), $('#div2'))); 
    $('.result').text(collision($('#enm13'), $('#div2')));  
    $('.result').text(collision($('#enm14'), $('#div2')));  


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
    $('.result').text(getpointscoin($('#coin10'), $('#div2'),'#coin10')); 
    $('.result').text(getpointscoin($('#coin11'), $('#div2'),'#coin11')); 
    $('.result').text(getpointscoin($('#coin12'), $('#div2'),'#coin12')); 
    $('.result').text(getpointscoin($('#coin13'), $('#div2'),'#coin13')); 
    $('.result').text(getpointscoin($('#coin14'), $('#div2'),'#coin14')); 
    $('.result').text(getpointscoin($('#coin15'), $('#div2'),'#coin15')); 
    $('.result').text(getpointscoin($('#coin16'), $('#div2'),'#coin16')); 
    $('.result').text(getpointscoin($('#coin17'), $('#div2'),'#coin17')); 
    $('.result').text(getpointscoin($('#coin18'), $('#div2'),'#coin18')); 
    $('.result').text(getpointscoin($('#coin19'), $('#div2'),'#coin19')); 
    $('.result').text(getpointscoin($('#coin20'), $('#div2'),'#coin20')); 
    $('.result').text(getpointscoin($('#coin21'), $('#div2'),'#coin21')); 
    $('.result').text(getpointscoin($('#coin22'), $('#div2'),'#coin22')); 
    $('.result').text(getpointscoin($('#coin23'), $('#div2'),'#coin23')); 
    $('.result').text(getpointscoin($('#coin24'), $('#div2'),'#coin24')); 
    $('.result').text(getpointscoin($('#coin25'), $('#div2'),'#coin25')); 
    $('.result').text(getpointscoin($('#coin26'), $('#div2'),'#coin26')); 
    $('.result').text(getpointscoin($('#coin27'), $('#div2'),'#coin27')); 
    $('.result').text(getpointscoin($('#coin28'), $('#div2'),'#coin28')); 
    $('.result').text(getpointscoin($('#coin29'), $('#div2'),'#coin29'));
    $('.result').text(getpointscoin($('#coin30'), $('#div2'),'#coin30')); 
    $('.result').text(getpointscoin($('#coin31'), $('#div2'),'#coin31')); 
    $('.result').text(getpointscoin($('#coin32'), $('#div2'),'#coin32'));
}, 200); }); 

    