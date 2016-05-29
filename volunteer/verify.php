<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta name="keywords" content="We've received your email">
  <title>Therapy Pet registration at Animal Angels Foundation</title>
  <link rel="stylesheet" type="text/css" href="/ds.css">
  <link rel="stylesheet" type="text/css" href="/3d-gallery/css/style.css" />
  <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
  <script type="text/JavaScript" src="/common/javaScript/refresh.js"></script>
  <script type="text/JavaScript" src="/common/javaScript/rightClick.js"></script>
  <script type="text/Javascript" src="/common/javaScript/dimensions.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="/3d-gallery/js/jquery.gallery.js"></script>
  <script type="text/javascript">
    $(function() {
    $('#dg-container').gallery();
  });
  </script>
  <script type="text/javascript" src="/3d-gallery/js/modernizr.custom.53451.js"></script>
</head>

<body topmargin="0" leftmargin="0" bottommargin="0" rightmargin="0" onLoad="choosePic()" onResize="dimensions()">
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="779" id="AutoNumber1" height="100%" background="/images/bg-table.gif">
    <tr>
      <td width="779" valign="top" height="144">
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="779" id="AutoNumber2" height="144">
        <tr>
          <td width="779" height="22" valign="top">
            <?
              global $topNav;
              $topNav = "volunteer";
              include($_SERVER['DOCUMENT_ROOT'] . "/common/top/menu.php");
            ?>
          </td>
        </tr>
        <tr>
          <td height="122" valign="top" width="779">
            <? include($_SERVER['DOCUMENT_ROOT'] . "/common/top/logo-picFrames.php"); ?>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td valign="top">
      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="779" id="AutoNumber5" height="100%" background="/images/bg-left.gif">
        <tr>
          <td width="185" valign="top">
          <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="184" id="AutoNumber6" height="392" background="/images/inside-left.jpg">
            <tr>
              <td width="100%" valign="top">&nbsp;</td>
            </tr>
            </table>
          </td>
          <td valign="top">
          <div align="center">
            <center>


            <script type="text/javascript">
              document.write("<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"90%\" id=\"AutoNumber19\" height=\"800\">");
            </script>
              <tr>
                <td valign="top">


                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="90%" id="AutoNumber10" height="100%">
                    <tr>
                      <td width="100%" height="15"></td>
                    </tr>
                    <tr>
                      <td width="100%" height="42">
                      <h3><img border="0" src="/images/big-bullet.jpg" alt="Big bullet" align="absmiddle" width="20" height="18">&nbsp;&nbsp;Therapy Pet Registration at Animal Angels Foundation</h3>
                      </td>
                    </tr>
                    <tr>
                      <td width="100%" height="5"></td>
                    </tr>
                    <tr>
                    	<td valign='top'>
                        	<?php


                                                               $captcha;
                                                               //if(isset($_POST['email'])){
                                                               //  $email=$_POST['email'];
                                                               //}if(isset($_POST['comment'])){
                                                               //  $email=$_POST['comment'];
                                                               //}
                                                               if(isset($_POST['g-recaptcha-response'])){
                                                                 $captcha=$_POST['g-recaptcha-response'];
                                                               }
                                                               if(!$captcha){
									echo "<p align='center'>
									<img border='0' src='/images/sad_dog.jpg' alt='Awwww' width='506' height='337' /><br><br><br>
									Sorry, we weren't able to verify that you were human. Please make sure to check the box and <a href='/volunteer/join.php'>try again</a></p>";
									die();
                                                                 exit;
                                                               }
                                                               $secretKey = "6LfsHOESAAAAAMLHrBKW2G528lEJML5nU0PUd3v7";
                                                               $ip = $_SERVER['REMOTE_ADDR'];
                                                               $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
                                                               $responseKeys = json_decode($response,true);
                                                               if(intval($responseKeys["success"]) !== 1) {
									echo "<p align='center'>
									<img border='0' src='/images/sad_dog.jpg' alt='Awwww' width='506' height='337' /><br><br><br>
									Sorry, we weren't able to verify that you were human. Please  make sure to check the box and <a href='/volunteer/join.php'>try again</a></p>";
									die();
                                                               } else {
									$name = $_REQUEST['name'];
									$email = $_REQUEST['email'];
									$phone = $_REQUEST['phone'];
									$pet_name = $_REQUEST['pet-name'];
									$pet_species = $_REQUEST['pet-species'];
									$pet_breed = $_REQUEST['pet-breed'];
									$pet_sex = $_REQUEST['pet-sex'];
									$pet_bday = $_REQUEST['pet-bday'];
									$address_line1 = $_REQUEST['address-line1'];
									$address_street = $_REQUEST['address-street'];
									$address_landmark = $_REQUEST['address-landmark'];
									$address_area = $_REQUEST['address-area'];
									$address_station = $_REQUEST['address-station'];
									$comments = $_REQUEST['comments'];
									$message = "Name: ".$name."\n"."Phone number: ".$phone."\n"."Pet's name: ".$pet_name."\n"."Pet's species: ".$pet_species."\n"."Pet's breed: ".$pet_breed."\n"."Pet's sex: ".$pet_sex."\n"."Pet's birthday: ".$pet_bday."\n"."Address: ".$address_line1."\n"."Street: ".$address_street."\n"."Landmark: ".$address_landmark."\n"."Area: ".$address_area."\n"."Nearest railway station: ".$address_station."\n"."Coments: ".$comments;
									mail("animalangelsindia@gmail.com", "Pet Therapy Registration", $message, "From:" . $email);
									echo "Thank you $name. We will get in touch with you as soon as we have our next round of temperament testing for pets, or, if we are on the look out for a therapy pet at a specific location in Bombay.</p>";
                                                               }
							?>
                        </td>
                    </tr>
                    <!--tr>
                    	<td>
							<section id="dg-container" class="dg-container">
								<div class="dg-wrapper">
									<a href="#"><img src="/images/workshops_3d-gallery/pic-animal-programs-treehouse.jpg" alt="image00"><div></div></a>
									<a href="#"><img src="/images/workshops_3d-gallery/IMG-20130415-WA0006.jpg" alt="image01"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130415-WA0007.jpg" alt="image02"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130415-WA0008.jpg" alt="image03"><div></div></a>
									<a href="#"><img src="/images/workshops_3d-gallery/IMG-20130415-WA0010.jpg" alt="image04"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130416-WA0006.jpg" alt="image05"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130416-WA0009.jpg" alt="image06"><div></div></a>
									<a href="#"><img src="/images/workshops_3d-gallery/IMG-20130416-WA0013.jpg" alt="image07"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130416-WA0014.jpg" alt="image08"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130418-WA0004.jpg" alt="image09"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130418-WA0006.jpg" alt="image10"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130418-WA0007.jpg" alt="image11"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/IMG-20130418-WA0008.jpg" alt="image12"><div></div></a>
                                    <a href="#"><img src="/images/workshops_3d-gallery/535725_439292159430280_2034921708_n.jpg" alt="image13"><div></div></a>
								</div>
								<nav> 
									<span class="dg-prev">&lt;</span>
									<span class="dg-next">&gt;</span>
								</nav>
							</section>
						</td>
					</tr -->
                  </table>
                </td>
              </tr>
            </table>


            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="90%" id="AutoNumber19">
            <div align="center">

              <script type="text/Javascript" src="/common/javaScript/calculateHeight.js"></script>

              <?
                for ($i=1; $i<3; $i++)
                {
                  print'<tr><td width="100%">&nbsp;</td></tr>' . "\n";
                }
                if(stristr($_SERVER['SERVER_NAME'], 'animalangelsfoundation') == TRUE)
                {
                  include($_SERVER['DOCUMENT_ROOT'] . "/common/bottom/google-analytics.php");
                }
                include($_SERVER['DOCUMENT_ROOT'] . "/common/bottom/rediffq&a.php");
              ?>

              </div>
            </table>


            </center>
          </div>
          </td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td width="779" valign="bottom" height="26">
        <? include($_SERVER['DOCUMENT_ROOT'] . "/common/bottom/footer.php"); ?>
      </td>
    </tr>
  </table>
  </center>
</div>
<script type="text/JavaScript" src="/common/javaScript/rollover.js"></script>
</body>

</html>
