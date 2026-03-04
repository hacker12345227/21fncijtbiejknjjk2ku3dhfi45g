

/* 1_normalize.css */

/*! normalize.css v3.0.1 | MIT License | git.io/normalize */

/**
 * 1. Set default font family to sans-serif.
 * 2. Prevent iOS text size adjust after orientation change, without disabling
 *    user zoom.
 */

html {
    font-family: sans-serif; /* 1 */
    -ms-text-size-adjust: 100%; /* 2 */
    -webkit-text-size-adjust: 100%; /* 2 */
}

/**
 * Remove default margin.
 */

body {
    margin: 0;
}

/* HTML5 display definitions
========================================================================== */

/**
 * Correct `block` display not defined for any HTML5 element in IE 8/9.
 * Correct `block` display not defined for `details` or `summary` in IE 10/11 and Firefox.
 * Correct `block` display not defined for `main` in IE 11.
 */

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
    display: block;
}

/**
 * 1. Correct `inline-block` display not defined in IE 8/9.
 * 2. Normalize vertical alignment of `progress` in Chrome, Firefox, and Opera.
 */

audio,
canvas,
progress,
video {
    display: inline-block; /* 1 */
    vertical-align: baseline; /* 2 */
}

/**
 * Prevent modern browsers from displaying `audio` without controls.
 * Remove excess height in iOS 5 devices.
 */

audio:not([controls]) {
    display: none;
    height: 0;
}

/**
 * Address `[hidden]` styling not present in IE 8/9/10.
 * Hide the `template` element in IE 8/9/11, Safari, and Firefox < 22.
 */

[hidden],
template {
    display: none;
}

/* Links
========================================================================== */

/**
 * Remove the gray background color from active links in IE 10.
 */

a {
    background: transparent;
}

/**
 * Improve readability when focused and also mouse hovered in all browsers.
 */

a:active,
a:hover {
    outline: 0;
}

/* Text-level semantics
========================================================================== */

/**
 * Address styling not present in IE 8/9/10/11, Safari, and Chrome.
 */

abbr[title] {
    border-bottom: 1px dotted;
}

/**
 * Address style set to `bolder` in Firefox 4+, Safari, and Chrome.
 */

b,
strong {
    font-weight: bold;
}

/**
 * Address styling not present in Safari and Chrome.
 */

dfn {
    font-style: italic;
}

/**
 * Address variable `h1` font-size and margin within `section` and `article`
 * contexts in Firefox 4+, Safari, and Chrome.
 */

h1 {
    font-size: 2em;
    margin: 0.67em 0;
}

/**
 * Address styling not present in IE 8/9.
 */

mark {
    background: #ff0;
    color: #000;
}

/**
 * Address inconsistent and variable font size in all browsers.
 */

small {
    font-size: 80%;
}

/**
 * Prevent `sub` and `sup` affecting `line-height` in all browsers.
 */

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

/* Embedded content
========================================================================== */

/**
 * Remove border when inside `a` element in IE 8/9/10.
 */

img {
    border: 0;
}

/**
 * Correct overflow not hidden in IE 9/10/11.
 */

svg:not(:root) {
    overflow: hidden;
}

/* Grouping content
========================================================================== */

/**
 * Address margin not present in IE 8/9 and Safari.
 */

figure {
    margin: 1em 40px;
}

/**
 * Address differences between Firefox and other browsers.
 */

hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
}

/**
 * Contain overflow in all browsers.
 */

pre {
    overflow: auto;
}

/**
 * Address odd `em`-unit font size rendering in all browsers.
 */

code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em;
}

/* Forms
========================================================================== */

/**
 * Known limitation: by default, Chrome and Safari on OS X allow very limited
 * styling of `select`, unless a `border` property is set.
 */

/**
 * 1. Correct color not being inherited.
 *    Known issue: affects color of disabled elements.
 * 2. Correct font properties not being inherited.
 * 3. Address margins set differently in Firefox 4+, Safari, and Chrome.
 */

