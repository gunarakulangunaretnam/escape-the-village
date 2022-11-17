function InitialObjectsMover() {

  // Birds Playing Methods
  FlyBirdsOnSky();
  FlyAirBalloon();
  FlyAircraft();
  train();
  ObjectsMover();
  PlayerIdle();
  PlayerJump();
  PlayerRunning();

}


function ObjectsMover() {

  enymain();
  coins('images/coin/c1.png', arr3);
  BirdsLayer();

}

var movingTrue = false;
var playerState = "[IDLE]";

function PlayerMoveRight() {

  if(movingTrue == false){

    runner();
    grasstreemoving();
    maintreemoving();
    lastlayer();

    $("#stage").animate({
      marginLeft: "-20000px"
    }, 90000, 'linear');

    movingTrue = true;

  }

}



function jumper() {

  playerState = "[JUMP]";

  $("#player-idle").css("display", "none");
  $("#player-run").css("display", "none");
  $("#player-jump").css("display", "block");

  $("#box").animate({
    position: 'absolute',
    top: 'auto',
    bottom: '400px'
  }, 1300)

  $("#box").animate({
    position: 'absolute',
    top: 'auto',
    bottom: '130px',
  }, 800, 'linear', function(){

    playerState = "[IDLE]";

    $("#player-idle").css("display", "none");
    $("#player-run").css("display", "block");
    $("#player-jump").css("display", "none");

  })

}


function runner() {

  if(playerState != "[JUMP]"){

    $("#player-idle").css("display", "none");
    $("#player-jump").css("display", "none");
    $("#player-run").css("display", "block");
  
  }

}

function PlayerStop() {

  if(movingTrue == true && playerState != "[JUMP]"){
 
    $(".grasstree").stop();
    $(".maintree").stop();
    $(".seenlayer").stop();
    $("#stage").stop();

    $("#player-idle").css("display", "block");
    $("#player-jump").css("display", "none");
    $("#player-run").css("display", "none");

    movingTrue = false;

  }
}




$(window).load(function () {

  document.addEventListener('keydown', (event) => {
    var name = event.key;
    var code = event.code;

    if (name == "ArrowRight") {

      PlayerMoveRight();

    } 

  }, false);

  document.addEventListener('keyup', (event) => {
    var name = event.key;
    var code = event.code;

    if (name == "ArrowRight") {

      PlayerStop();

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
    bottom: 300 + "px",
  }, 800)

};




function train() {

  $("#train").animate({
    position: 'absolute',
    top: 'auto',
    left: -300 + "px",
    bottom: -200 + "px",

  }, 15000)

}

function FlyAirBalloon() {

  $("#AirBalloon").animate({
    position: 'absolute',
    top: 'auto',
    left: 2000 + "px",
    bottom: 300 + "px",

  }, 15000, "easeInOutQuint")

}



function FlyAircraft() {

  $("#Aircraft").animate({
    position: 'absolute',
    top: 'auto',
    left: -2000 + "px",
    bottom: -600 + "px",

  }, 25000)

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
    left: -500 + "px",
  }, 900000)
}


