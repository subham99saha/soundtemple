<!DOCTYPE html>
<html>
<title>SOUNDTEMPLE | Create Slide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Homemade+Apple|Oswald|Cookie|Quicksand|Amatic+SC|Dancing+Script|Satisfy|Indie+Flower|Lobster&display=swap" rel="stylesheet">

<link rel="icon" href="resources/icon.jpg">

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

/*function setup(){
	if(document.getElementById("steps").style.display == 'none'){	
		document.getElementById("steps").style.display = 'block';
	}else{
		document.getElementById("steps").style.display = 'none';
	}	
}*/
</script>

<body>
<div style='width:100%; height:100%; text-align:center; background:;'>
<div class='page' id='pg' style='position:relative; display:inline-block; width:100%; height:100%; text-align:center; background:rgba(255,255,255,0); background-size:cover; background-position:center; background-repeat:none; overflow-y:scroll;'>
<div style='width:100%; height:100%; padding:10%; padding-top:15%;'>
<div class='w3-animate-top' style='padding:5%; background:rgba(255,255,255,0.9); text-align:left;'>
<h1 style='font-family:oswald; text-align:center;'><a href='index.php' style='text-decoration:none;'>SOUNDTEMPLE</a></h1>

<?php
if(!isset($_POST['create'])){
	
	echo "<form id='vidform' method='POST' action='index.php' autocomplete='off' style='display:block; padding:0px 0px 0px 0px;'  enctype='multipart/form-data'>
											<p><span class='txt2' style='color:black; font-size:13px;'><a target='blank' href='https://youtube.com' style='text-decoration:none;' ><b>YouTube link</b></a></span><br><input id='video' class='txt3' type='text' name='ytlink' value='' placeholder='video link (required)' style='width:100%; padding:2%; font-size:14px; color:black; background:none; border:none; border-bottom: 2px solid black; ' required /></p>
											<p><span class='txt2' style='color:black; font-size:13px;'><b>Starting time (in seconds)</b></a></span><br><input id='sttime' class='txt3' type='number' name='sttime' value='' placeholder='starting time (required)' style='width:100%; padding:2%; font-size:14px; color:black; background:none; border:none; border-bottom: 2px solid black; ' required /></p>
											<!--<p><span class='txt2' style='color:black; font-size:13px;'><b>Text</b> (optional)</span><br><textarea id='text' class='txt3' name='' maxlength='200' rows='4' placeholder='Say something...' style='width:100%; padding:2%; font-size:14px; color:black; background:rgba(0,0,0,0); border:none; border-bottom: 2px solid black; ' required ></textarea></p>-->
											<p><span class='txt2' style='color:black; font-size:13px;'><b>Image link</b></span><br><input id='image' class='txt3' type='text' name='imglink' value='' placeholder='image link' style='width:100%; padding:2%; font-size:14px; color:black; background:none; border:none; border-bottom: 2px solid black; ' /></p>
											<p class='txt1' id='msg' style='display:none; font-size:12px; color:white; background:rgba(255,0,0,0.7); padding:3%; border-radius:5px;'>Fill all fields.</p>
											<p class='txt1' style='font-size:12px;'><!--<span class='txt2' style='color:black; font-size:13px;'><b>How to use</b></span><br>-->GIFs look best, but images will work too. <br>Visit <a target='blank' href='https://www.bing.com/images/search'>Bing Images</a> to get the address of your desired image. Select the image/GIF you want, click on the <i class='fas fa-ellipsis-h'></i> icon and select <b>view image</b> or click on the <i class='far fa-image'></i> icon. Now copy its URL.<!--<br><br>You can also select images from your gallery. Click on create and then press the <i class='fas fa-camera'></i> icon in the next page.--><br> To understand whether your link is correct or not check if it ends with a .jpg, .jpeg, .gif, .png or some other image file extension.<br><span style='width:100%; text-align:center;'><b>OR</b></span></p>
											<p><span class='txt2' style='color:black; font-size:13px;'><b>Upload Image</b></span><br><input id='imagefile' class='txt2' type='file' name='imgfile' value='' accept='image/*' style='width:100%; font-size:13px; color:black; background:rgba(255, 255, 255, 0.7); border: 2px solid black; border-radius:5px; ' /></p>
											<p style='text-align:center;'><span class='txt1' style='color:black; font-size:12px;'>Allow atleast 60 seconds of video creation time. GIFs take more time. The video file will be created inside the 'videos' folder.</span><br><input class='txt3' type='submit' name='create' value='Create' style='background:none; color:black; font-weight:bold; font-size:14px; border:none;' /></p>
											
											</form>";
	//echo "<p style='text-align:center; width:100%;'><span class='txt1' style='color:black; font-size:12px;'><!--<button onclick='setup();' style='border:none; background:none;'><u>Setup instructions</u></button><br>-->write to <i>subham99saha@gmail.com</i> for queries.<br>&copy; soundtemple.rf.gd 2019</span></p>";			
}

