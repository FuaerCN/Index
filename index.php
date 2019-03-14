<!DOCTYPE html>
<!-- 
No loli no life.
-->
<html lang="zh-cmn-Hans">
<head>

<meta charset="utf-8">
<title>Yum - リバティ</title>

<link rel="icon" type="image/png" href="//alilin-1251250120.file.myqcloud.com/favicon.png">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="description" content="SS Cat Server - Sendya" />
<link rel="stylesheet" href="//alilin-1251250120.file.myqcloud.com/css/main.css">
<style>
:not([class*=icon]):not(i){font-family:Consolas,"Microsoft YaHei"!important}
html{font-size:16px;color:#FFF;}
a{transition:all 0.2s;text-decoration:none;color:#FFF}
a:hover{color:#8CC9F5;}
.flow a{transition:all 0.2s;text-decoration:none;color:#FFF}
.flow a:hover{color:#8CC9F5;font-size: 24px}
p{font-size:1.5rem;text-align:center}

/* p span{transition:all 0.5s;font-size:1.4rem} */
.main{transition:all 0.5s;color:#FFF;position:absolute;left:50%;top:30%;width:600px;margin-left:-300px;margin-top:-20px;text-align:center;text-shadow:0 0 10px #F00;font-size:1.4em}
.main:hover{margin-top: 0}
.console{position:fixed;right:5px;top:5px;width:50px;height:20px}
.footer{position:fixed;bottom:5px;right:5px;font-size:1.2rem}
.console {position: fixed;right: 5px;top: 5px;width: 50px;height: 20px}
#flowMessage {position: absolute;width:250px;height: 40px;text-align: center;left:50%;margin-left: -125px;bottom: 40px;margin-bottom: -20px;transition: margin-bottom .7s;text-shadow:0 0 10px #F00;}
@media screen and (max-height:300px){
.footer{display:none}
}
@media screen and (max-width:1366px){
.main{font-size:1.1em}
p,p span{font-size:1.1rem}
.footer{font-size:.9rem}
}
</style>
<script>
!function(n){"use strict";var t=function(){return document.createElement("canvas").getContext("2d")},e=function(n,e){var a=new Image,o=n.src||n;"data:"!==o.substring(0,5)&&(a.crossOrigin="Anonymous"),a.onload=function(){var n=t("2d");n.drawImage(a,0,0);var o=n.getImageData(0,0,a.width,a.height);e&&e(o.data)},a.src=o},a=function(n){return["rgb(",n,")"].join("")},o=function(n){return n.map(function(n){return a(n.name)})},r=5,i=10,c={};c.colors=function(n,t){t=t||{};var c=t.exclude||[],u=t.paletteSize||i;e(n,function(e){for(var i=n.width*n.height||e.length,m={},s="",d=[],f={dominant:{name:"",count:0},palette:Array.apply(null,new Array(u)).map(Boolean).map(function(){return{name:"0,0,0",count:0}})},l=0;i>l;){if(d[0]=e[l],d[1]=e[l+1],d[2]=e[l+2],s=d.join(","),m[s]=s in m?m[s]+1:1,-1===c.indexOf(a(s))){var g=m[s];g>f.dominant.count?(f.dominant.name=s,f.dominant.count=g):f.palette.some(function(n){return g>n.count?(n.name=s,n.count=g,!0):void 0})}l+=4*r}if(t.success){var p=o(f.palette);t.success({dominant:a(f.dominant.name),secondary:p[0],palette:p})}})},n.RGBaster=n.RGBaster||c}(window);
</script>
</head>
<body>
<div class="main">
<h1>リバティ</h1>
<p><span>This is the Yum.pw of the Server's home page</span></p>
<p class="flow"><a href="javascript:;" onClick="location.href='//dl.yum.pw'">AriaNg</a></p>
<p class="flow"><a href="javascript:;" onClick="location.href='//pan.yum.pw'">OneIndex</a></p>
<img id="rgImage" src="" style="display: none"/>
</div>
<div class="console"><a href="javascript:;" id="aconsole">OFF BGM</a></div>
<div id="flowMessage">Tips:方向键上下可以调整声音</div>
<audio src="//alilin-1251250120.file.myqcloud.com/music/fade.mp3" id="bgmusic" loop="loop" autoplay="true" style="display:none;"></audio>
<div class="footer">Powered by <a href="http://www.alilin.cn/" target="_blank">Alilin</a></div>
<script src="//alilin-1251250120.file.myqcloud.com/javascript/jQuery/jquery.min.js"></script>
<script src="//alilin-1251250120.file.myqcloud.com/javascript/jQuery/plugins/mainv.js"></script>
<script type="text/javascript">

setInterval("flowMessage()", 1500);

function flowMessage() {
var height = $("#flowMessage").css("margin-bottom");
if (height == "-20px") {
$("#flowMessage").css("margin-bottom", "0px");
} else {
$("#flowMessage").css("margin-bottom", "-20px");
}
}

var bgm = $("#bgmusic")[0];

bgm.volume = .1;



var BASEDIR = "/random.php?return=", IMGNUM = 10;

//var BASEDIR = "//alilin-1251250120.file.myqcloud.com/img/", IMGNUM = 30;

var imgs = [], rds = Math.random(), rgImg;

for (var i = 0; i < IMGNUM; i++) {
imgs.push({
src:BASEDIR + i ,
//src:BASEDIR + i + ".jpg",
fade:1e3
});
}

$("body").vegas({
delay:6e3,
shuffle:true,
transitionDuration:2e3,
slides:imgs,
walk: function (index, slideSettings) {
// console.log("Slide index " + index + " image " + slideSettings.src);
// 预留事件
}
});



$("#aconsole").click(function() {
if (!bgm.paused) {
bgm.pause();
$(this).html("ON BGM");
} else {
bgm.play();
$(this).html("OFF BGM");
}
});

$(document).keydown(function(event) {
if (event.keyCode == 40) {
if (bgm.volume > 0) bgm.volume = bgm.volume - .1;
} else if (event.keyCode == 38) {
if (bgm.volume < 1) bgm.volume = bgm.volume + .1;
}
});

//禁用右键（防止右键查看源代码） 
window.oncontextmenu=function(){return false;} 
//禁止任何键盘敲击事件（防止F12和shift+ctrl+i调起开发者工具） 
window.onkeydown = window.onkeyup = window.onkeypress = function () { 
window.event.returnValue = false; 
	return false; 
} 
//如果用户在工具栏调起开发者工具，那么判断浏览器的可视高度和可视宽度是否有改变，如有改变则关闭本页面 
var h = window.innerHeight,w=window.innerWidth; 
window.onresize = function () { 
	if (h!= window.innerHeight||w!=window.innerWidth){ 
		window.close(); 
		window.location = "about:blank"; 
	} 
} 
</script>
</body>
</html>