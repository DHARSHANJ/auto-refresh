<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Refresh with Time Limit</title>
</head>
<body>
<h1 id="secondsDisplay">10</h1>
<script>

const timeLimitInSeconds = 10;
function updateSecondsDisplay(seconds) {
    document.getElementById('secondsDisplay').innerText = seconds;
}
function autoRefresh() {
    let secondsRemaining = timeLimitInSeconds;
 const countdownInterval = setInterval(function() {
        updateSecondsDisplay(secondsRemaining);
        if (secondsRemaining <= 0) {
            clearInterval(countdownInterval);
            location.reload(true); 
    }
        secondsRemaining--;
    }, 1000); 
}
autoRefresh();

</script>
</body>
</html>

