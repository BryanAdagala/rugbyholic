 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="jquery.js"></script>
	<title>Tickets: Bamburi</title>
	<link rel="stylesheet" type="text/css" href="bedcrumbs/customizemenow.css"/>
	<!--jquery assets<script type="text/javascript" src="bedcrumbs/jquery-1.2.3.min.js"></script> -->   
	<script type="text/javascript"  src="bedcrumbs/jquery.form.js"></script>
	<!--jquery.ui.tabs assets-->
	<script type="text/javascript" src="bedcrumbs/ui.tabs.pack.js"></script>
	<link rel="stylesheet"  href="bedcrumbs/ui.tabs.css" type="text/css" media="print, projection, screen" />
	<script type="text/javascript">
	//when the document is ready
	$(document).ready(function() {		
	// validate and process form
	// first hide any error messages
	/* hide the breadcrumbs ul and show the tab ul */
		$('div.breadcrumb').hide();
		$('ul.navTabs').show();
		
		/*turn the newly visible ul into tabs*/
		var tabSet = $('ul.navTabs').eq(0).tabs(
			{
			/*apply a nice visual effect to tab activation*/
				fx: { height: 'toggle', opacity: 'toggle' },
			/*disable all but the first tab by default*/
				disabled: [1,2,3,4]
			}
		).bind('select.ui-tabs', function(event, ui) {
				/*
				ensure that each time a new tab is activated
				all subsequent tabs are disabled. This will
				prevent users from jumping around in the process
				*/
				var currentTab = parseInt(ui.tab.id.substring(3));
				var tabSetLength = 5;//a necessary hack
				for (var i = 0; i < tabSetLength; i++) {
					if (i > currentTab) {
						tabSet.tabs("disable", i);
					}
				}
		});

		/*
		bind the checkout and login links to new click
		handlers and cancel their original behavior.
		now, these links will open the fragment versions
		of their original targets inside the first tab.
		*/
		$("#checkoutAsGuest,#login").click(function() {
			$('#personalInfo')
				.load(
					$(this)
					.attr("href")
					.replace(".html", "-fragment.php")
				)
			;
			return false;
		});

	});
	</script>
</head>

<body id="CMN">
	<noscript>
	<style type="text/css">
	/*don't show tabs when JS disabled*/
	#CMN .navTabs {
		display: none;
	}
	/*without the tab box, disable border+padding*/
	#CMN .tabContent {
		padding: 0;
		border: 0;
	}
	/*without the tab labels, stop hiding h2s*/
	#CMN .tabContent h2 {
		display: block;
	}
	</style>
	</noscript>
	<div id="container"> 
	<div id="main">
	<h1>Bamburi Super Series Tickets</h1>
	<div class="breadcrumb nav">
	<ul>
		<li class="current">1. Welcome</li>
		<li>2. Review Info</li>
		<li class="last">3. Summary</li>
	</ul>
	</div>
	<ul class="navTabs">
		<li><a id="tab0" href="#ticketType"><span>1. Details</span></a></li>
		<li><a id="tab2" href="#personalInfo"><span>2. Payments</span></a></li>
		<li><a id="tab3" href="#summary"><span>3. Review Payment</span></a></li>
		<li><a id="tab4" href="#print"><span>4. Print</span></a></li>
	</ul>
	<div id="personalInfo" class="tabContent">
	<fieldset>
	<legend><em>Welcome</em></legend>
	<div class="form">
    <div id="drop">
	<form method="POST" id="form" action="">
	<blockquote>Welcome, to purchase Bamburi Super Rugby tickets click continue and fill the fields prodived. (*) indicates compulsory fields<blockquote>
	<div><a id="checkoutAsGuest">
	<input type="submit" value="Continue" id="checkoutAsGuest" class="button"/></a></div> 
	</form>
	</div>
	</div>
	</div>
	<div id="summary"></div>
	<div id="print"></div>
	</div>
	</div>
<div id="backgroundPopup"></div>
</fieldset>
<script type="text/javascript">
// bind the form and provide a callback function
$('#form').submit(function() { 

	//submit the form via ajax
	$(this).ajaxSubmit({ 
		target:     '#personalInfo', 
		url:        'bedcrumbs/checkout1-fragment.php', 
		success:    function() { 
			var tabSet = $('ul.navTabs');
			tabSet.tabs("enable", 0);
			tabSet.tabs("select", 0);
		}
	});
	//don't actually submit the form normally
	return false; 
});
</script>

</body>
</html>
