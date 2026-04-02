let video = document.getElementById("video")
let bar = document.getElementById("bar")

if(video){

video.ontimeupdate = function(){

let percent = (video.currentTime / video.duration) * 100

bar.style.width = percent + "%"

}

}
