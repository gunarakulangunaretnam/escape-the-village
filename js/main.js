function InitialObjectsMover(){
  
  // Birds Playing Methods
  FlyBirdsOnSky();
  stage1moving();
  FlyAirBalloon();
  FlyAircraft();

}

function stage1moving() {

  $("#stage").animate({
    marginLeft: "-20000px"
  }, 300000, 'linear');

  grasstreemoving();
  maintreemoving();
  lastlayer();
  enymain();
  //birdenm('images/enm_stage1/bird1.png', arre1); Muted Code 
  playerstart('images/running/frame-1.png', arr);
  coins('images/coin/c1.png', arr3);
  bomb('images/bomb/bomb1.png', arr4);

  BirdsLayer();
}

function PlayerMoveRight(){


  
}

$(window).load(function(){

  document.addEventListener('keydown', (event) => {
    var name = event.key;
    var code = event.code;
  
    if(name == "ArrowRight"){
      
      PlayerMoveRight();

    }else if(name == "ArrowLeft"){

      
    }

  }, false);
  
});


/*$(window).load(function(){
window.setInterval(function() {
            
$("#skydiv").animate({ 'zoom': 1.2}, 40000 ,'linear');
$("#skydiv").animate({ 'zoom': 0.9}, 25000 ,'linear');						
}, 500); });  */

// Fly birds on sky function
function FlyBirdsOnSky() {
  
    $(".skybirds").animate({
        position: 'absolute',
        top: 'auto',
        bottom: 300+"px",
    },800)    
    
};

function FlyAirBalloon(){

  $("#AirBalloon").animate({
    position: 'absolute',
    top: 'auto',
    left: 2000+"px",
    bottom: 300+"px",
    
  },15000, "easeInOutQuint")    

}

function FlyAircraft(){

  $("#Aircraft").animate({
    position: 'absolute',
    top: 'auto',
    left: -2000+"px",
    bottom: -600+"px",
    
  },25000)    

}




function enymain() {
  $(".enmybox").animate({
      marginLeft: "-20000px"
  }, 300000, 'linear');
}

function grasstreemoving() {
  $(".grasstree").animate({
      marginLeft: "-20000px"
  }, 400000, 'linear');
}

function maintreemoving() {
  $(".maintree").animate({
      marginLeft: "-20000px"
  }, 330000, 'linear');
}

function lastlayer() {
  $(".seenlayer").animate({
      marginLeft: "-20000px"
  }, 500000, 'linear');
}

function BirdsLayer() {
  $(".skybirds").animate({
    position: 'absolute',
    top: 'auto',
    left: -500+"px",
  },900000)
}


function jumper() {
  $("#player2").css("display", "none");
  $("#jump").css("display", "block");


  setTimeout(function() {
      $("#player2").css("display", "block");
      $("#jump").css("display", "none");

  }, 2000);


  $("#box").animate({
      position: 'absolute',
      top: 'auto',
      bottom: '300px'
  }, 1300)
  $("#box").animate({
      position: 'absolute',
      top: 'auto',
      bottom: '90px'
  }, 800, 'linear')


}



function endgame() {
  $("#player").css("display", "none");
  $("#endgamer").css("display", "block");
  dieplayer();
}



function AddCoinPoint(coinid) {

  $(coinid).css("display", "none");

  var computerScore = document.getElementById('doughnuts');
  var number = computerScore.innerHTML;
  number = 50 + number++;
  computerScore.innerHTML = number;
}

function AddDiamondPoint(coinid) {

  $(coinid).css("display", "none");

  var computerScore = document.getElementById('doughnuts');
  var number = computerScore.innerHTML;
  number = 200 + number++;
  computerScore.innerHTML = number;
}



function dieplayer() {

  $("#box").animate({
      position: 'absolute',
      top: 'auto',
      bottom: '40%'
  }, 1300);
  $("#box").animate({
      position: 'absolute',
      top: 'auto',
      bottom: '-50%'
  }, 1000, 'linear');
  $("#btn1").css("display", "none");

  $("#gaveoverbox").slideDown("slow");

  var MyDiv1 = document.getElementById('doughnuts');
  var MyDiv2 = document.getElementById('showscor');
  MyDiv2.innerHTML = MyDiv1.innerHTML;

  $("#scoreb").css("display", "none");
}




/* var doughnut = 0;
   window.setInterval(
   function () {
       doughnut = doughnut + 1;
       document.getElementById("doughnuts").innerHTML = "" + doughnut + "";

   }, 100);
 */




/*Player Running*/

var arr = [];

arr[0] = new Image();
arr[0].src = "images/running/frame-1.png";

arr[1] = new Image();
arr[1].src = "images/running/frame-2.png";

arr[2] = new Image();
arr[2].src = "images/running/frame-3.png";

arr[3] = new Image();
arr[3].src = "images/running/frame-4.png";

arr[4] = new Image();
arr[4].src = "images/running/frame-5.png";

arr[5] = new Image();
arr[5].src = "images/running/frame-6.png";

var i = 0;

function playerstart() {
  document.getElementById("player2").src = arr[i].src;
  i++;
  if (i == arr.length) {
      i = 0;
  }
  setTimeout(function() {
      playerstart();
  }, 140);
}




/*Bird Running


var arre1 = [];
arre1[0] = new Image();
arre1[0].src = "images/enm_stage1/bird1.png";

arre1[1] = new Image();
arre1[1].src = "images/enm_stage1/bird2.png";

arre1[2] = new Image();
arre1[2].src = "images/enm_stage1/bird3.png";

var ie1 = 0;

function birdenm() {
  $("img.bird").attr("src", arre1[ie1].src);
  ie1++;
  if (ie1 == arre1.length) {
      ie1 = 0;
  }
  setTimeout(function() {
      birdenm();
  }, 100);
}

*/




/*
// Fly birds on ground function
function FlyBirdsOnGround() {
  setTimeout(function(){

      $(".groundbirds").animate({
        position: 'absolute',
        top: 'auto',
        bottom: '-80px'
    }, 1200)
    $(".groundbirds").animate({
        position: 'absolute',
        top: 'auto',
        bottom: '-150px'
    }, 1200, 'linear')
    
  }, 2000);
}

*/




/*Running Coins*/

var arr3 = [];

arr3[0] = new Image();
arr3[0].src = "images/coin/c1.png";

arr3[1] = new Image();
arr3[1].src = "images/coin/c2.png";

arr3[2] = new Image();
arr3[2].src = "images/coin/c3.png";

arr3[3] = new Image();
arr3[3].src = "images/coin/c4.png";

arr3[4] = new Image();
arr3[4].src = "images/coin/c5.png";

arr3[5] = new Image();
arr3[5].src = "images/coin/c6.png";

var i3 = 0;

function coins() {
  $("img.runcoin").attr("src", arr3[i3].src);
  i3++;
  if (i3 == arr3.length) {
      i3 = 0;
  }
  setTimeout(function() {
      coins();
  }, 90);
}




/*Running bomb*/

var arr4 = [];

arr4[0] = new Image();
arr4[0].src = "images/bomb/bomb1.png";

arr4[1] = new Image();
arr4[1].src = "images/bomb/bomb1-2.png";

arr4[2] = new Image();
arr4[2].src = "images/bomb/bomb2.png";

arr4[3] = new Image();
arr4[3].src = "images/bomb/bomb3.png";


var i4 = 0;

function bomb() {
  $("img.runbomb").attr("src", arr4[i4].src);
  i4++;
  if (i4 == arr4.length) {
      i4 = 0;
  }
  setTimeout(function() {
      bomb();
  }, 90);
}