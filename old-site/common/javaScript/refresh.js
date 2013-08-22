<!--
	myPix = new Array("/images/inside-top1.jpg", "/images/inside-top2.jpg", "/images/inside-top3.jpg", "/images/inside-top4.jpg", "/images/inside-top5.jpg", "/images/inside-top6.jpg", "/images/inside-top7.jpg", "/images/inside-top8.jpg")
	imgCt = myPix.length 

	function choosePic() {
		if (document.images) {
			randomNum = Math.floor((Math.random() * imgCt))
			document.myPicture.src = myPix[randomNum]
		}
	}
//-->