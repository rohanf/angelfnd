<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Language" content="en-us">
  <meta name="keywords" content="volunteer at animal angels foundation">
  <meta name="description" content="We are always looking for volunteers at Animal Angels Foundation">
  <title>Volunteer at Animal Angels Foundation</title>
  <link rel="stylesheet" type="text/css" href="/ds.css">
  <META HTTP-EQUIV="imagetoolbar" CONTENT="no">
  <script type="text/JavaScript" src="/common/javaScript/refresh.js"></script>
  <script type="text/JavaScript" src="/common/javaScript/rightClick.js"></script>
  <script type="text/Javascript" src="/common/javaScript/dimensions.js"></script>
  <!-- BEGIN Datepicker -->
  <link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' />
  <script src='http://code.jquery.com/jquery-1.9.1.js'></script>
  <script src='http://code.jquery.com/ui/1.10.3/jquery-ui.js'></script>
  <link rel='stylesheet' href='/resources/demos/style.css' />
  <!-- END Datepicker -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
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
              <td width="100%" valign="top">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber9" width="184">
                <tr>
                  <td width="32">&nbsp;</td>
                  <td width="152">&nbsp;</td>
                </tr>
                </table>
              </td>
            </tr>
            </table>
          </td>
          <td valign="top">
          <div align="center">
            <center>


            <script type="text/javascript">
              document.write("<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#111111\" width=\"90%\" id=\"AutoNumber19\" height=" + tableHeight + ">");
            </script>
              <tr>
                <td valign="top">


                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="90%" id="AutoNumber10" height="155">
                    <tr>
                      <td width="100%" height="15"></td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <p align="justify" style="margin-left:20">If you would like your pet to volunteer with us then s/he should meet the following criteria:</p>
                      <ul>
                        <li>Enjoys interacting with various kinds of populations</li>
                        <li>Has a friendly outgoing personality</li>
                        <li>Is physically fit</li>
                        <li>Knows basic obedience commands</li>
                      </ul>
                      <br />
                      <p align="justify" style="margin-left:20">At Animal Angels Foundation we have a temperament test that your pet must pass after which s/he becomes registered with Animal Angels Foundation. This test is also conducted on puppies though the puppy will start working only after the training period is completed.</p>
                      <p align="justify">Please fill in the form below if you would like your pet to be a part of our team and we will get in touch with you.</p>
                      </td>
                    </tr>
                    <tr>
                    	<td>
                            <script>
                              $(function() {
                              $( '#datepicker' ).datepicker({changeMonth: true, changeYear: true, dateFormat: 'd MM, yy', maxDate: 0});
                              });
                            </script>
                        	<?php
									echo "<form method='post' action='verify.php'>";
$publickey = "6LfsHOESAAAAAOmRF7QoHtDKtEMqdBsZU1w52e-8";
echo recaptcha_get_html($publickey);
echo "<pre>Your name: <input type='text' name='name'><br />
Email address: <input type='text' name='email'><br />
Contact number: <input type='text' name='phone'><br />
Your pet's name: <input type='text' name='pet-name'><br />
Pet's species: <input type='text' name='pet-species'><br />
Pet's breed: <input type='text' name='pet-breed'><br />
Pet's sex: <select name='pet-sex'>
  <option value='female'>female</option>
  <option value='male'>male</option>
</select><br />
Pet's birthday: <input type='text' name='pet-bday' id='datepicker' /><br />
Address (<font size='-4' color='#FF0000'>Flat number and building name</font>): <input type='text' name='address-line1'><br />
Address (<font size='-4' color='#FF0000'>Street</font>): <input type='text' name='address-street'><br />
Address (<font size='-4' color='#FF0000'>Landmark</font>): <input type='text' name='address-landmark'><br />
Address (<font size='-4' color='#FF0000'>Area</font>): <input type='text' name='address-area'><br />
Address (<font size='-4' color='#FF0000'>Nearest Railway Station</font>): <input type='text' name='address-station'><br />
Additional comments:<br>
<textarea name='comments' rows='10' cols='60'>
</textarea><br>
<input type='submit' value='Send information'>
									</pre>
									<div class='g-recaptcha' data-sitekey='6LfsHOESAAAAAOmRF7QoHtDKtEMqdBsZU1w52e-8'></div>
									</form>";
							?>
                        </td>
                    </tr>


                    <!-- tr>
                      <td width="100%">&nbsp;
                      </td>
                    </tr>
                    <tr>
                      <td width="100%">&nbsp;
                      </td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <p class="hd">
                      <img border="0" src="/images/orange-paw.gif" alt="orange-paw bullet" align="absmiddle" width="12" height="12">&nbsp; 
                      How can I become a part of Animal Angels Foundation?</td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <img border="0" src="/images/spacer.gif" alt="" width="5" height="5"></td>
                    </tr>
                    <tr>
                      <td width="100%">
                      <p align="justify" style="margin-left:20">If you want to be a part of our team and make a difference in people's lives through animals, then you can sign up for a one-day workshop with us and get registered under Animal Angels Foundation. If you are interested then send us a mail at <a href="mailto:AnimalAngelsIndia@gmail.com"> AnimalAngelsIndia@gmail.com</a> and we will get back to you with the details.
                      <p align="justify" style="margin-left:20">You can commit to whatever amount of time you would like to give, according to your schedule. You can volunteer as often as once a week, or as little as once a month for an hour at a time.</td>
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