button,
input,
optgroup,
select,
textarea {
    color: inherit; /* 1 */
    font: inherit; /* 2 */
    margin: 0; /* 3 */
}

/**
 * Address `overflow` set to `hidden` in IE 8/9/10/11.
 */

button {
    overflow: visible;
}

/**
 * Address inconsistent `text-transform` inheritance for `button` and `select`.
 * All other form control elements do not inherit `text-transform` values.
 * Correct `button` style inheritance in Firefox, IE 8/9/10/11, and Opera.
 * Correct `select` style inheritance in Firefox.
 */

button,
select {
    text-transform: none;
}

/**
 * 1. Avoid the WebKit bug in Android 4.0.* where (2) destroys native `audio`
 *    and `video` controls.
 * 2. Correct inability to style clickable `input` types in iOS.
 * 3. Improve usability and consistency of cursor style between image-type
 *    `input` and others.
 */

button,
html input[type="button"], /* 1 */
input[type="reset"],
input[type="submit"] {
    -webkit-appearance: button; /* 2 */
    cursor: pointer; /* 3 */
}

/**
 * Re-set default cursor for disabled elements.
 */

button[disabled],
html input[disabled] {
    cursor: default;
}

/**
 * Remove inner padding and border in Firefox 4+.
 */

button::-moz-focus-inner,
input::-moz-focus-inner {
    border: 0;
    padding: 0;
}

/**
 * Address Firefox 4+ setting `line-height` on `input` using `!important` in
 * the UA stylesheet.
 */

input {
    line-height: normal;
}

/**
 * It's recommended that you don't attempt to style these elements.
 * Firefox's implementation doesn't respect box-sizing, padding, or width.
 *
 * 1. Address box sizing set to `content-box` in IE 8/9/10.
 * 2. Remove excess padding in IE 8/9/10.
 */

input[type="checkbox"],
input[type="radio"] {
    box-sizing: border-box; /* 1 */
    padding: 0; /* 2 */
}

/**
 * Fix the cursor style for Chrome's increment/decrement buttons. For certain
 * `font-size` values of the `input`, it causes the cursor style of the
 * decrement button to change from `default` to `text`.
 */

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    height: auto;
}

/**
 * 1. Address `appearance` set to `searchfield` in Safari and Chrome.
 * 2. Address `box-sizing` set to `border-box` in Safari and Chrome
 *    (include `-moz` to future-proof).
 */

input[type="search"] {
    -webkit-appearance: textfield; /* 1 */
    -moz-box-sizing: content-box;
    -webkit-box-sizing: content-box; /* 2 */
    box-sizing: content-box;
}

/**
 * Remove inner padding and search cancel button in Safari and Chrome on OS X.
 * Safari (but not Chrome) clips the cancel button when the search input has
 * padding (and `textfield` appearance).
 */

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
    -webkit-appearance: none;
}

/**
 * Define consistent border, margin, and padding.
 */

fieldset {
    border: 1px solid #c0c0c0;
    margin: 0 2px;
    padding: 0.35em 0.625em 0.75em;
}

/**
 * 1. Correct `color` not being inherited in IE 8/9/10/11.
 * 2. Remove padding so people aren't caught out if they zero out fieldsets.
 */

legend {
    border: 0; /* 1 */
    padding: 0; /* 2 */
}

/**
 * Remove default vertical scrollbar in IE 8/9/10/11.
 */

textarea {
    overflow: auto;
}

/**
 * Don't inherit the `font-weight` (applied by a rule above).
 * NOTE: the default cannot safely be changed in Chrome and Safari on OS X.
 */

optgroup {
    font-weight: bold;
}

/* Tables
========================================================================== */

/**
 * Remove most spacing between table cells.
 */

table {
    border-collapse: collapse;
    border-spacing: 0;
}

td,
th {
    padding: 0;
}


