// Set slideShowSpeed (milliseconds)
var slideShowSpeed = 3000;

// Duration of crossfade (seconds)
var crossFadeDuration = 3;

// Specify the image files
var Pic = new Array();

// to add more images, just continue
// the pattern, adding to the array below
Pic[0] = 'images/home-pic1.jpg'
Pic[1] = 'images/home-pic2.jpg'
Pic[2] = 'images/home-pic3.jpg'
Pic[3] = 'images/home-pic4.jpg'
Pic[4] = 'images/home-pic5.jpg'
Pic[5] = 'images/home-pic6.jpg'
Pic[6] = 'images/home-pic7.jpg'
Pic[7] = 'images/home-pic8.jpg'
Pic[8] = 'images/home-pic9.jpg'
Pic[9] = 'images/home-pic10.jpg'
Pic[10] = 'images/home-pic11.jpg'
Pic[11] = 'images/home-pic12.jpg'
Pic[12] = 'images/home-pic13.jpg'
Pic[13] = 'images/home-pic14.jpg'

//------ do not edit anything below this line------------------------------------------
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++)
{
  preLoad[i] = new Image();
  preLoad[i].src = Pic[i];
}

function runSlideShow()
{
  if (document.all)
  {
    document.images.SlideShow.style.filter="blendTrans(duration=2)";
    document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
    document.images.SlideShow.filters.blendTrans.Apply();
  }
  document.images.SlideShow.src = preLoad[j].src;
  if (document.all)
  {
    document.images.SlideShow.filters.blendTrans.Play();
  }
  j = j + 1;
  if (j > (p - 1)) j = 0;
  t = setTimeout('runSlideShow()', slideShowSpeed);
}
//  End ------------------------------------------------------------------------------- -->