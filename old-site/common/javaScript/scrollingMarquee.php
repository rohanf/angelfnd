<?
  function getVimeoInfo($id, $info = 'thumbnail_medium')
  {
	if (!function_exists('curl_init')) die('CURL is not installed!');
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://vimeo.com/api/v2/video/$id.php");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$output = unserialize(curl_exec($ch));
		$output = $output[0][$info];
		curl_close($ch);
		return $output;
  }
  //echo getVimeoInfo(16752583);
  //echo getVimeoInfo(644453,"thumbnail_small");
?>



<script language="javascript">

//Specify the marquee's width (in pixels)
var marqueewidth="500px"
//Specify the marquee's height
var marqueeheight="80px"
//Specify the marquee's marquee speed (larger is faster 1-10)
var marqueespeed=1
//Specify initial pause before scrolling in milliseconds
var initPause=0
//Specify start with Full(1)or Empty(0) Marquee
var full=1
//configure background color:
var marqueebgcolor="#ffffff"
//Pause marquee onMousever (0=no. 1=yes)?
var pauseit=1
//Width of each thumbnail
var imgwidth="140px"

//Specify the marquee's content (don't delete <nobr> tag)
//Keep all content on ONE line, and backslash any single quotations (ie: that\'s great):

var marqueecontent='<nobr><a href="/videos/vimeo.php#animal_angels_documentary"><img src="<? echo getVimeoInfo(16752583); ?>" width="'+imgwidth+'" height="'+marqueeheight+'" alt="Short documentary on Animal Angels Foundation" title="Short documentary on Animal Angels Foundation"></a><img src="/images/reel-divider.jpg" width="10" height="'+marqueeheight+'"><a href="/videos/vimeo.php#animal_angels_action"><img src="<? echo getVimeoInfo(11785976); ?>" width="'+imgwidth+'" height="'+marqueeheight+'" alt="Our Angels in Action" title="Our Angels in Action"></a><img src="/images/reel-divider.jpg" width="10" height="'+marqueeheight+'"><a href="/videos/mid-day.php"><img src="http://img.youtube.com/vi/GnOg7iWxXFo/0.jpg" alt="Interview with Mid-Day" title="Interview with Mid-Day" width="'+imgwidth+'" height="'+marqueeheight+'" /></a><img src="/images/reel-divider.jpg" width="10" height="'+marqueeheight+'"></nobr>'


////NO NEED TO EDIT BELOW THIS LINE////////////
var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var iedom=document.all||document.getElementById
if (iedom)
document.write('<span id="temp" style="visibility:hidden;position:absolute;top:-100px;left:-9000px">'+marqueecontent+'</span>')
var actualwidth=''
var cross_marquee, cross_marquee2, ns_marquee
function populate(){
if (iedom){
var initFill=(full==1)? '0px' : parseInt(marqueewidth)+0+"px"
actualwidth=document.all? temp.offsetWidth : document.getElementById("temp").offsetWidth
cross_marquee=document.getElementById? document.getElementById("iemarquee") : document.all.iemarquee
cross_marquee.style.left=initFill
cross_marquee2=document.getElementById? document.getElementById("iemarquee2") : document.all.iemarquee2
cross_marquee2.innerHTML=cross_marquee.innerHTML=marqueecontent
cross_marquee2.style.left=(parseInt(cross_marquee.style.left)+actualwidth+0)+"px" //indicates following #1
}
else if (document.layers){
ns_marquee=document.ns_marquee.document.ns_marquee2
ns_marquee.left=parseInt(marqueewidth)+0
ns_marquee.document.write(marqueecontent)
ns_marquee.document.close()
actualwidth=ns_marquee.document.width
}
setTimeout('lefttime=setInterval("scrollmarquee()",30)',initPause)
}
window.onload=populate

function scrollmarquee(){
if (iedom){
if (parseInt(cross_marquee.style.left)<(actualwidth*(-1)+0))
cross_marquee.style.left=(parseInt(cross_marquee2.style.left)+actualwidth+0)+"px"
if (parseInt(cross_marquee2.style.left)<(actualwidth*(-1)+0))
cross_marquee2.style.left=(parseInt(cross_marquee.style.left)+actualwidth+0)+"px"
cross_marquee2.style.left=parseInt(cross_marquee2.style.left)-copyspeed+"px"
cross_marquee.style.left=parseInt(cross_marquee.style.left)-copyspeed+"px"
}
else if (document.layers){
if (ns_marquee.left>(actualwidth*(-1)+0))
ns_marquee.left-=copyspeed
else
ns_marquee.left=parseInt(marqueewidth)+0
}
}

if (iedom||document.layers){
with (document){
document.write('<table border="0" cellspacing="0" cellpadding="0"><td>')
if (iedom){
write('<div style="position:relative;width:'+marqueewidth+';height:'+marqueeheight+';overflow:hidden">')
write('<div style="position:absolute;width:'+marqueewidth+';height:'+marqueeheight+';background-color:'+marqueebgcolor+'" onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed">')
write('<div id="iemarquee" style="position:absolute;left:0px;top:0px;display:inline;"></div>')
write('<div id="iemarquee2" style="position:absolute;left:0px;top:0px;display:inline;"></div>')
write('</div></div>')
}
else if (document.layers){
write('<ilayer width='+marqueewidth+' height='+marqueeheight+' name="ns_marquee" bgColor='+marqueebgcolor+'>')
write('<layer name="ns_marquee2" left=0 top=3 onMouseover="copyspeed=pausespeed" onMouseout="copyspeed=marqueespeed"></layer>')
write('</ilayer>')
}
document.write('</td></table>')
}
}
</script>