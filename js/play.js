var track=track_val.track
var bgSound = new Audio(track);
bgSound.play(); 
bgSound.onended=function(){bgSound.play()}


