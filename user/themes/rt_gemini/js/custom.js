var anchortags = document.querySelectorAll("a");
var projectscontainer = document.querySelectorAll("#g-expanded.g-portfolio .portfolio-projects .modular-row.features");
var projectslinks = document.querySelectorAll("#g-expanded.g-portfolio .portfolio-projects .modular-row.features a");

window.onscroll = testScroll;
window.onload = testScroll();
window.onresize = testScroll;

window.onload = function() {
	var a = qs("link[rel='canonical']").getAttribute("href");
	var b = window.location.href;

	// run functions depending on the slug of current page e.g. change the border color of active tab in navbar
	if (a.search('portfolio') >= 0) {
		qs(".g-menu-item-portfolio a .g-menu-item-title").style.borderColor = "#a8f4b5";
	}

	else if (a.search('rates') >= 0) {
		qs(".g-menu-item-rates a .g-menu-item-title").style.borderColor = "#a8f4b5";
	}

	else if (a.search('news') >= 0) {
		qs(".g-menu-item-news a .g-menu-item-title").style.borderColor = "#a8f4b5";
	}

	else if ((a.substring(a.search('offshorly')) == "offshorly" ||
			a.substring(a.search('offshorly')) == "offshorly.com" ||
			a.substring(a.search('offshorly')) == "offshorly.com/" ||
			a.substring(a.search('offshorly')) == "offshorly/") &&
			(b.substring(b.search('offshorly')) == "offshorly" ||
			b.substring(b.search('offshorly')) == "offshorly.com" ||
			b.substring(b.search('offshorly')) == "offshorly.com/" ||
			b.substring(b.search('offshorly')) == "offshorly/")) {
		qs(".g-menu-item-home a .g-menu-item-title").style.borderColor = "#a8f4b5";
	}

	else {
		qs(".g-top-bg").style.maxHeight = "100vh";
	}
	//// run functions depending on the slug of current page e.g. change the border color of active tab in navbar

	if (gebi("contact-form") !== null) {
		// fix gantry forms thankyou page not showing after submission (because of empty fields) issue
		gebi("contact-form").onsubmit = function() {
			gebi("contact-form").elements["data[company]"].value += " ";
			gebi("contact-form").elements["data[number]"].value += " ";
			return true;
		}
		//// fix gantry forms thankyou page not showing after submission (because of empty fields) issue
	}

	// scroll to thank you statement after submitting a form
	if (a.search('thankyou') >= 0) {
		qs("#g-footer > .g-grid:first-child").style.display = "none";
		window.scrollTo(0,100000);
	}
	//// scroll to thank you statement after submitting a form

	// do not wrap links if 25 characters or less
	for (var i = 0; i < anchortags.length; i++) {
		var j = anchortags[i].innerHTML.replace(/[^A-Z0-9]/ig, '');
		if (j.length < 25) {
			anchortags[i].style.whiteSpace = 'nowrap';
		}
	}
	//// do not wrap links if 25 characters or less

	// open links in new tab
	for (var i = 0; i < anchortags.length; i++) {
		if (anchortags[i].getAttribute("href").search("http") > -1 && anchortags[i].getAttribute("href").search("offshorly") < 0) {
			anchortags[i].setAttribute('target', '_blank');
		}
	}
	//// open links in new tab

	// make the icon background at the top transparent if mix blend mode isnt supported
	if (typeof window.getComputedStyle(document.body).mixBlendMode === 'undefined') {
		gebi("g-top-icon").style.opacity = '0.4!important';
	}
	//// make the icon background at the top transparent if mix blend mode isnt supported
}

function testScroll(ev) {

	// the navigation bar fixed after scrolled > 0px
	var navlist = document.querySelectorAll("#g-navigation nav ul li.g-menu-item");

	if (window.pageYOffset > 0) {
		gebi("g-navigation").style.position = "fixed";
		gebi("g-navigation").style.backgroundColor = "#00b295";
		for (var i = navlist.length - 1; i >= 0; i--) {
			navlist[i].style.paddingTop = "15px";
			navlist[i].style.paddingBottom = "15px";
		}
	}

	else {
		gebi("g-navigation").style.position = "absolute";
		gebi("g-navigation").style.backgroundColor = "transparent";
		for (var i = navlist.length - 1; i >= 0; i--) {
			navlist[i].style.paddingTop = "25px";
			navlist[i].style.paddingBottom = "25px";
		}
	}
	//// the navigation bar fixed after scrolled > 0px

	// show back to top only when scrolled >= 200px
	if (window.pageYOffset >= 200) {
		gebi("g-back-to-top").style.opacity = "1";
		gebi("g-back-to-top-hover").style.cursor = "pointer";
		gebi("g-back-to-top-hover").style.visibility = "visible";
	}

	else {
		gebi("g-back-to-top").style.opacity = "0";
		gebi("g-back-to-top-hover").style.cursor = "default";
		gebi("g-back-to-top-hover").style.visibility = "hidden";
	}
	//// show back to top only when scrolled >= 200px

	// make the whole div of projects in portfolio page clickable in mobile
	if (window.innerWidth < 768) {
		for (var i = projectscontainer.length - 1; i >= 0; i--) {
			//projectscontainer[i].setAttribute("onclick", "javascript:location.href='" + projectslinks[i] + "'");
			projectscontainer[i].setAttribute("onclick", "javascript:window.open('" + projectslinks[i].getAttribute("href") + "', '_blank')");
		}
	}
	//// make the whole div of projects in portfolio page clickable in mobile
}

// smooth scrolling through anchor tags with href as #...
for (var i = anchortags.length - 1; i >= 0; i--) {
	if (anchortags[i].getAttribute("href").substring(0,1) == "#") {
		anchortags[i].addEventListener("click", function(event){
			event.preventDefault();
			scroller(this);
		});
	}
}

function scroller(a) {
	$bookmark = a;
	$bookmarkref = $bookmark.getAttribute("href");
	$bookmarkrefoffset = document.querySelector($bookmarkref).offsetTop;
	if ($bookmarkref.substring(0,1) == "#") {
		clearTimeout('autoscrollfunction');
		scrolldestination = $bookmarkrefoffset;
		if (scrolldestination < 0) scrolldestination = 0;
		setTimeout(function() {
			autoscrolltopageyoffset($bookmarkrefoffset);
		}, 0);
	}
}

function autoscrolltopageyoffset() {
	autoscrollfunction = setTimeout(function(){
		var document_height = Math.max( document.body.scrollHeight, document.body.offsetHeight );
		if (scrolldestination > (document_height - window.innerHeight) && window.pageYOffset == (document_height - window.innerHeight)) { return; }
		b = (Math.abs(window.pageYOffset - scrolldestination))/30;
		b = b-(b%1)+1;
		if (window.pageYOffset < scrolldestination) { window.scrollTo(0,window.pageYOffset+b); }
		else if (window.pageYOffset > scrolldestination) { window.scrollTo(0,window.pageYOffset-b); }
		else {
			return;
		}
		autoscrolltopageyoffset();
	}, 1);
}
//// smooth scrolling through anchor tags with href as #...

function gebi(a) {
	return document.getElementById(a);
}

function qs(a) {
	return document.querySelector(a);
}

function qsa(a) {
	return document.querySelectorAll(a);
}