function endgame() {
  $("#playerContainer").css("display", "none");
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

  $(function () {
    var $elie = $("#box"), degree = 0, timer;
    rotate();
    function rotate() {

      $elie.css({ WebkitTransform: 'rotate(' + degree + 'deg)' });
      $elie.css({ '-moz-transform': 'rotate(' + degree + 'deg)' });
      timer = setTimeout(function () {
        ++degree; rotate();
      }, 5);
    }
  });

  $("#box").animate({
    position: 'absolute',
    top: 'auto',
    bottom: '50%'
  }, 1300);
  $("#box").animate({
    position: 'absolute',
    top: 'auto',
    bottom: '-50%'
  }, 1000, 'linear');

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




/*Player IDLE*/

var arr = [];

arr[0] = new Image();
arr[0].src = "images/game-player/0-idle/Idle__000.png";

arr[1] = new Image();
arr[1].src = "images/game-player/0-idle/Idle__001.png";

arr[2] = new Image();
arr[2].src = "images/game-player/0-idle/Idle__002.png";

arr[3] = new Image();
arr[3].src = "images/game-player/0-idle/Idle__003.png";

arr[4] = new Image();
arr[4].src = "images/game-player/0-idle/Idle__004.png";

arr[5] = new Image();
arr[5].src = "images/game-player/0-idle/Idle__005.png";

arr[6] = new Image();
arr[6].src = "images/game-player/0-idle/Idle__006.png";

arr[7] = new Image();
arr[7].src = "images/game-player/0-idle/Idle__007.png";

arr[8] = new Image();
arr[8].src = "images/game-player/0-idle/Idle__008.png";

arr[9] = new Image();
arr[9].src = "images/game-player/0-idle/Idle__009.png";


var i = 0;

function PlayerIdle() {
  document.getElementById("player-idle").src = arr[i].src;
  i++;
  if (i == arr.length) {
    i = 0;
  }
  setTimeout(function () {
    PlayerIdle();
  }, 60);
}


/*Player Jump*/

var arr2 = [];

arr2[0] = new Image();
arr2[0].src = "images/game-player/2-jump/Jump__000.png";

arr2[1] = new Image();
arr2[1].src = "images/game-player/2-jump/Jump__001.png";

arr2[2] = new Image();
arr2[2].src = "images/game-player/2-jump/Jump__002.png";

arr2[3] = new Image();
arr2[3].src = "images/game-player/2-jump/Jump__003.png";

arr2[4] = new Image();
arr2[4].src = "images/game-player/2-jump/Jump__004.png";

arr2[5] = new Image();
arr2[5].src = "images/game-player/2-jump/Jump__005.png";

arr2[6] = new Image();
arr2[6].src = "images/game-player/2-jump/Jump__006.png";

arr2[7] = new Image();
arr2[7].src = "images/game-player/2-jump/Jump__007.png";

arr2[8] = new Image();
arr2[8].src = "images/game-player/2-jump/Jump__008.png";

arr2[9] = new Image();
arr2[9].src = "images/game-player/2-jump/Jump__009.png";


var i2 = 0;

function PlayerJump() {

  document.getElementById("player-jump").src = arr2[i2].src;
  i2++;

  if (i2 == arr2.length) {
    i2 = 0;
  }

  setTimeout(function () {
    PlayerJump();
  }, 200);

}



/*Player Running*/

var arr3 = [];

arr3[0] = new Image();
arr3[0].src = "images/game-player/3-run/Run__000.png";

arr3[1] = new Image();
arr3[1].src = "images/game-player/3-run/Run__001.png";

arr3[2] = new Image();
arr3[2].src = "images/game-player/3-run/Run__002.png";

arr3[3] = new Image();
arr3[3].src = "images/game-player/3-run/Run__003.png";

arr3[4] = new Image();
arr3[4].src = "images/game-player/3-run/Run__004.png";

arr3[5] = new Image();
arr3[5].src = "images/game-player/3-run/Run__005.png";

arr3[6] = new Image();
arr3[6].src = "images/game-player/3-run/Run__006.png";

arr3[7] = new Image();
arr3[7].src = "images/game-player/3-run/Run__007.png";

arr3[8] = new Image();
arr3[8].src = "images/game-player/3-run/Run__008.png";

arr3[9] = new Image();
arr3[9].src = "images/game-player/3-run/Run__009.png";


var i3 = 0;

function PlayerRunning() {

  document.getElementById("player-run").src = arr3[i3].src;
  i3++;

  if (i3 == arr3.length) {
    i3 = 0;
  }

  setTimeout(function () {
    PlayerRunning();
  }, 60);

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

var arr5 = [];

arr5[0] = new Image();
arr5[0].src = "images/coin/c1.png";

arr5[1] = new Image();
arr5[1].src = "images/coin/c2.png";

arr5[2] = new Image();
arr5[2].src = "images/coin/c3.png";

arr5[3] = new Image();
arr5[3].src = "images/coin/c4.png";

arr5[4] = new Image();
arr5[4].src = "images/coin/c5.png";

arr5[5] = new Image();
arr5[5].src = "images/coin/c6.png";

var i5 = 0;

function coins() {
  $("img.runcoin").attr("src", arr5[i5].src);
  i5++;
  if (i5 == arr5.length) {
    i5 = 0;
  }
  setTimeout(function () {
    coins();
  }, 90);
}
