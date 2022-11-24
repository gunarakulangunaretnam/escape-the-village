isPuzzleMode = false;
var movingTrue = false;
var playerState = "[IDLE]";
var isPlayerAlive = true;
var isLevelFinished = false;

// Stage 1 Sound
var stage1Audio = new Audio("music/stage-1-background-music.mp3");
stage1Audio.volume = 0.9;
stage1Audio.loop = true;

// Puzzle Sound
var PuzzleAudio = new Audio("music/other-musics/puzzle-solving-music.mp3");
PuzzleAudio.volume = 0.3;
PuzzleAudio.loop = true;


// Game Over Sound
var GameOverSound = new Audio("music/other-musics/game-over-sound-effect.mp3");
GameOverSound.volume = 1;

// Timer Ticker Over Sound
var timerTicker = new Audio("music/other-musics/timer-tick-sound.mp3");
timerTicker.volume = 1;  
timerTicker.loop = true;





function InitialObjectsMover() {

  stage1Audio.play();

  ObjectsMover();
  PlayerIdle();
  PlayerJump();
  PlayerRunning();
  coinsAnimator();
}


function LevelUpSoundEffect(){

  if(isLevelFinished == false){
   
    isLevelFinished = true;

    var audio = new Audio("music/player-sounds/level-up.mp3");
    audio.play();
    audio.volume = 1;  
    
    audio.onended = function(){
      
      location.href = "level-1.html";

    }

  }

}

function PlayerDieSoundEffect(){

  if(isPlayerAlive == true){
   
    var audio = new Audio("music/player-sounds/player-die.mp3");
    audio.play();
    audio.volume = 1;  

  }

}

function CoinCollectingSound(){

  var soundEffects = ["1.mp3", "2.mp3", "3.mp3", "4.mp3"]

  var randomItem = soundEffects[Math.floor(Math.random()*soundEffects.length)];

  var audio = new Audio("music/coin-sound-effects/"+randomItem);
  audio.play();
  audio.volume = 1;

}


function DiamondCollectingSound(){

  var soundEffects = ["1.mp3", "2.mp3", "3.mp3"]

  var randomItem = soundEffects[Math.floor(Math.random()*soundEffects.length)];

  var audio = new Audio("music/diamond-sound-effects/"+randomItem);
  audio.play();
  audio.volume = 1;

}


function ObjectsMover() {

  FlyBirdsOnSky();
  FlyAirBalloon();
  FlyAircraft();
  train();
  
}


function PlayerMoveRight() {

  if(movingTrue == false && isPuzzleMode == false){

    runner();
    grasstreemoving();
    maintreemoving();
    lastlayer();

    $("#stage").animate({
      marginLeft: "-20000px"
    }, 50000, 'linear');

    movingTrue = true;

  }

}

function PlayerStop() {

  var previousPlayerState = playerState;

  playerState = "[IDLE]";

  if(movingTrue == true){


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

function jumper() {

  var previousPlayerState = playerState;

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
    bottom: '128px',
  }, 800, 'linear', function(){

    if(previousPlayerState == '[RUN]' && playerState == "[JUMP]" && movingTrue == false){

      $("#player-idle").css("display", "block");
      $("#player-run").css("display", "none");
      $("#player-jump").css("display", "none");

    }else if(previousPlayerState == '[IDLE]' && playerState == "[JUMP]" && movingTrue == false){

      $("#player-idle").css("display", "block");
      $("#player-run").css("display", "none");
      $("#player-jump").css("display", "none");
     
  
    }else if(previousPlayerState == '[RUN]' && playerState == "[JUMP]" && movingTrue == true){
   
      $("#player-idle").css("display", "none");
      $("#player-run").css("display", "block");
      $("#player-jump").css("display", "none");
      
    }else if(previousPlayerState == '[IDLE]' && playerState == "[RUN]" && movingTrue == true){

      $("#player-idle").css("display", "none");
      $("#player-run").css("display", "block");
      $("#player-jump").css("display", "none");

    }

   
    playerState = previousPlayerState; // Replace with previous playerstate


  })

}