if(isset($_POST['create'])){
	$uid = mt_rand(1000000000,2147483647);			
	$mdata=array();
		
		if(empty($_POST['ytlink'])){
			$mdata[]='ytlink';
		}else{
			$ytlink=$_POST['ytlink'];
		}
		
		if(empty($_POST['sttime'])){
			//$mdata[]='sttime';
			$sttime=1;
		}else{
			$sttime=$_POST['sttime'];
		}
		
		if(empty($_POST['imglink'])){
			//$mdata[]='imglink';
		}else{
			$imglink=$_POST['imglink'];
		}
		
		if(empty($_POST['imglink'])&&empty($_FILES['imgfile']['name'])){
			$mdata[]='imglink';
			$imglink='http://img.auctiva.com/imgdata/2/9/6/9/3/8/webimg/586869572_o.jpg';
			echo "<i>no_image_detected_1</i><br>";
		}else{
			if(!empty($_POST['imglink'])){
				$imglink=$_POST['imglink'];
			}
			if(!empty($_FILES['imgfile']['name'])){
				$target_dir = 'videos/video'.$uid.'/';
				$fcount = count($_FILES["imgfile"]["name"]);
				$target_file=array();
				$target_file = $target_dir . basename($_FILES["imgfile"]["name"]);				
				$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				if($_FILES["imgfile"]["size"] > 100000000){
								$mdata[]='File size needs to be less than 100MB.';
				}
				if(($fileType != "jpg") && ($fileType != "jpeg") && ($fileType != "png") && ($fileType != "gif")){
								$mdata[]='Sorry, only JPG, JPEG, GIF and PNG files are allowed.';
				}
				if($_FILES['imgfile']['name'][0]=='.'){
								$mdata[]='File not a proper image. Try uploading a different file with a proper name.';
				}
				if (strpos($_FILES['imgfile']['name'], 'php') !== false) {
								$mdata[]='File not a proper image. Try uploading a different file with a proper name.';
				}
			}			
		}
		
		if(empty($mdata)){
			mkdir('videos/video'.$uid);
			//echo shell_exec('mkdir videos/video'.$uid.' &');
			if(!empty($_FILES['imgfile']['name'])){ 
				if (move_uploaded_file($_FILES["imgfile"]["tmp_name"], $target_file)) {
					$imglink=$target_file;
				}else{
					$imglink='http://img.auctiva.com/imgdata/2/9/6/9/3/8/webimg/586869572_o.jpg';
					echo "<i>no_image_detected_2</i><br>";
				}
			}
			//echo shell_exec('youtube-dl --extract-audio --audio-format mp3 -o "videos/video'.$uid.'/audio.mp3" https://www.youtube.com/watch?v=tWHBaJHo5og &');
			echo shell_exec('youtube-dl --extract-audio --audio-format mp3 -o "videos/video'.$uid.'/audio.mp3" '.$ytlink.' &');
			//echo shell_exec('ffmpeg -ss 60 -t 25 -i "videos/video'.$uid.'/audio.mp3" "videos/video'.$uid.'/output.mp3" &');
			echo shell_exec('ffmpeg -ss '.$sttime.' -t 28 -i "videos/video'.$uid.'/audio.mp3" "videos/video'.$uid.'/output.mp3" &');
			//echo shell_exec('ffmpeg -i "https://i.pinimg.com/originals/2f/39/44/2f39441cb817742cf466732884b5cde0.jpg" -vf scale=300:-2 "videos/video'.$uid.'/image.jpg" &');
			$imgpath='';
			//if(strpos(strtolower(pathinfo($imglink, PATHINFO_EXTENSION)),'gif') == true){
			if(strtolower(pathinfo($imglink, PATHINFO_EXTENSION)) == 'gif'){
				echo strtolower(pathinfo($imglink, PATHINFO_EXTENSION))." <i>img_type_gif_1</i><br>";
				$imgpath='videos/video'.$uid.'/image.gif';
				echo shell_exec('ffmpeg -i "'.$imglink.'" -vf scale=300:-2 '.$imgpath.' &');
				//echo shell_exec('ffmpeg -i "videos/video'.$uid.'/output.mp3" -ignore_loop 0 -i '.$imgpath.' -vf "scale=trunc(iw/2)*2:trunc(ih/2)*2,pad=width=300:height=533:x=0:y=80:color=white" -shortest -strict -2 -c:v libx264 -threads 4 -c:a aac -b:a 192k -pix_fmt yuv420p -shortest "videos/video'.$uid.'/out.mp4" &');
				echo shell_exec('ffmpeg -i "videos/video'.$uid.'/output.mp3" -ignore_loop 0 -i '.$imgpath.' -vf "scale=trunc(iw/2)*2:trunc(ih/2)*2" -shortest -strict -2 -c:v libx264 -threads 4 -c:a aac -b:a 192k -pix_fmt yuv420p -shortest "videos/video'.$uid.'/out.mp4" &');
			}else{
				echo strtolower(pathinfo($imglink, PATHINFO_EXTENSION))." <i>img_type_jpg_2</i><br>";
				$imgpath='videos/video'.$uid.'/image.jpg';
				echo shell_exec('ffmpeg -i "'.$imglink.'" -vf scale=300:-2 '.$imgpath.' &');
				//echo shell_exec('ffmpeg -loop 1 -i '.$imgpath.' -i "videos/video'.$uid.'/output.mp3" -vf "pad=width=300:height=533:x=0:y=80:color=white" -c:v libx264 -c:a libfdk_aac -b:a 192k -shortest "videos/video'.$uid.'/out.mp4" &');
				echo shell_exec('ffmpeg -loop 1 -i '.$imgpath.' -i "videos/video'.$uid.'/output.mp3" -c:v libx264 -c:a aac -b:a 192k -shortest "videos/video'.$uid.'/out.mp4" &');
			}
			//echo shell_exec('ffmpeg -i "videos/video'.$uid.'/out.mp4" -vf "[in]drawtext=fontfile=\'fonts/Oswald-Regular.ttf\': text=\'SOUNDTEMPLE\': fontcolor=white@0.5: fontsize=18: box=1: boxcolor=black@0.5: x=5: y=5, drawtext=fontfile=\'fonts/Quicksand-Regular.ttf\': text=\'Visit soundtemple.rf.gd to create your image+audio file\': fontcolor=white@0.5: fontsize=9: box=1: boxcolor=black@0.5: x=5: y=35, drawtext=fontfile=\'fonts/Quicksand-Regular.ttf\': text=\'copyright soundtemple.rf.gd 2019\': fontcolor=white@0.5: fontsize=9: box=1: boxcolor=black@0.5: x=5: y=50" -codec:a copy "videos/video'.$uid.'/video.mp4" &');
			echo shell_exec('ffmpeg -i "videos/video'.$uid.'/out.mp4" -vf "[in]drawtext=fontfile=\'Oswald-Regular.ttf\': text=\'SOUNDTEMPLE\': fontcolor=white@0.6: fontsize=18: x=(w-text_w-5): y=(0+text_h)" -codec:a copy "videos/video'.$uid.'/video.mp4" &');
			
			if (!unlink($imgpath)) {  echo '<br>Error deleting '.$imgpath; } else {  echo '<br>Deleted '.$imgpath; }
			if (!unlink('videos/video'.$uid.'/audio.mp3')) {  echo '<br>Error deleting videos/video'.$uid.'/audio.mp3'; } else {  echo '<br>Deleted videos/video'.$uid.'/audio.mp3'; }
			if (!unlink('videos/video'.$uid.'/output.mp3')) {  echo '<br>Error deleting videos/video'.$uid.'/output.mp3'; } else {  echo '<br>Deleted videos/video'.$uid.'/output.mp3'; }
			if (!unlink('videos/video'.$uid.'/out.mp4')) {  echo '<br>Error deleting videos/video'.$uid.'/out.mp4'; } else {  echo '<br>Deleted videos/video'.$uid.'/out.mp4'; }
			
			/*echo '<br><audio id="myaudio" style="width:100%;" controls>
			<source src="videos/video'.$uid.'/output.mp3" type="audio/ogg">
			  <source src="videos/video'.$uid.'/output.mp3" type="audio/mpeg"></audio><br><br>
			';*/
			//echo '<img src="videos/video'.$uid.'/image.jpg" style="width:100%;" ><br><br>';
			/*echo '<br><br><video style="width:100%;" controls>
			  <source src="videos/video'.$uid.'/video.mp4" type="video/mp4">
			  Your browser does not support the video tag.
			</video>';*/
			
			//echo '<br><br><a href="videos/video'.$uid.'/video.mp4">Video file</a>';
			echo '<p>Your video has been created in and as "videos/video'.$uid.'/video.mp4".<br><br><button onclick="goBack()" style="background:none; border:none;"><b>Go Back</b></button></p>';
		}else{
			foreach($mdata as $m){
				echo $m.'<br>';
			}
		}	
}

