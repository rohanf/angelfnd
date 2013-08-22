function getParamValue( name )
{
    name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+name+"=([^&#]*)";
    var regex = new RegExp( regexS );
    var results = regex.exec( window.location.href );
    if( results == null ) return "";
    else    return results[1];
}

function hiddenParamValue( name )
{
    alert('Entering function');
    if (document.getElementById("txt1") == null) return "";
    else  return document.getElementById( name ).value;
}

function redo(pageHeight,number)
{
    //alert (number);
    //alert(location.host);
    //alert(location.pathname);
    //alert(location.hash);
    //alert( 'Page Height = ' + pageHeight );
    //alert( 'Table Height = ' + tableHeight );


    useHeight = ( pageHeight >  tableHeight )?pageHeight:tableHeight;
    //alert( 'Use Height = ' + useHeight);


    var heightSetInUrl = getParamValue('height');
//    var heightSetInUrl = hiddenParamValue("txt1");
//    alert( 'Height value set to ' + heightSetInUrl );



    //if ( (heightSetInUrl > useHeight) || (heightSetInUrl < useHeight) )
    //if ( (heightSetInUrl == '') || (number == 1) )
    //if (heightSetInUrl == '')
    //if (number == 2)
    if ( (heightSetInUrl == '') || (useHeight != heightSetInUrl) )
    {
//	document.write("<form>");
//	document.write("<div id=\"mydiv\"></div>");
//	var input = document.createElement("input");
//	input.setAttribute("type", "hidden");
//	input.setAttribute("name", "finalHeight");
//	input.setAttribute("id","txt1");
//	input.setAttribute("value", useHeight);
//	document.getElementById("mydiv").appendChild(input);
	//alert('Done');
	//alert(document.getElementById("txt1").value);
//	document.write("</script>");
	//document.write("<input type=\"submit\" />");
//	document.write("</form>");
//	var heightSetInUrl = hiddenParamValue("txt1");
//	alert( 'Height value set to ' + heightSetInUrl );

////////ORIGINALLY HERE window.location.href="http://" + location.host + location.pathname + location.hash + "?height=" + useHeight;
//	alert( 'Page reload issued with http://' + location.host + location.pathname + '?height=' + useHeight );
//	alert( 'Use Height = ' + useHeight );
    }
    //alert ("Done executing redo " + number + useHeight);
}
//if ( typeof( window[ 'pageHeight' ] ) == "undefined" ) pageHeight = 0;
//redo(pageHeight,1);
////////ORIGINALLY HERE dimensions();