/* 3_flexnav.css */

.flexnav{ -webkit-transition:none; -moz-transition:none; -ms-transition:none; transition:none; -webkit-transform-style:preserve-3d; overflow:hidden; margin:0 auto; width:100%; max-height:0; position: relative; z-index: 999}
.flexnav.opacity{ opacity:0}
.flexnav.flexnav-show{ max-height:2000px; opacity:1; -webkit-transition:all .5s ease-in-out; -moz-transition:all .5s ease-in-out; -ms-transition:all .5s ease-in-out; transition:all .5s ease-in-out}
.flexnav li{ position:relative; overflow:hidden; border-bottom:1px solid rgba(0,0,0,0.15); }
.flexnav li a{ position:relative; display:block; z-index:2; overflow:hidden}
.flexnav li ul{ width:100%; }
.flexnav li ul li{ position:relative; overflow:hidden}
.flexnav li ul.flexnav-show li{ overflow:visible; z-index:999;}
.flexnav li ul li a{ display:block}

.flexnav .touch-button{ position:absolute; z-index:999; top:0; right:0; width:50px; display:inline-block; background:rgba(0,0,0,0.125); text-align:center}
.flexnav .touch-button:hover{ cursor:pointer}

.menu-button{ position:relative; display:block; border-bottom:1px solid rgba(0,0,0,0.15); border-top:1px solid rgba(0,0,0,0.15); cursor: pointer; text-align:center; line-height: 50px;}
.menu-button .touch-button{ background:rgba(0,0,0,0.125); position:absolute; z-index:999; top:0; right:0; width:50px; height:50px; display:inline-block;}
.menu-button .touch-button .navicon{ position:relative;font-style: normal;}

.menu-button i, .flexnav i {font-style:normal !important}

/* min-width: 0px voor geen mobiele website */
@media all and (min-width:990px) { 
	.flexnav{ overflow:visible}
	.flexnav.opacity{ opacity:1}
	.flexnav li{ position:relative; list-style:none; float:left; display:block; overflow:visible; border-bottom:none}
	.flexnav li >ul{ position:absolute; top:auto; left:0; width:auto}
	.flexnav li >ul li{ width:100%}
	.flexnav li ul li >ul{ margin-left:100%; top:0}
	.flexnav li ul li a{ border-bottom:none}
	.flexnav li ul.open{ display:block; opacity:1; visibility:visible; z-index:1}
	.flexnav li ul.open li{ overflow:visible; max-height:100px}
	.flexnav li ul.open ul.open{ margin-left:100%; top:0}
	.menu-button{ display:none}
}
/*
.oldie .flexnav{ overflow:visible}
.oldie .flexnav li{ position:relative; list-style:none; float:left; display:block; width:20%; min-height:50px; overflow:visible}
.oldie .flexnav li:hover >ul{ display:block; width:100%; overflow:visible}
.oldie .flexnav li:hover >ul li{ width:100%; float:none}
.oldie .flexnav li a{ overflow:visible}
.oldie .flexnav li >ul{ position:absolute; top:auto; left:0; display:none; z-index:1; overflow:visible}
.oldie .flexnav li ul li ul{ top:0}
.oldie .flexnav li ul li a{ border-bottom:none}
.oldie .flexnav li ul.open{ display:block; width:100%; overflow:visible}
.oldie .flexnav li ul.open li{ width:100%}
.oldie .flexnav li ul.open ul.open{ margin-left:100%; top:0; display:block; width:100%; overflow:visible}
.oldie .flexnav ul li:hover ul{ margin-left:100%; top:0}
.oldie .menu-button{ display:none}
*/


/* 4_flexslider.css */

/*
 * jQuery FlexSlider v2.2.0
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 */


/* Browser Resets
*********************************/
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;}

