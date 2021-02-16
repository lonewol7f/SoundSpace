var audio = document.getElementById('audio');
var playpause = document.getElementById('playpause');
var count =0;

function play_pause(){
    if(count == 0){
        count = 1;
        audio.play();
        playpause.innerHTML = "Pause Music&nbsp;";
    }else{
        count = 0;
        audio.pause();
        playpause.innerHTML = "Play Music &#9655;";
    }
}