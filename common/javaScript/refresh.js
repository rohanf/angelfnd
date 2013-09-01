<!--
	myPix = new Array("/images/inside-top/1.jpg", "/images/inside-top/2.jpg", "/images/inside-top/3.jpg", "/images/inside-top/4.jpg", "/images/inside-top/5.jpg", "/images/inside-top/6.jpg", "/images/inside-top/7.jpg", "/images/inside-top/8.jpg", "/images/inside-top/9.jpg", "/images/inside-top/10.jpg", "/images/inside-top/11.jpg")
	imgCt = myPix.length 

	function choosePic() {
		if (document.images) {
			randomNum = Math.floor((Math.random() * imgCt))
			document.myPicture.src = myPix[randomNum]
		}
	}
//-->