?>
<p style='text-align:center; width:100%;'><span class='txt1' style='color:black; font-size:12px;'>Share files through</span><br>
<span class='txt2' style='color:black; font-size:13px; padding:2%;'><a href='https://drive.google.com/drive/u/0/my-drive' target='blank'><i class="fab fa-google-drive"></i></a></span>
<span class='txt2' style='color:black; font-size:13px; padding:2%;'><a href='https://facebook.com' target='blank'><i class="fab fa-facebook"></i></a></span>
<span class='txt2' style='color:black; font-size:13px; padding:2%;'><a href='https://instagram.com' target='blank'><i class="fab fa-instagram"></i></a></span>
<span class='txt2' style='color:black; font-size:13px; padding:2%;'><a href='https://whatsapp.com' target='blank'><i class="fab fa-whatsapp"></i></a></span></p>
<p style='text-align:center; width:100%;'><span class='txt1' style='color:black; font-size:12px;'><!--<button onclick='setup();' style='border:none; background:none;'><u>Setup instructions</u></button><br>-->write to <i>subham99saha@gmail.com</i> for queries.<br>&copy; soundtemple.rf.gd 2019</span></p>
</div>
</div>
</div>
</div>
<script>
var bg = ["https://wallpaperaccess.com/full/682460.jpg",
			"https://c.wallhere.com/photos/fd/9f/music_album_covers-136147.jpg!d",
			"http://img04.deviantart.net/1160/i/2011/264/a/8/album_cover_collage_by_guitarman3-d4ai637.jpg",
			"http://tiledwallpaper.com/wallpapers/2018/3/18612237665a9ac311e48eb8.35829108.jpg",
			"https://www.wallpaperup.com/uploads/wallpapers/2013/06/11/101176/e94ba1ba7766a45af5cdc096213b8494-700.jpg"];
var x = Math.floor((Math.random() * 5) + 0);
document.body.style.backgroundImage = "url('"+bg[x]+"')";

function goBack() {
  window.history.back();
}

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
			  x[i].style.width = "500px";
			}
		}
		

		
</script>

</body>
</html>
