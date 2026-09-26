let timeLeft = 10 * 60;

let timer = setInterval(function () {

    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft % 60;

    if (seconds < 10) {
        seconds = "0" + seconds;
    }

    document.getElementById("time").innerHTML =
        minutes + ":" + seconds;

    timeLeft--;

    if (timeLeft < 0) {

        clearInterval(timer);

        alert("Time is over! Your exam will be submitted.");

        document.getElementById("examForm").submit();
    }

}, 1000);