<!DOCTYPE html>
<html>
<title>SOUNDTEMPLE | Create Slide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Homemade+Apple|Oswald|Cookie|Quicksand|Amatic+SC|Dancing+Script|Satisfy|Indie+Flower|Lobster&display=swap" rel="stylesheet">

<link rel="icon" href="media/icon.jpg">

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="black">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="black">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
body{ background: rgba(0,0,0,0.9);
	//background-image: url('https://wallpaperaccess.com/full/682460.jpg');
	//background-image: url('http://wallpapercave.com/wp/lEozGAb.jpg');
	//background-image: url('https://c.wallhere.com/photos/fd/9f/music_album_covers-136147.jpg!d');
	//background-image: url('http://img04.deviantart.net/1160/i/2011/264/a/8/album_cover_collage_by_guitarman3-d4ai637.jpg');
	//background-image: url('http://tiledwallpaper.com/wallpapers/2018/3/18612237665a9ac311e48eb8.35829108.jpg');
	//background-image: url('https://www.wallpaperup.com/uploads/wallpapers/2013/06/11/101176/e94ba1ba7766a45af5cdc096213b8494-700.jpg');
	font-family: quicksand; overflow:hidden;
}


::-webkit-scrollbar {
display: none;
}

textarea {
    resize: none;
}

</style>

<script>
var _0x323b=['back','history'];(function(_0x17ffbd,_0x368d21){var _0x6d336c=function(_0x1e5d86){while(--_0x1e5d86){_0x17ffbd['push'](_0x17ffbd['shift']());}};_0x6d336c(++_0x368d21);}(_0x323b,0x1cd));var _0x1691=function(_0x5ef3d7,_0x34cd48){_0x5ef3d7=_0x5ef3d7-0x0;var _0x52dee7=_0x323b[_0x5ef3d7];return _0x52dee7;};function goback(){window[_0x1691('0x0')][_0x1691('0x1')]();}

function getRandomRGBValue() {
    return Math.min(Math.floor(Math.random() * 255 + 1), 255);
}

