

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

        dieplayer();
        return true;
    }   
 
}


function PauseTheObjectMover(){
    

    $(".MovingObjects").stop();
    

 

}


const SmileApiRequest = async () => {

    isPuzzleMode = true;
    
    const response = await fetch('https://marcconrad.com/uob/smile/api.php?out=json&base64=yes');
    const myJson = await response.json(); //extract JSON from the http response
    console.log(myJson);

    PauseTheObjectMover()

}



function LevelUp($div1, $div2) {
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

        LevelUpSoundEffect();
        return true;
    }   
}  

function DoorLogic($div1, $div2, type) {
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

        if(isPuzzleMode == false){

            SmileApiRequest();
        }
       
        return true;
    }   
} 

    
window.setInterval(function() {

    //Flying Birds on High
    //$('.result').text(collision($('#skybirds-enm1'), $('#div2')));

    $('.result').text(collision($('#croco1'), $('#div2')));
    $('.result').text(collision($('#croco2'), $('#div2'))); 
    $('.result').text(collision($('#enm13'), $('#div2')));
    
    
    LevelUp($('#flag'), $('#div2'));


     //Doors
     DoorLogic($('#door1'), $('#div2'), "door1");
     


}, 200); }); 
    
    
$(window).load(function(){
    
    function getpointscoin($div1, $div2, coin1, type) {
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

            if(type == "CoinType"){
                
                AddCoinPoint(ci);

            }else if(type == "DiamondType"){

                AddDiamondPoint(ci);
            }
            
          
            return true;

        }
        
    }
    
window.setInterval(function() {

    $('.result').text(getpointscoin($('#diamond1'), $('#div2'),'#diamond1', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond2'), $('#div2'),'#diamond2', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond3'), $('#div2'),'#diamond3', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond4'), $('#div2'),'#diamond4', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond5'), $('#div2'),'#diamond5', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond6'), $('#div2'),'#diamond6', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond7'), $('#div2'),'#diamond7', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond8'), $('#div2'),'#diamond8', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond9'), $('#div2'),'#diamond9', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond10'), $('#div2'),'#diamond10', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond11'), $('#div2'),'#diamond11', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond12'), $('#div2'),'#diamond12', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond13'), $('#div2'),'#diamond13', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond14'), $('#div2'),'#diamond14', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond15'), $('#div2'),'#diamond15', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond16'), $('#div2'),'#diamond16', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond17'), $('#div2'),'#diamond17', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond18'), $('#div2'),'#diamond18', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond19'), $('#div2'),'#diamond19', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond20'), $('#div2'),'#diamond20', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond21'), $('#div2'),'#diamond21', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond22'), $('#div2'),'#diamond22', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond23'), $('#div2'),'#diamond23', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond24'), $('#div2'),'#diamond24', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond25'), $('#div2'),'#diamond25', 'DiamondType'));
    $('.result').text(getpointscoin($('#diamond26'), $('#div2'),'#diamond26', 'DiamondType'));



    
    $('.result').text(getpointscoin($('#coin1'), $('#div2'),'#coin1', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin2'), $('#div2'),'#coin2', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin3'), $('#div2'),'#coin3', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin4'), $('#div2'),'#coin4', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin5'), $('#div2'),'#coin5', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin6'), $('#div2'),'#coin6', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin7'), $('#div2'),'#coin7', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin8'), $('#div2'),'#coin8', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin9'), $('#div2'),'#coin9', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin10'), $('#div2'),'#coin10', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin11'), $('#div2'),'#coin11', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin12'), $('#div2'),'#coin12', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin13'), $('#div2'),'#coin13', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin14'), $('#div2'),'#coin14', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin15'), $('#div2'),'#coin15', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin16'), $('#div2'),'#coin16', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin17'), $('#div2'),'#coin17', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin18'), $('#div2'),'#coin18', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin19'), $('#div2'),'#coin19', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin20'), $('#div2'),'#coin20', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin21'), $('#div2'),'#coin21', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin22'), $('#div2'),'#coin22', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin23'), $('#div2'),'#coin23', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin24'), $('#div2'),'#coin24', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin25'), $('#div2'),'#coin25', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin26'), $('#div2'),'#coin26', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin27'), $('#div2'),'#coin27', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin28'), $('#div2'),'#coin28', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin29'), $('#div2'),'#coin29', 'CoinType'));
    $('.result').text(getpointscoin($('#coin30'), $('#div2'),'#coin30', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin31'), $('#div2'),'#coin31', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin32'), $('#div2'),'#coin32', 'CoinType'));
    $('.result').text(getpointscoin($('#coin33'), $('#div2'),'#coin33', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin34'), $('#div2'),'#coin34', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin35'), $('#div2'),'#coin35', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin36'), $('#div2'),'#coin36', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin37'), $('#div2'),'#coin37', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin38'), $('#div2'),'#coin38', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin39'), $('#div2'),'#coin39', 'CoinType'));
    $('.result').text(getpointscoin($('#coin40'), $('#div2'),'#coin40', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin41'), $('#div2'),'#coin41', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin42'), $('#div2'),'#coin42', 'CoinType'));
    $('.result').text(getpointscoin($('#coin43'), $('#div2'),'#coin43', 'CoinType')); 
    $('.result').text(getpointscoin($('#coin44'), $('#div2'),'#coin44', 'CoinType'));
    $('.result').text(getpointscoin($('#coin45'), $('#div2'),'#coin45', 'CoinType')); 
   
}, 200); }); 

    