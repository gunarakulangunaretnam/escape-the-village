/*<START> CSS STYLE FOR TIMER <START>*/

function TimerFunctionForDoorOpenBox2(value){

  const FULL_DASH_ARRAY = 283;
  const WARNING_THRESHOLD = 10;
  const ALERT_THRESHOLD = 5;

  const COLOR_CODES = {
    info: {
      color: "green"
    },
    warning: {
      color: "orange",
      threshold: WARNING_THRESHOLD
    },
    alert: {
      color: "red",
      threshold: ALERT_THRESHOLD
    }
  };

  var TIME_LIMIT = 0;
  let timePassed = 0;
  let timeLeft = TIME_LIMIT;
  let timerInterval = null;
  let remainingPathColor = COLOR_CODES.info.color;



  document.getElementById("app1").innerHTML = `
  <div class="base-timer">
    <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <g class="base-timer__circle">
        <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
        <path
          id="base-timer-path-remaining1"
          stroke-dasharray="283"
          class="base-timer__path-remaining ${remainingPathColor}"
          d="
            M 50, 50
            m -45, 0
            a 45,45 0 1,0 90,0
            a 45,45 0 1,0 -90,0
          "
        ></path>
      </g>
    </svg>
    <span id="base-timer-label1" class="base-timer__label">${formatTime(
      timeLeft
    )}</span>
  </div>
  `;




  function GameOver(){
      $("#door-open-box-4").slideUp("slow") // Slide up current window
      $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
      PuzzleAudio.pause();
      stage1Audio.pause();
      timerTicker.pause();
      GameOverSound.play();
  }

  function onTimesUp() {
    
    clearInterval(timerInterval);
  }

  function startTimer(value) {
    
    TIME_LIMIT = parseInt(value);
    timerTicker.play();

    timerInterval = setInterval(() => {
      timePassed = timePassed += 1;
      timeLeft = TIME_LIMIT - timePassed;

      document.getElementById("base-timer-label1").innerHTML = formatTime(
        timeLeft
      );
      setCircleDasharray();
      setRemainingPathColor(timeLeft);

      if (timeLeft === 0) {
        onTimesUp();
        GameOver();
      }

      if(isPuzzleMode == false){ // To turn off the timer once the puzzle is solved

        onTimesUp();

      }

    }, 1000);
  }

  function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
      seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
  }

  function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;
    if (timeLeft <= alert.threshold && timeLeft > 0) {
      document
        .getElementById("base-timer-path-remaining1")
        .classList.remove(warning.color);
      document
        .getElementById("base-timer-path-remaining1")
        .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold && timeLeft > 0) {
      document
        .getElementById("base-timer-path-remaining1")
        .classList.remove(info.color);
      document
        .getElementById("base-timer-path-remaining1")
        .classList.add(warning.color);
    }
  }

  function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
  }

  function setCircleDasharray() {
    const circleDasharray = `${(
      calculateTimeFraction() * FULL_DASH_ARRAY
    ).toFixed(0)} 283`;
    document
      .getElementById("base-timer-path-remaining1")
      .setAttribute("stroke-dasharray", circleDasharray);
  }

  startTimer(value);
}


function TimerFunctionForDoorOpenBox4(value){

  const FULL_DASH_ARRAY = 283;
  const WARNING_THRESHOLD = 10;
  const ALERT_THRESHOLD = 5;

  const COLOR_CODES = {
    info: {
      color: "green"
    },
    warning: {
      color: "orange",
      threshold: WARNING_THRESHOLD
    },
    alert: {
      color: "red",
      threshold: ALERT_THRESHOLD
    }
  };

  var TIME_LIMIT = 0;
  let timePassed = 0;
  let timeLeft = TIME_LIMIT;
  let timerInterval = null;
  let remainingPathColor = COLOR_CODES.info.color;



  document.getElementById("app2").innerHTML = `
  <div class="base-timer">
    <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <g class="base-timer__circle">
        <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
        <path
          id="base-timer-path-remaining2"
          stroke-dasharray="283"
          class="base-timer__path-remaining ${remainingPathColor}"
          d="
            M 50, 50
            m -45, 0
            a 45,45 0 1,0 90,0
            a 45,45 0 1,0 -90,0
          "
        ></path>
      </g>
    </svg>
    <span id="base-timer-label2" class="base-timer__label">${formatTime(
      timeLeft
    )}</span>
  </div>
  `;




  function GameOver(){
      $("#door-open-box-4").slideUp("slow") // Slide up current window
      $("#gameoverbox").slideDown("slow").trigger("focus");   // Slide down gameover window
      PuzzleAudio.pause();
      stage1Audio.pause();
      timerTicker.pause();
      GameOverSound.play();
  }

  function onTimesUp() {
    
    clearInterval(timerInterval);
  }

  function startTimer(value) {
    
    TIME_LIMIT = parseInt(value);
    timerTicker.play();

    timerInterval = setInterval(() => {
      timePassed = timePassed += 1;
      timeLeft = TIME_LIMIT - timePassed;

      document.getElementById("base-timer-label2").innerHTML = formatTime(
        timeLeft
      );
      setCircleDasharray();
      setRemainingPathColor(timeLeft);

      if (timeLeft === 0) {
        onTimesUp();
        GameOver();
      }

      if(isPuzzleMode == false){ // To turn off the timer once the puzzle is solved

        onTimesUp();

      }

    }, 1000);
  }

  function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
      seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
  }

  function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;
    if (timeLeft <= alert.threshold && timeLeft > 0) {
      document
        .getElementById("base-timer-path-remaining2")
        .classList.remove(warning.color);
      document
        .getElementById("base-timer-path-remaining2")
        .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold && timeLeft > 0) {
      document
        .getElementById("base-timer-path-remaining2")
        .classList.remove(info.color);
      document
        .getElementById("base-timer-path-remaining2")
        .classList.add(warning.color);
    }
  }

  function calculateTimeFraction() {
    const rawTimeFraction = timeLeft / TIME_LIMIT;
    return rawTimeFraction - (1 / TIME_LIMIT) * (1 - rawTimeFraction);
  }

  function setCircleDasharray() {
    const circleDasharray = `${(
      calculateTimeFraction() * FULL_DASH_ARRAY
    ).toFixed(0)} 283`;
    document
      .getElementById("base-timer-path-remaining2")
      .setAttribute("stroke-dasharray", circleDasharray);
  }

  startTimer(value);
}
/*<END> CSS STYLE FOR TIMER <START>*/