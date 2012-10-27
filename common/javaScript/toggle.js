<script language="javascript">
function toggle(showHideDiv, switchTextDiv)
{
	var ele = document.getElementById(showHideDiv);
	var imageEle = document.getElementById(switchTextDiv);

	if(ele.style.display == "block") //&& anchor == "animal_angels_documentary")
	{
    		ele.style.display = "none";
		imageEle.innerHTML = '<img src="/images/plus.png">';
  	}
	else
	{
		ele.style.display = "block";
		imageEle.innerHTML = '<img src="/images/minus.png">';
	}
}
</script>
