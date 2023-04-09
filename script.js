Logo = new Image(107,176);
Logo.src = "img/Logo.png"; //Source de l'image de base
LogoVar = new Image(107,176);
LogoVar.src = "img/LogoVar.png"; //Source de l'image quand la souris passera par dessus

var image="img/emote1.png";  //Source de l'emote qui tombera sur le site
var no = 3; // Nombre d'emote qui tombera en même temps
var time = 0; // Cette variante permet de rêgler après combien de temps les emotes resteront visible, si la variante est sur 0 alors elles resteront indefiniment
var speed = 100; // La vitesse auquel les emotes tomberont
var i, dwidth = 900, dheight =500; 
var nht = dheight;
var toppos = 0;

if(document.all){
	var ie4up = 1;
}else{
	var ie4up = 0;
}

if(document.getElementById && !document.all){
	var ns6up = 1;
}else{
	var ns6up = 0;
}

function getScrollXY() {
  var scrOfX = 10, scrOfY = 10;
  if( typeof( window.pageYOffset ) == 'number' ) {
    scrOfY =window.pageYOffset;
    scrOfX = window.pageXOffset;
  } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
    scrOfY = document.body.scrollTop;
    scrOfX = document.body.scrollLeft;
  } else if( document.documentElement &&
      ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
   scrOfY = document.documentElement.scrollTop;
   scrOfX = document.documentElement.scrollLeft;
  }
  return [ scrOfX, scrOfY ];
}

var timer;

function ranrot()
{

var a = getScrollXY()
if(timer)
{
	clearTimeout(timer);
}
toppos = a[1];
dheight = nht+a[1];

timer = setTimeout('ranrot()',2000);
}
 	
ranrot();
 	
function iecompattest()
{
	if(document.compatMode && document.compatMode!="BackCompat")
	{
		return document.documentElement;
	}else{
		return document.body;
	}
	
}
if (ns6up) {
	dwidth = window.innerWidth;
	dheight = window.innerHeight;
} 
else if (ie4up) {
	dwidth = iecompattest().clientWidth;
	dheight = iecompattest().clientHeight;
}

nht = dheight;

var cv = new Array();
var px = new Array();       //variables position X
var py = new Array();      //variables position Y
var am = new Array();     //variables amplitude
var sx = new Array();    //variables step X
var sy = new Array();   //variables step Y

for (i = 0; i < no; ++ i) {  
	cv[i] = 0;
	px[i] = Math.random()*(dwidth-100);  // set variables position X
	py[i] = Math.random()*dheight;     // set variables position Y
	am[i] = Math.random()*20;         // set variables amplitude
	sx[i] = 0.02 + Math.random()/10;  // set variables step X
	sy[i] = 0.7 + Math.random();    // variables step Y
	document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px;LEFT: 15px;\"><img src='"+image+"' border=\"0\"><\/div>");
}

function animation() {  
	for (i = 0; i < no; ++ i) {  // répété pour chaque point
		py[i] += sy[i];
      		if (py[i] > dheight-50) {
        		px[i] = Math.random()*(dwidth-am[i]-100);
        		py[i] = toppos;
        		sx[i] = 0.02 + Math.random()/10;
        		sy[i] = 0.7 + Math.random();
      		}
      		cv[i] += sx[i];
      		document.getElementById("dot"+i).style.top=py[i]+"px";
      		document.getElementById("dot"+i).style.left=px[i] + am[i]*Math.sin(cv[i])+"px";  
    	}
    	atime=setTimeout("animation()", speed);

}

function hideimage(){
	if (window.atime) clearTimeout(atime)
		for (i=0; i<no; i++) 
			document.getElementById("dot"+i).style.visibility="hidden"
}
if (ie4up||ns6up){
animation();
if (time>0)
	setTimeout("hideimage()", time*1000)
}
animation();




