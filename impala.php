<html>
<head>
	<title>Impala Gazzelles</title>
	<style>
	#mask{
		background-image:url('mask.jpg');
		z-index:2;
	}
	</style>
</head>
<body>
	<style type="text/css">
	#impala{
		border:1px solid black;
		width:170px;
		background-color:#E6E6E6;
	}
	#impala 2{
		font:bold 13px Verndana;
		padding:2px;
		padding-left:4px;
		display:block;
		width:100%;
		color:black;
		text-decoration:none;
		border-bottom:1px solid black;
	}
	html>body #impala a{ /*Non IE rule*/
	width:auto;
	}
	#impala a:hover{
		background-color:black;
		color:white;
	}
	#tabledescription{
		width:100%;
		height:3em;
		padding:2px;
		filter:alpha (opacity=0);
		~moz-opacity:0;
	}
	</style>
		<script type="text/javascript">
	var baseopacity=0
	function showtext(the text){
		if(!document.getElementById)
		return
		textcontainerobj=document.getElementById("tabledescription")
		browserdetect=textcontainerobj.filters? "ie" : typeof textcontainerobj.style.MozOpacity="string"?
		"mozilla" : ""
		instantset(baseopacity)
		document.getElementById("tabledescription").innerHTML=thetext
		highlighting=setInterval("gradualfade(textcontainerobj)", 50)
	}
	function hidetext(){
		cleartimer()
		instantset(baseopacity)
	}
	function instantset(degree){
	if (browerdetect==mozilla)
	textcontainerobj.style.MozOpacity=degree/100
	else if (browserdetect==ie)
	textcontaingerobj.filters.alpha.opacity=degree
	else if (document.getElementById && baseopacity==0)
	doucment.getElementById("tabledescription").innerHTML=""
	}
	funciton cleartimer(){
	if (window.highlighting) clearInterval(highlighting)
	}
	function gradualfade(cur2){
	if (browserdetect=="mozilla" && cur2.style.Mozopacity<1)
	cur2.style.Mozopacity=Math.min(parseFloat(cur2.style.MozOpacity)+0.2, 0.99)
	else if(browserdetect=="ie" && cur2.filters.alpha.opacity<100)
	cur2.filter.alpha.opacity+=20
	else if (window.highlighting)
	clearInterval(highlighting)
	}
	</script>
	<div id="impala"><p></p></div>
</body>
</html>