function runner() {

  var previousPlayerState = playerState;

  playerState = "[RUN]";
  
  if(previousPlayerState != "[JUMP]" && playerState == "[RUN]"){

    $("#player-idle").css("display", "none");
    $("#player-jump").css("display", "none");
    $("#player-run").css("display", "block");
  
  }

}

$(window).on('load', function(){

  
  document.addEventListener('keydown', (event) => {

    var name = event.key;
    var code = event.code;

    if (name == "ArrowRight" && isPlayerAlive == true) {

      PlayerMoveRight();

    } 

  }, false);

  document.addEventListener('keyup', (event) => {
    var name = event.key;
    var code = event.code;

    if (name == "ArrowRight" &&  isPlayerAlive == true) {

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

  $(".skybirds").animate({
    position: 'absolute',
    top: 'auto',
    left: -500 + "px",
  }, 900000)

  $(".enmybox").animate({
    marginLeft: "-20000px"
  }, 300000, 'linear');

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

  $(".AirBalloon").animate({
    position: 'absolute',
    top: 'auto',
    left: 2000 + "px",
    bottom: 300 + "px",

  }, 15000, "easeInOutQuint")

}



function FlyAircraft() {

  $(".Aircraft").animate({
    position: 'absolute',
    top: 'auto',
    left: -2000 + "px",
    bottom: -600 + "px",

  }, 25000)

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


function AddCoinPoint(coinid) {

  CoinCollectingSound();
  $(coinid).css("display", "none");

  var computerScore = document.getElementById('doughnuts');
  var number = computerScore.innerHTML;
  number = 50 + number++;
  computerScore.innerHTML = number;
}

function AddDiamondPoint(coinid) {

  DiamondCollectingSound();

  $(coinid).css("display", "none");

  var computerScore = document.getElementById('doughnuts');
  var number = computerScore.innerHTML;
  number = 200 + number++;
  computerScore.innerHTML = number;
}




function dieplayer() {

  PlayerDieSoundEffect();

  isPlayerAlive = false;

  $("#player-die").css("display", "block");
  $("#player-idle").css("display", "none");
  $("#player-jump").css("display", "none");
  $("#player-run").css("display", "none");
  

  $(".grasstree").stop();
  $(".maintree").stop();
  $(".seenlayer").stop();
  $("#stage").stop();

  PlayerDying();

  movingTrue = false;

  $("#gameoverbox").slideDown("slow").trigger("focus");


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


/*Player Dying */

var arr4 = [];

arr4[0] = new Image();
arr4[0].src = "images/game-player/1-dead/Dead__000.png";

arr4[1] = new Image();
arr4[1].src = "images/game-player/1-dead/Dead__001.png";

arr4[2] = new Image();
arr4[2].src = "images/game-player/1-dead/Dead__002.png";

arr4[3] = new Image();
arr4[3].src = "images/game-player/1-dead/Dead__003.png";

arr4[4] = new Image();
arr4[4].src = "images/game-player/1-dead/Dead__004.png";

arr4[5] = new Image();
arr4[5].src = "images/game-player/1-dead/Dead__005.png";

arr4[6] = new Image();
arr4[6].src = "images/game-player/1-dead/Dead__006.png";

arr4[7] = new Image();
arr4[7].src = "images/game-player/1-dead/Dead__007.png";

arr4[8] = new Image();
arr4[8].src = "images/game-player/1-dead/Dead__008.png";

arr4[9] = new Image();
arr4[9].src = "images/game-player/1-dead/Dead__009.png";


var i4 = 0;

function PlayerDying() {


  if(i4 <= 9){  
    document.getElementById("player-die").src = arr4[i4].src;
    i4++;
  }


  setTimeout(function () {
    PlayerDying();
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

function coinsAnimator() {
  $("img.runcoin").attr("src", arr5[i5].src);
  i5++;
  if (i5 == arr5.length) {
    i5 = 0;
  }
  setTimeout(function () {
    coinsAnimator();
  }, 90);
}
