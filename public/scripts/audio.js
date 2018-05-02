function playAudio( audio ){
    $(audio)[0].play();
}

function pauseAudio( audio ){
    $(audio).trigger('pause');
}
