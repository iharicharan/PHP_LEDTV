<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='css/style.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
<script>
    var divs = ["iframe1", "iframe2", "iframe3", "iframe4","iframe5", "iframe6"];
var visibleDivId = null;
function toggleVisibility(divId) {
  if(visibleDivId === divId) {
    //visibleDivId = null;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for(i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if(visibleDivId === divId) {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
}
function Visibility(){
    let x=document.getElementById('iframe');
    x.style.display='block';  
    x.animate=([{transform:'scale(0.1)'},{transform:'scale(0.9)'},{opacity:0.1}],{ duration:1000});

}
const Nonvisibility=()=>{
    let x=document.getElementById('iframe');
    x.style.display='none';
}
</script>

<section>

<div class='section'>
<div class='tv-box'>
    <div id="iframe" style='display:none'>
  <iframe id="iframe1" src='https://www.youtube.com/embed/X7SiuQxhAjg?autoplay=1&mute=1'>
</iframe>
  <iframe id="iframe2" src='https://www.youtube.com/embed/REtqlkg_jWo?autoplay=1&mute=1' style='display:none;'>
</iframe>
  <iframe id="iframe3" src='https://www.youtube.com/embed/KZtaY8yJhbE?autoplay=1&mute=1' style='display:none;'>
</iframe>
  <iframe id="iframe4" src='https://www.youtube.com/embed/weCG_yODtvM?autoplay=1&mute=1' style='display:none;'>
</iframe>
  <iframe id="iframe5" src='https://www.youtube.com/embed/tmIAnoEy1HM?autoplay=1&mute=1' style='display:none;'>
</iframe>
  <iframe id="iframe6" src='https://www.youtube.com/embed/HelivOF6vI8?autoplay=1&mute=1' style='display:none;'>
</iframe>
  </div>
</div>
<div class='stand-one'></div>
<div class='stand-two'></div>
</div>
<div class='remote'>
  <button onclick="Visibility();">On</button>
  <button  onclick="Nonvisibility();">Off</button>
  <button onclick="toggleVisibility('iframe1');">1</button>
  <button onclick="toggleVisibility('iframe2');">2</button>
  <button onclick="toggleVisibility('iframe3');">3</button>
  <button onclick="toggleVisibility('iframe4');">4</button>
   <button onclick="toggleVisibility('iframe5');">5</button>
  <button onclick="toggleVisibility('iframe6');">6</button>
</div></section>

</body>
</html>