/* Icon Fonts
*********************************/
/* Font-face Icons */
@font-face {
	font-family: 'flexslider-icon';
	src:url('//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/fonts/flexslider-icon.eot');
	src:url('//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'),
		url('//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/fonts/flexslider-icon.woff') format('woff'),
		url('//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/fonts/flexslider-icon.ttf') format('truetype'),
		url('//cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.2/fonts/flexslider-icon.svg#flexslider-icon') format('svg');
	font-weight: normal;
	font-style: normal;
	font-size: 
}

/* FlexSlider Necessary Styles
*********************************/
.flexslider {margin: 0; padding: 0; line-height: 1;}
.flexslider .slides > li {display: none; -webkit-backface-visibility: hidden;} /* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides img {width: 100%; display: block;}
.flex-pauseplay span {text-transform: capitalize;}

/* Clearfix for the .slides element */
.slides:after {content: "\0020"; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;}
html[xmlns] .slides {display: block;}
* html .slides {height: 1%;}

/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
 * include js that eliminates this class on page load */
.no-js .slides > li:first-child {display: block;}

/* FlexSlider Default Theme
*********************************/
.flexslider { margin: 0 0 20px; background: #fff; position: relative; zoom: 1; }
.flex-viewport { max-height: 2000px; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; -o-transition: all 1s ease; transition: all 1s ease; }
.loading .flex-viewport { max-height: 300px; }
.flexslider .slides { zoom: 1; }
.carousel li { margin-right: 5px; }

/* Direction Nav */
.flex-direction-nav {*height: 0;}
.flex-direction-nav a  { text-decoration:none; display: block; width: 40px; height: 40px; margin: -20px 0 0; position: absolute; top: 50%; z-index: 10; overflow: hidden; opacity: 0; cursor: pointer; color: rgba(0,0,0,0.6); text-shadow: 1px 1px 0 rgba(255,255,255,0.4); -webkit-transition: all .3s ease; -moz-transition: all .3s ease; transition: all .3s ease; }
.flex-direction-nav .flex-prev { left: -50px; }
.flex-direction-nav .flex-next { right: -50px; text-align: right; }
.flexslider:hover .flex-prev { opacity: 0.7; left: 10px; }
.flexslider:hover .flex-next { opacity: 0.7; right: 10px; }
.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover { opacity: 1; }
.flex-direction-nav .flex-disabled { opacity: 0!important; filter:alpha(opacity=0); cursor: default; }
.flex-direction-nav a:before  { font-family: "flexslider-icon"; font-size: 40px; display: inline-block; content: '\f001'; }
.flex-direction-nav a.flex-next:before  { content: '\f002'; }

/* Pause/Play */
.flex-pauseplay a { display: block; width: 20px; height: 20px; position: absolute; bottom: 5px; left: 10px; opacity: 0.8; z-index: 10; overflow: hidden; cursor: pointer; color: #000; }
.flex-pauseplay a:before  { font-family: "flexslider-icon"; font-size: 20px; display: inline-block; content: '\f004'; }
.flex-pauseplay a:hover  { opacity: 1; }
.flex-pauseplay a.flex-play:before { content: '\f003'; }

/* Control Nav */
.flex-control-nav {width: 100%; position: absolute; bottom: 20px; text-align: center; z-index:10;}
.flex-control-nav li {margin: 0 6px; display: inline-block; zoom: 1; *display: inline;}
.flex-control-paging li a {width: 11px; height: 11px; display: block; background: #666; background: rgba(0,0,0,0.3); cursor: pointer; text-indent: -9999px; -webkit-border-radius: 20px; -moz-border-radius: 20px; -o-border-radius: 20px; border-radius: 20px; -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -moz-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -o-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); box-shadow: inset 0 0 3px rgba(0,0,0,0.3); }
.flex-control-paging li a:hover { background: #333; background: rgba(0,0,0,0.75); }
.flex-control-paging li a.flex-active { background: #000; background: rgba(0,0,0,0.6); cursor: default; }

.flex-control-thumbs {margin: 5px 0 0; position: static; overflow: hidden;}
.flex-control-thumbs li {width: 25%; float: left; margin: 0;}
.flex-control-thumbs img {width: 100%; display: block; opacity: .7; cursor: pointer;}
.flex-control-thumbs img:hover {opacity: 1;}
.flex-control-thumbs .flex-active {opacity: 1; cursor: default;}

@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev { opacity: 1; left: 10px;}
  .flex-direction-nav .flex-next { opacity: 1; right: 10px;}
}


/* 8_custom.css */

* { box-sizing: border-box; }

body { line-height: 175%; font-family: 'Open Sans', sans-serif; color: #4a4a4a; font-size: 16px; background: #fff}
.clear { clear: both; height: 0; }
.button , .column a, .button.inverted:hover {display: inline-block; padding: 0 20px; min-width: 200px; height:50px; line-height: 50px; text-transform: uppercase; font-size: 16px; text-align: center; text-decoration: none; cursor: pointer; color: #fff; background: #22afe4; }
.button:hover, .column a:hover, #teaserCntr .sliderCaption a:hover, .button.inverted {background: #fff; color: #4b4746}
h1 {font-size: 32px; text-transform: uppercase; font-weight: 600; margin-bottom: 10px; color: #26abe2;}
h2, .title {font-size: 24px; font-weight: normal;margin-bottom: 5px; color: #4a4a4a;}
h3 {font-size: 20px;ext-transform: uppercase;color: #26abe2;}
h4 {font-size: 16px;}
p { margin-bottom: 10px;}
a {color: #22afe4;}
a:hover {color: #000;}
.column h4 {color: #696e72;}
form { background: none; border-radius: 5px; padding: 10px 0px; clear: both; text-align: center}
input, textarea, select{margin:1px; border:1px solid #aaa; padding:3px;}
input, select{width:355px}
textarea{width:355px}
form p {clear: both;}
fieldset { border: none; padding: 0px; }
legend  { font-size: 11px}
.quote {font-style:italic}
form label{display:inline-block;width:200px; line-height:34px; margin-bottom: 5px; vertical-align:top}
ul {list-style: none; margin: 0; padding: 0;}
article ol { margin: 10px 20px;}
article ul {list-style: disc; margin: 10px 20px;}
.breadcrumb {border-bottom: 1px solid #ddd; font-size: 12px}
.container {width: 960px; margin: 0 auto;clear:both;}
.container:after {visibility: hidden;display: block;font-size: 0;content: " ";clear: both;height: 0;}
.pull-right {float: right}
.clickable {cursor: pointer}

header{padding-top: 10px;}
header .logo {float: left;}
header .logo:hover {opacity: 0.6}
header .adres {float: right; font-size: 12px; line-height: 32px;}
/* header.slogan span {  padding: 10px 0; float: right; color:#f15c22; font-weight: bold;} */
header .headerbuttons {float: right;  color: #22afe4 ; margin-top: 40px }
header .headerbuttons a {display: inline-block}
header .headerbuttons .imgfb{ float: left; margin-right: 15px}
header .headerbuttons .button {margin-left: 15px}
header .headerbuttons span {color: #22afe4}

nav {height:100px; clear: both; text-transform: uppercase;  z-index: 2; position: relative; font-weight: 600 }
nav.fixed {position: fixed; top: 0;}
nav ul a {text-decoration: none; color: #4a4a4a; }
nav ul li a:hover, nav ul li:hover a, nav ul li.active a  {color: #22afe4}
nav ul li ul {background: #fff; min-width: 260px; display: none; padding: 15px 10px 10px 10px;}
nav ul li:hover ul li a {color: #fff; background: none;}
nav ul li:hover ul li:hover a {color: #22afe4}

nav ul.lg-screen a {margin: 0 9px; font-size:14px; }
nav ul.lg-screen li {line-height: 100px; }
nav ul.lg-screen li li {line-height: 40px; }
nav ul.sm-screen li {line-height: 50px; }

/* blokje navigatie
nav .flexnav.lg-screen .touch-button{ background:#ddd; border-radius: 15px; width: 10px; color:#fff; right: 15px;}
nav .flexnav.lg-screen li.item-with-ul a{padding-right:30px}
*/

nav .flexnav.lg-screen .touch-button{ background: none; right: 26px; font-size: 10px}
nav .flexnav.lg-screen li.item-with-ul a{padding-right:20px}

nav .lg-screen .navicon{ color:#999;}
nav .lg-screen .touch-button {background: #fff}

#teaser {width: 100% !important;height: 600px; overflow: hidden; background: url('/images/hero.jpg'); background-size: cover}
/*#teaser .flexslider{ height: 600px; }
#teaser .sliderCaption {background: #f15c22;width: 240px; height: 220px; position: relative; top: -360px; right: 20px; padding: 0 20px; float: right;}
#teaser .sliderCaption p{  color: #fff; width: 240px; height: auto; position: relative; top: 0px; padding:10px 0px; font-size: 25px; line-height: 100%;} 
#teaser .sliderCaption h3 {background: #f15c22; border-bottom: 3px solid #fff; font-size: 26px; padding: 20px 0px; color: #fff; text-align: left; width: 240px; }
#teaser .sliderCaption a {font-weight: normal;float: left; width: 235px; background-repeat: no-repeat; background-position: 230px 0px; font-size: 50%; height: 68px; line-height: 68px; margin-top: 20px; margin-left: -20px; text-align: left; padding-left: 35px; }
#teaser .sliderCaption a { background-image:url('/images/btn-pijl.png');}*/

#teaser .container {padding-top: 150px; text-align: center; text-transform: uppercase; line-height: 200%}

#teaser .title {font-weight: 800; color: #46c5f0; font-size: 26px; margin: 0 0 15px 0}
#teaser .large {font-weight: 800; color: #fff; font-size: 52px; margin: 0 0 45px 0; line-height: 100%}

#blokken {padding: 45px 0}
.column{float:left;width: 50%; padding: 2%; height: 450px;}
.column.first{background: url('/images/fotoovermij.jpg'); background-size: cover}

.red_bg {color:#fff !important; background: #d50404}

article {text-align: center;font-size: 18px; padding-top: 60px; padding-bottom: 60px}
article #homecontent {float: left;width: 600px; padding: 0 10px; }
article #nieuws {float: right; width: 280px; }
article #nieuws li {margin: 10px 0;border-bottom: 1px solid #888; padding-bottom: 5px; clear: both;}
article #nieuws li a {text-decoration: none; font-weight: bold;}
article #nieuws img {float: left; margin-right: 5px;}

article ul.fotoalbum {list-style: none; margin: 0;}
article ul.fotoalbum li {float: left; margin: 0 10px 10px 0px;}
article ul.fotoalbum li .imageholder {display: block; width: 240px; height: 160px; overflow: hidden;}
article ul.fotoalbum li a {text-decoration: none;}

.contactbar {background: url('/images/bg-contact.jpg'); color: #fff; text-align: center; padding: 60px 15px; background-size: cover}
.contactbar .large {text-transform: uppercase; font-size: 28px; font-weight: 600;}
.contactbar .large a {font-weight: normal; color: #fff}

#diensten {padding: 60px 15px}
#diensten a {display:block; float: left; width: 14%; text-align: center; font-weight: bold; color: #3b3b3b; text-transform: uppercase; text-decoration: none; padding: 1%}
#diensten a:hover {color: #22afe4}
#diensten a img {max-width: 80%;}

#socialmedia #facebook, #socialmedia #twitter {width: 50%; float: left;}
#socialmedia #twitter li { margin: 0; padding-top: 10px; clear: both;}
#socialmedia #twitter .twitterAuthor {padding-bottom: 10px; margin-bottom: 10px; font-weight: bold;}
#socialmedia #twitter .twitterTime {color: #777; float: right;}
#socialmedia #twitter p a {text-decoration: none;}

footer { padding: 60px 0;}
footer .footerMenu {width:235px;  float: left; margin-right: 10px; font-size: 11px; text-transform: uppercase}
footer .footerMenu.first { width: 260px}
footer .footerMenu.last { margin-right: 0; width: 130px; float: right;}
footer .footerMenu p {margin: 0}
footer .footerMenu li a {text-decoration: none; color: #494544}

footer #footer {text-align: center; padding: 20px 0; font-size: 12px; }
footer .button {color: #fff; float: right; margin-bottom: 10px; font-size: 14px  }
footer .button.facebook {background: #e5e5e5 url('/images/facebook-button.png') left center no-repeat; color: #464646 }


/* css3 animations */
a, a img, .button { -webkit-transition: all 0.4s ease; -moz-transition: all 0.4s ease; -o-transition: all 0.4s ease; transition: all 0.4s ease;}
/* no animations for */
.flexslider a , nav a { -webkit-transition: all 0s ease; -moz-transition: all 0s ease; -o-transition: all 0s ease; transition: all 0s ease;}

/* 9_responsive.css */

/* responsive voor mobiel portrait, landscape, kleine tablets en ipad portrait */
@media screen and (max-width: 990px) {
	.hidemobile {display: none;}
	.container {width: 98%; padding-left: 1%; padding-right: 1%}
	img {max-width: 100% !important; height: auto !important}
	footer .footerMenu, footer .footerMenu.last {width: 100%; text-align: center; padding: 0px; margin-right: 0; margin: 0px auto; }
	.columnCntr { height: auto; padding: 20px 0; clear: both; background: rgba(0,0,0,.10)}
	.column.last {float:none; margin-right: auto}
	
	article td { clear:both; vertical-align: top; padding-right: 1px;}
	article table{ width:100%!important; font-size:75%; display: table-cell;} 
	input, select{width:95%; }
	textarea{width:95%;}
	input[type="checkbox"]{border:none; width:15px}
	form { background: none; width: 100%; border-radius: 5px; padding: 10px 0px; clear: both;}
	form p {clear: both;}

	#teaser .blok {float: none; width: 100%}
	#nieuws li {float: none; width: 100%; margin: 0 0 30px 0}
	
	nav {height: auto}
}
/* responsive voor mobiel portrait, landscape, kleine tablets */
@media screen and (max-width: 768px) {
	.column, #nieuws li {margin: 10px auto;float: none; width: auto }
    .footerMenu .button {float: none}
	nav {height: auto; text-align: center}
    header {text-align: center}
    header .logo, header .slogan, header .adres, header .headerbuttons {float: none; display: block; margin: 15px 0}
	#teaser {height: 100px}
	#pakketten, #pakketten .inner {top: 0px; position: inherit}
	#pakketten .pakket {width: 50%}
	#socialmedia #facebook, #socialmedia #twitter {width: 100%; float: none;}
	#diensten a {display:block; float: left; width: 50%; height: 150px}
	footer .footerMenu.first {width: 100%;}
	#teaser {height: 250px;}
	#teaser .title {display: none;}
	#teaser .large {display: none;}
	#teaser .container p a {margin-bottom: 10px;}
	#teaser .container {padding-top: 50px;}
	
}
/* responsive voor ipad portrait */
@media screen and (min-width: 768px) and (max-width: 989px) {
	.column, #nieuws li {margin: 10px auto !important; float: left !important; width: 50%; padding: 10px; border-radius: 0;}
	#teaser {height: 200px;}
	#teaser .title {display: none;}
	#teaser .large {display: none;}
	#teaser .container p a {margin-bottom: 10px;}
	#teaser .container {padding-top: 50px;}
}
