function cinema(){

document.querySelector(".video-area").classList.toggle("cinema")

}

let url = new URLSearchParams(window.location.search).get("url")

if(url){

let history = JSON.parse(localStorage.getItem("video_history") || "[]")

history.push(url)

localStorage.setItem("video_history",JSON.stringify(history))

}
