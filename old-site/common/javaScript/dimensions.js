function dimensions()
{
  var pageWidth = 0;
  var pageHeight = 0;
  if( typeof( window.innerWidth ) == 'number' )
  {
    //Non-IE
    pageWidth = window.innerWidth;
    pageHeight = window.innerHeight;
  }
  else if( document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight))
  {
    //IE 6+ in 'standards compliant mode'
    pageWidth = document.documentElement.clientWidth;
    pageHeight = document.documentElement.clientHeight;
  }
  else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) )
  {
    //IE 4 compatible
    pageWidth = document.body.clientWidth;
    pageHeight = document.body.clientHeight;
  }
  //window.alert( 'Page Width = ' + pageWidth );
  //window.alert( 'Page Height = ' + pageHeight );
  //window.alert( 'Table Height = ' + tableHeight );
  //window.alert ("Done executing dimensions");
//////ORGINALLY HERE redo(pageHeight,2);
}