function getRandomColor() {
    var r = getRandomRGBValue(),
        g = getRandomRGBValue(),
        b = getRandomRGBValue();
    return "#" + (((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1));
}

function changeThemeColor() {
    var metaThemeColor = document.querySelector("meta[name=theme-color]");
    metaThemeColor.setAttribute("content", getRandomColor());
    setTimeout(function() {
        changeThemeColor();
    }, 3000);
}

changeThemeColor();
</script>

<body>




<div style='width:100%; height:100%; text-align:center; background:;'>


											
											<div class='page' id='pg' style='position:relative; display:inline-block; width:100%; height:100%; text-align:center; background:; background-size:cover; background-position:center; background-repeat:none; overflow-y:scroll;'>
											<div style='width:100%; height:100%; padding:10%; padding-top:15%;'>
											<div class='w3-animate-top' style='padding:5%; background:rgba(255,255,255,0.95); text-align:left;'>
											<h1 style='font-family:oswald; text-align:center;'><a href='index.php' style='text-decoration:none;'>SOUNDTEMPLE</a></h1>
											<form method='' action='' autocomplete='off' style='padding:0px 0px 0px 0px;'  enctype='multipart/form-data'>
											<p><span class='txt2' style='color:black; font-size:13px;'><a target='blank' href='https://youtube.com' style='text-decoration:none;' ><b>YouTube link</b></a></span><br><input id='video' class='txt3' type='text' name='' value='' placeholder='video link' style='width:100%; padding:2%; font-size:14px; color:black; background:none; border:none; border-bottom: 2px solid black; ' required /></p>
											<!--<p><span class='txt2' style='color:black; font-size:13px;'><b>Text</b> (optional)</span><br><textarea id='text' class='txt3' name='' maxlength='200' rows='4' placeholder='Say something...' style='width:100%; padding:2%; font-size:14px; color:black; background:rgba(0,0,0,0); border:none; border-bottom: 2px solid black; ' required ></textarea></p>-->
											<!--<p><span class='txt2' style='color:black; font-size:13px;'><b>Images</b></span><br><input id='image' class='txt3' type='text' name='' value='' placeholder='image link' style='width:100%; padding:2%; font-size:14px; color:black; background:none; border:none; border-bottom: 2px solid black; ' required /></p>-->
											<p class='txt1' id='msg' style='display:none; font-size:12px; color:white; background:rgba(255,0,0,0.7); padding:3%; border-radius:5px;'>Enter video link.</p>
											<p class='txt1' style='font-size:12px;'><span class='txt2' style='color:black; font-size:13px;'><b>How to use</b></span><br>GIFs look best, but images will work too. <br>Google is shit. Visit <a target='blank' href='https://www.bing.com/images/search'>Bing Images</a> to get the address of your desired image. Select the image/GIF you want, click on the <i class='fas fa-ellipsis-h'></i> icon and select <b>view image</b>. Now copy its URL.<br><br>You can also select images from your gallery. Click on create and then press the <i class='fas fa-camera'></i> icon in the next page.<!--<br> To understand whether your link is correct or not check if it ends with a .jpg, .jpeg, .gif, .png or some other image file extension.--></p>
											<p class='txt1' style='font-size:12px;'>After you click on create, set view to fullscreen and screenrecord the image + audio (You need to use a screen recording app externally for this purpose. We don't have that feature yet.) till your desired duration. Keep it short : )</p>
											<p style='text-align:center;'><input class='txt3' onclick='create()' type='button' name='' value='Create' style='background:none; color:black; font-weight:bold; font-size:14px; border:none;' /></p>
											<p class='txt1' style='font-size:12px;'>Good Screen Recording apps:
											<br>1. <a target='blank' href='https://play.google.com/store/apps/details?id=com.hecorat.screenrecorder.free&hl=en_IN'>AZ Screen Recorder - No Root (Android)</a> (Highly Recommended - no watermark)<br><i>Tips: Hide start button while recording. Enable shake device to stop recording.</i>
											<br>2. <a target='blank' href='https://play.google.com/store/apps/details?id=screenrecorder.recorder.editor&hl=en_IN'>V Recorder (Android)</a>
											<br>3. <a target='blank' href='https://apps.apple.com/app/apple-store/id1266321056'>TechSmith Capture (iOS)</a>
											</p>
											</form>
											</div></div>
											</div>
									


</div>

<script>
var bg = ["https://wallpaperaccess.com/full/682460.jpg",
			"http://wallpapercave.com/wp/lEozGAb.jpg",
			"https://c.wallhere.com/photos/fd/9f/music_album_covers-136147.jpg!d",
			"http://img04.deviantart.net/1160/i/2011/264/a/8/album_cover_collage_by_guitarman3-d4ai637.jpg",
			"http://tiledwallpaper.com/wallpapers/2018/3/18612237665a9ac311e48eb8.35829108.jpg",
			"https://www.wallpaperup.com/uploads/wallpapers/2013/06/11/101176/e94ba1ba7766a45af5cdc096213b8494-700.jpg"];
var x = Math.floor((Math.random() * 6) + 0);
document.body.style.backgroundImage = "url('"+bg[x]+"')";
		
function youtube_parser(url){
    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
    var match = url.match(regExp);
    return (match&&match[7].length==11)? match[7] : false;
}

function create(){
	var video = youtube_parser(document.getElementById("video").value);
	//var image = document.getElementById("image").value;
	//var text = document.getElementById("text").value;
	
	if((video!='')){
		//document.getElementById("share").href = 'http://localhost/saudshare/audio.php?para={"url":"'+image+'","text":"'+text+'","ytid":"'+video+'","startsec":'+start+',"endsec":'+stop+'}';
		//document.getElementById("link").value = 'http://localhost/saudshare/audio.php?para={"url":"'+image+'","text":"'+text+'","ytid":"'+video+'","startsec":'+start+',"endsec":'+stop+'}';
		//document.getElementById("link").value = 'blah';
		
		//window.location.replace('http://localhost/saudshare/audio.php?para={"text":"'+text+'","ytid":"'+video+'"}');
		//window.location.replace('http://soundtemple.rf.gd/audio.php?para={"ytid":"'+video+'"}');
		window.location.href = 'http://localhost/saudshare/audio.php?para={"ytid":"'+video+'"}';
		//window.location.href = 'http://soundtemple.rf.gd/audio.php?para={"ytid":"'+video+'"}';
		//window.location.replace('http://localhost/saudshare/audio.php?para={"url":"'+image+'","text":"'+text+'","ytid":"'+video+'"}');
		//window.location.replace('http://localhost/saudshare/audio.php?para={"url":"https://www.bing.com/th?id=OIP.rdG4qtziDfoiYraN5FwOeAHaDt&w=300&h=150&c=7&o=5&pid=1.7","text":"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy a Latin profess","ytid":"SU6KFnGF9M8"}');
	}else{
		document.getElementById("msg").style.display = 'block';
	}
}

/*function copylink() {
  var copyText = document.getElementById("link");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}*/

var x = document.getElementsByClassName("page");
var txt1 = document.getElementsByClassName("txt1");
var txt2 = document.getElementsByClassName("txt2");
var txt3 = document.getElementsByClassName("txt3");

var isMobile = /iPhone|iPod|Android/i.test(navigator.userAgent);
//var is_iPad = navigator.userAgent.match(/iPad/i) != null;
		if (isMobile) {
  			// "You are using Mobile"
			
			for (var i = 0; i < txt1.length; i++) {
			  txt1[i].style.fontSize = "3.5vw";
			}
			for (var i = 0; i < txt2.length; i++) {
			  txt2[i].style.fontSize = "3.5vw";
			}
			for (var i = 0; i < txt3.length; i++) {
			  txt3[i].style.fontSize = "4.5vw";
			}
			
		}else if(navigator.userAgent.match(/iPad/i) != null){
				
				for (var i = 0; i < txt1.length; i++) {
				  txt1[i].style.fontSize = "2.3vw";
				}
				for (var i = 0; i < txt2.length; i++) {
				  txt2[i].style.fontSize = "2.3vw";
				}
				for (var i = 0; i < txt3.length; i++) {
				  txt3[i].style.fontSize = "3.0vw";
				}
		} else {
			// "You are using Desktop"
			var i;
			for (i = 0; i < x.length; i++) {
			  x[i].style.width = "400px";
			}
		}
		

		
</script>

</body>
</html>
