              <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" align="center" bordercolor="#111111" id="AutoNumber9" width="160">
                <tr>
                  <td width="160">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" style="padding-left: 10px;">
                  	<form method="get" action="http://www.google.com/search">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td>
									<input type="text" name="q" size="20" style="color:#808080;" maxlength="10" value="Site Search" onfocus="if(this.value==this.defaultValue)this.value=''; this.style.color='black';" onblur="if(this.value=='')this.value=this.defaultValue; "/>
                                </td>
                            </tr>
                            <tr>
								<td style="text-align: right">
									<input type="submit" value="Go!" />
									<input type="hidden" name="sitesearch" value="www.animalangelsfoundation.com" />
                                </td>
							</tr>
						</table>
					</form>
                  </td>
                </tr>
                <tr>
                  <td width="160">
                  <a href="/videos/vimeo.php">
                  <?
                    ($leftNav=='vimeo')?
                    (print'<img class="selected-padded" src="/images/news-vimeo.gif" alt="Vimeo logo" title="Short films on Vimeo" width="150" height="40"></a>'):
                    (print'<center><img border="0" src="/images/news-vimeo.gif" alt="Vimeo logo" title="Short films on Vimeo" width="150" height="40"></center></a>')
                  ?>
                  </td>
                </tr>
                <tr>
                  <td width="160">&nbsp;</td>
                </tr>
                <tr>
                  <td width="160">
                  <a href="/videos/youtube.php">
                  <?
                    ($leftNav=='youtube')?
                    (print'<img class="selected" src="/images/news-youtube.jpg" alt="YouTube logo" title="YouTube coverage" width="150" height="40"></a>'):
                    (print'<center><img border="0" src="/images/news-youtube.jpg" alt="YouTube logo" title="YouTube coverage" width="150" height="40"></center></a>')
                  ?>
                  </td>
                </tr>
                <tr>
                  <td width="160">&nbsp;</td>
                </tr>
                <tr>
                  <td width="160">
                  <a href="/videos/mid-day.php">
                  <?
                    ($leftNav=='mid-day')?
                    (print'<img class="selected" src="/images/news-mid-day.jpg" alt="Mid-Day logo" title="Interview with Mid-Day" width="150" height="40"></a>'):
                    (print'<center><img border="0" src="/images/news-mid-day.jpg" alt="Mid-Day logo" title="Interview with Mid-Day" width="150" height="40"></center></a>')
                  ?>
		  </td>
                </tr>
              </table>
