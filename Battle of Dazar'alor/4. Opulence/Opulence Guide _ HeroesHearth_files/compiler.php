/*
dark purple: #db880f
light purple: #db880f
light gray: #e4e4e4
medium gray: #bebebe
*/

body {
	color: #000000;
	font-family: 'Overpass', sans-serif;
	font-size: 16px;
	line-height: 1.6;
	margin: 0;
}

.body-background {
	background-color: /*body-background*/#ffffff;
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: -1;
}

.body-background {
	background-image: url('https://heroeshearth.com/media/2019/01/04/ec1bm1yjqfc0uhwmp5uy.jpg');
	background-size: cover;
	background-position: center;
	background-color: #000000;
	
}

.gradient-background {
	background-image: -ms-linear-gradient(top, /*gradient-top*/#AAAAAA 0%, /*gradient-bottom*/#ffffff 100%);
	background-image: -moz-linear-gradient(top, /*gradient-top*/#AAAAAA 0%, /*gradient-bottom*/#ffffff 100%);
	background-image: -o-linear-gradient(top, /*gradient-top*/#AAAAAA 0%, /*gradient-bottom*/#ffffff 100%);
	background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, /*gradient-top*/#AAAAAA), color-stop(100, /*gradient-bottom*/#ffffff));
	background-image: -webkit-linear-gradient(top, /*gradient-top*/#AAAAAA 0%, /*gradient-bottom*/#ffffff 100%);
	background-image: linear-gradient(to bottom, /*gradient-top*/#AAAAAA 0%, /*gradient-bottom*/#ffffff 100%);
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 10%;
	z-index: -1;
}

.scheme-background {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: -1;
	background-position: center top;
	background-size: 1500px auto;
	background-repeat: no-repeat;
	/*scheme-background-url*/
	/*scheme-background-size*/
	/*scheme-background-position*/
}


.scheme-background img {
	width: 1500px;
	margin: 0 auto;
	display: block;
}

.scheme-background-logo {
	position: fixed;
	bottom: 3vw;
	right: 3vw;
	width: 10vw;
	height: 10vw;
	z-index: -1;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	/*scheme-background-logo-url*/
}

a {
	text-decoration: none;
}

a, input, span {
	transition: all 0.2s;
}

form {
	display: inline;
}

a:hover, input:hover, span:hover, span:focus, a:focus, input:focus {
	transition: all 0.2s;
}

div, input {
	box-sizing: border-box;
}

input[type=submit] {
	cursor: pointer;
}

.nodisplay {
	display: none;
}

.row {
	margin-bottom: 20px;
}

.center {
	text-align: center;
}

.bold {
	font-weight: bold;
}

.bigger {
	font-size: 120%;
}

.smaller {
	font-size: 80%;
}

.clear {
	clear: both;
}

.relative {
	position: relative;
}

.float-right {
	float: right;
}

.check-label {
	cursor: pointer;
	display: block;
}

.check-label input[type=checkbox] {
	vertical-align: middle;
}

#page {
	width: 1090px;
	box-sizing: border-box;
	margin: 60px auto 0 auto;
	position: relative;
	min-height: calc(100vh - 100px);
}

#page.post {
	padding: 0;
	border-left: solid 1px #dfdfdf;
	border-right: solid 1px #dfdfdf;
}

#page.post .main-sorter {
	padding-right: 10px;
	padding-top: 20px;
}

#page.post .main-sorter #mainbar {
	border-left: 0;
}

#landing {
	position: relative;
	margin: 60px 0 0 0;
	min-height: calc(100vh - 100px);
}

.shade {
	position: fixed;
	z-index: 999;
	background-color: #000000;
	opacity: 0.9;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	display: none;
}

.delete {
	position: fixed;
	width: 400px;
	text-align: center;
	padding: 20px;
	z-index: 1000;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	border: solid 20px #FF0000;
	font-size: 14px;
	font-weight: 700;
	background-color: #FFFFFF;
	display: none;
	font-family: 'Overpass', sans-serif;
}

.delete a {
	margin: 5px;
	display: inline-block;
	font-size: 20px;
	padding: 5px;
	border: solid 2px #000000;
	text-transform: uppercase;
	background-color: #FFFFFF;
	font-family: 'Teko', sans-serif;
	color: #000000;
	border-radius: 2px;
}

.delete a:hover {
	color: #ffffff;
	background-color: #000000;
}

.standard-button {
	font-size: 14px;
	color: #FFFFFF;
	background-color: #db880f;
	padding: 4px;
	line-height: 1;
	margin-top: -11px;
	display: inline-block;
	border: 0;
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}

.standard-button:hover {
	background-color: #db880f;
}

.standard-button.disabled {
	background-color: #ababab;
	cursor: no-drop;
}

.standard-button.disabled:hover {
	background-color: #ababab;
}

.hexagon {
	display: inline-block;
	height: 17px;
	width: 14px;
	position: relative;
	margin-right: 20px;
	margin-left: 20px;
	vertical-align: middle;
}

.hexagon .middle {
	position: absolute;
	background-color: #db880f;
	height: 7px;
	width: 14px;
	top: 5px;
	left: 0;
}

.hexagon .top {
	position: absolute;
	width: 0;
	height: 0;
	border-bottom: solid 5px #db880f;
	border-left: solid 7px transparent;
	border-right: solid 7px transparent;
	left: 0;
	top: 0;
}

.hexagon .bottom {
	position: absolute;
	width: 0;
	height: 0;
	border-top: solid 5px #db880f;
	border-left: solid 7px transparent;
	border-right: solid 7px transparent;
	left: 0;
	bottom: 0;
}

.alert {
	position: fixed;
	width: 500px;
	top: 50%;
	left: 50%;
	margin-left: -250px;
	padding: 20px;
	box-sizing: border-box;
	margin-top: -200px;
	border: solid 2px #778aa0;
	background-color: #d2e0f0;
	text-align: center;
	font-weight: bold;
	z-index: 1000;
	display: none;
}

.filter-menu {
	position: absolute;
	list-style: none;
	right: 0;
	top: 180px;
	text-align: right;
}

.filter-menu li {
	margin-bottom: 6px;
	position: relative;
	height: 22px;
	width: 40px;
	display: block;
}

.filter-menu a:not(.hashtag-search-button) {
	color: #db880f;
	text-decoration: none;
	font-family: Arial, Helvetica, sans-serif;
	text-transform: uppercase;
	display: block;
	border: solid 1px #db880f;
	font-size: 12px;
	padding: 2px;
	text-align: center;
	position: absolute;
	top: 0;
	right: 0;
	white-space: nowrap;
	min-width: 50px;
}

.filter-menu a .long {
	display: none;
}

.filter-menu a span {
	color: inherit;
}

.filter-menu a:hover, .filter-menu a.selected {
	background-color: #db880f;
	color: #FFFFFF;
}

.filter-menu a:hover .short {
	display: none;
}

.filter-menu a:hover .long {
	display: inline;
}

#sidebar {
	width: 300px;
	float: right;
	position: relative;
	min-height: 300px;
}

#mainbar {
	width: 730px;
	float: left;
}

#page.post #mainbar {
	border-left: solid 1px #dfdfdf;
	margin-right: 0;
}

.pretty-checker {
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	font-size: 14px;
	color: #db880f;
	line-height: 14px;
	cursor: pointer;
}

.pretty-checker .check-circle {
	display: inline-block;
	width: 14px;
	height: 14px;
	vertical-align: middle;
	position: relative;
	border-radius: 50%;
	border: solid 1px #db880f;
	transition: all 0.2s;
}

.pretty-checker .check-circle .indicator {
	position: absolute;
	width: 12px;
	height: 12px;
	display: block;
	border-radius: 50%;
	background-color: #db880f;
	top: 1px;
	left: 1px;
	transition: all 0.2s;
}

.pretty-checker:hover .check-circle {
	border-color: #db880f;
	transition: all 0.2s;
}

.pretty-checker:hover .check-circle .indicator {
	background-color: #db880f;
	transition: all 0.2s;
}

.login-page-background {
	position: fixed;
	overflow: hidden;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: -1;
}

.login-page-background .slide {
	height: 100vh;
	width: 100vw;
	background-size: cover;
	background-position: center;
}

.login-container, 
.forgot-container, 
.forgot-success-container, 
.password-reset-container, 
.password-reset-success {
	background-color: #FFFFFF;
	padding: 20px;
	width: 500px;
	font-family: 'Overpass', sans-serif;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.password-reset-container, 
.password-reset-success {
	font-family: 'Overpass', sans-serif;
}

.forgot-container, 
.forgot-success-container {
	display: none;
}

.forgot-container h2, 
.forgot-success-container h2, 
.password-reset-container h2, 
.password-reset-success h2 {
	margin: 0;
	margin-bottom: 20px;
	text-transform: uppercase;
	font-weight: 700;
	font-family: 'Overpass', sans-serif;
}

.login-container input[type=text], 
.login-container input[type=password], 
.forgot-container input[type=text], 
.password-reset-container input[type=password] {
	font-size: 16px;
	font-family: 'Overpass', sans-serif;
	width: 100%;
	padding: 5px;
	border: solid 1px #000000;
	font-weight: 400;
	outline: none;
}

.login-container input[type=text]:focus, 
.login-container input[type=password]:focus, 
.login-container input[type=text]:hover, 
.login-container input[type=password]:hover, 
.forgot-container input[type=text]:hover, 
.forgot-container input[type=text]:focus, 
.password-reset-container input[type=password]:hover, 
.password-reset-container input[type=password]:focus {
	border-color: #db880f;
	box-shadow: 0 0 4px #db880f;
	outline: none;
}

.login-container .login-button-container {
	float: right;
}

.login-container .clearer {
	margin-bottom: 8px !important;
}

.login-container .clearer:after {
	display: table;
	content: '';
	clear: both;
}

.login-container .login-button, 
.forgot-container .forgot-button, 
.password-reset-container input[type=submit] {
	font-family: 'Teko', sans-serif;
	font-weight: 400;
	text-transform: uppercase;
	font-size: 26px;
	line-height: 1;
	color: #ababab;
	outline: none;
}	

.login-container .login-button:hover, 
.forgot-container .forgot-button:hover, 
.password-reset-container input[type=submit]:hover {
	color: #000000;
}

.login-container .forgot-link-container {
	text-align: right;
	font-family: 'Overpass', sans-serif;
	font-size: 12px;
}

.login-container a, .forgot-container a, .forgot-success-container a, .password-reset-success a {
	font-family: 'Overpass', sans-serif;
	text-decoration: none;
	color: #db880f;
	font-weight: 700;
	font-size: 12px;
}

.login-container .loading {
	width: 30px;
}

.login-loading {
	position: fixed;
	z-index: 1000000;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ffffff;
	opacity: 0.5;
	background-image: url('/images/2.0/loading.gif');
	background-size: 200px 200px;
	background-position: center;
	background-repeat: no-repeat;
	display: none;
}

.password-reset-success a {
	text-transform: uppercase;
}

.login-container a:hover, .forgot-container a:hover, .forgot-success-container a:hover, .password-reset-success a:hover {
	color: #db880f;
}

.login-container .error, .forgot-container .error, .password-reset-container .error {
	color: #FF0000;
	font-weight: bold;
	margin-bottom: 20px;
}

.user-search-field-container {
	position: absolute;
	right: 20px;
	width: 220px;
}

.user-search-field {
	border: 0;
	border-bottom: solid 1px #000000;
	width: 100%;
	outline: none;
}

.user-search-header {
	padding: 3px;
	font-weight: bold;
	background-color: #000000;
	color: #FFFFFF;
	font-size: 14px;
}

.user-search-result {
	display: block;
	white-space: nowrap;
	font-size: 12px;
	background-color: #FFFFFF;
	padding: 3px;
	opacity: 0.9;
}

.user-search-result .distinction-icons {
	display: inline-block;
	vertical-align: middle;
	position: relative;
	top: -2px;
}

.user-search-result .distinction-icons img {
	display: inline-block;
	vertical-align: middle;
	width: 12px;
}

.user-search-result.hashtag {
	font-size: 14px;
	font-weight: bold;
	padding: 10px;
}

.user-search-result.hashtag:hover, .user-search-result.hashtag:focus {
	color: #FFFFFF !important;
}

.user-search-result:hover, .user-search-result:focus {
	color: #FFFFFF;
	background-color: #db880f;
}

.user-search-result:hover span, .user-search-result:focus span {
	color: #FFFFFF;
}

.user-search-result .avatar {
	display: inline-block;
	height: 40px;
	width: 40px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	vertical-align: top;
	margin-right: 8px;
}

.user-search-result .info {
	display: inline-block;
	vertical-align: top;
}

.user-search-result .info .name {
	display: block;
	font-weight: bold;
}

.user-search-result .info .location {
	display: block;
}

#sidebar .ad-container {
	display: block;
	margin-bottom: 20px;
}

.ad-container, .playwire-ad-container {
	position: relative;
}

.ad-container img {
	max-width: 100%;
	display: block;
}

.ad-container a:hover {
	opacity: 0.7;
}

.ad-container.tier-ad {
	margin-bottom: 20px;
	text-align: center;
}

.ad-container.tier-ad img {
	margin: 0 auto;
}

.ad-container .patreon-link, .playwire-ad-container .patreon-link {
	background-color: #f0a83b;
	color: #ffffff;
	display: block;
	padding: 3px;
	font-size: 12px;
	position: absolute;
	bottom: 0;
	right: 0;
	line-height: 1;
}

.ad-container .patreon-link:hover, .playwire-ad-container .patreon-link:hover {
	background-color: #ffffff;
	color: #f0a83b;
}

div.plain {
	padding: 20px;
	background-color: #FFFFFF;
	font-size: 16px;
	font-weight: 700;
	font-family: 'Overpass', sans-serif;
	text-align: center;
}

div.plain a {
	color: #db880f;
}

div.plain a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.discord-widget {
	margin-bottom: 20px !important;
}

input[type=submit]:disabled{
	opacity: 0.5;
	cursor: no-drop;
}

input[type=submit].disabled {
	opacity: 0.5;
	cursor: no-drop;
}

.widget-add-button-container {
	position: absolute;
	top: 0;
	left: -40px;
}

.widget-add-button {
	color: #ababab;
	font-size: 40px;
	font-weight: bold;
}

.widget-add-button:hover {
	color: #db880f;
}

.widget-add-container {
	position: fixed;
	overflow: scroll;
	top: 20%;
	left: 20%;
	bottom: 20%;
	right: 20%;
	z-index: 1000;
	background-color: #FFFFFF;
	padding: 20px;
	text-align: center;
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	display: none;
}

.widget-add-container h1 {
	margin: 0;
	margin-bottom: 20px;
}

.widget-add-container .widget-selector {
	display: inline-block;
	width: 300px;
	height: 100px;
	border: solid 1px #000000;
	margin: 5px;
	padding: 10px;
	position: relative;
	padding-top: 40px;
	box-sizing: border-box;
	color: #000000;
}

.widget-add-container .widget-selector:hover {
	border-color: #db880f;
	box-shadow: 0 0 15px #db880f;
}

.widget-add-container .widget-selector .selected-check {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #FFFFFF;
	opacity: 0.8;
	display: none;
}

.widget-add-container .widget-selector.selected .selected-check {
	display: block;
}

.widget-add-container .widget-selector .selected-check img {
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -25px;
	margin-left: -25px;
}

.tag-link, .hero-link {
	color: #db880f !important;
	font-weight: bold;
}

.tag-link:hover, .hero-link:hover {
	color: #FFFFFF !important;
	background-color: #db880f !important;
}

.monitor {
	background-color: #FFFFFF;
	width: 300px;
	height: 200px;
	border: solid 1px #000000;
	position: fixed;
	bottom: 0;
	right: 0;
	z-index: 1000000;
}

.splash-info-container {
	position: fixed;
	background-color: #FFFFFF;
	bottom: 0;
	left: 0;
	right: 0;
	padding: 20px;
}

.splash-info-button-container {
	text-align: center;
	line-height: 1;
}

.splash-info-button {
	color: #db880f;
	font-size: 20px;
	font-weight: bold;
}

.splash-info-button:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.splash-info {
	position: relative;
	margin-top: 20px;
}

.splash-info .paragraph {
	-moz-column-count: 2;
	-webkit-column-count: 2;
	column-count: 2;
	width: 420px;
	margin: 0 auto;
	font-size: 12px;
}

.splash-info .stat {
	position: absolute;
	color: #ababab;
	text-align: center;
	font-weight: bold;
	top: 0;
	line-height: 1;
}

.splash-info .stat .number {
	font-size: 90px;
	text-align: center;
}

.splash-info .stat .word {
	font-family: 'Overpass', sans-serif;
	text-align: center;
	text-transform: uppercase;
}

.splash-info .stat.builds {
	right: 4%;
}

.splash-info .stat.blogs {
	right: 21%;
}

.splash-info .stat.members {
	left: 4%;
}

.splash-info .stat.posts {
	left: 19%;
}

.user-search-results {
	min-width: 250px;
}

.legendary {
	padding: 0;
	margin-left: 6px;
}

.legendary-post {
	width: 15px;
	padding: 0;
	margin-left: 2px;
}

.legendary-comment {
	width: 12px;
	padding: 0;
	margin-left: 2px;
}

.beacon-toggle {
	position: absolute;
	right: 20px;
	top: 50%;
	margin-top: -12px;
	opacity: 0.3;
	display: block;
}

.beacon-toggle.on, .beacon-toggle:hover {
	opacity: 1;
}

.beacon-toggle .dot {
	position: absolute;
	border-radius: 50%;
	height: 6px;
	width: 6px;
	background-color: #db880f;
	bottom: 6px;
	left: 50%;
	margin-left: -3px;
	display: none;
	box-shadow: 0 0 5px #db880f;
}

.beacon-prompt {
	width: 500px;
	position: fixed;
	z-index: 1000;
	padding: 20px;
	background-color: #ffffff;
	top: 50%;
	left: 50%;
	margin-left: -250px;
	box-sizing: border-box;
	margin-top: -200px;
	display: none;
	font-family: 'Overpass', sans-serif;
}

.beacon-duration-select-container {
	position: relative;
	display: inline-block;
	width: 120px;
	height: 22px;
	vertical-align: top;
}

.beacon-duration-select-container .arrow {
	position: absolute;
	top: 8px;
	right: 6px;
	height: 0;
	width: 0;
	border-left: solid 5px transparent;
	border-right: solid 5px transparent;
	border-top: solid 5px #000000;
}

.beacon-duration-select-container:hover .arrow {
	display: none;
}

.beacon-duration-select {
	border: solid 1px #000000;
	position: relative;
	display: block;
	min-height: 22px;
	top: 0;
	left: 0;
	width: 100%;
}

.beacon-duration-option {
	display: none;
	line-height: 1;
	padding: 3px;
	background-color: #FFFFFF;
	color: #000000;
	font-size: 14px;
	cursor: pointer;
	text-align: left;
}

.beacon-duration-option.selected {
	display: block;
}

.beacon-duration-option:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

#landing .background img {
	display: block;
	min-width: 1400px;
	max-height: 500px;
}

#landing .panel {
	position: relative;
}

#landing .background .background-container {
	position: relative;
	width: 1090px;
	margin: 0 auto;
}

#landing .background .background-container img {
	position: relative;
}

#landing .background {
	position: relative;
	z-index: -1;
}

#landing .foreground {
	position: absolute;
	top: 0;
	left: 0;
}

#landing .panel {
	color: #FFFFFF;
}

#landing .panel1 .background {
	background-color: #000000;
}

#landing .panel1 .width-container .text {
	display: block;
	position: absolute;
	text-align: center;
	left: 50%;
	margin-left: -25%;
	top: 50%;
	transform: translateY(-50%);
}

#landing .panel1 .text h1 {
	font-family: 'Overpass', sans-serif;
	margin: 0;
	line-height: 1;
	font-size: 4.2rem;
	font-weight: 700;
	display: block;
	margin-bottom: 1rem;
}

#landing .panel1 .text .sub-headline {
	font-size: 18px;
}

#landing .panel a {
	color: #ffd000;
}

#landing .panel a:hover {
	background-color: #ffd000;
	color: #000000;
}

#landing .panel .text .divider {
	width: 6rem;
	margin-top: 2.5rem;
	margin-bottom: 2.5rem;
	border-bottom: solid 1px #ffffff;
	margin-left: auto;
	margin-right: auto;
}

#landing .panel .text .landing-login-button {
	color: #000000;
	background-color: #ffffff;
	display: inline-block;
	line-height: 1;
	text-transform: uppercase;
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	padding: 7px;
	font-size: 18px;
	margin-left: 10px;
	margin-right: 10px;
}

#landing .panel .text .landing-login-button:hover {
	background-color: #000000;
	color: #ffffff;
}

#landing .panel .text .signup-button {
	color: #000000;
	background-color: #ffd000;
	display: inline-block;
	line-height: 1;
	text-transform: uppercase;
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	padding: 7px;
	font-size: 18px;
	margin-left: 10px;
	margin-right: 10px;
}

#landing .panel .text .signup-button:hover {
	color: #ffd000;
	background-color: #000000;
}

#landing .panel .width-container {
	position: absolute;
	width: 1050px;
	top: 0;
	bottom: 0;
	left: 50%;
	margin-left: -525px;
}

#landing .panel2 .background {
	background-color: #0c474d;
}

#landing .panel2 .width-container .foreground {
	position: absolute;
	top: 0;
	left: -10rem;
	bottom: 0;
	z-index: 1;
}

#landing .panel2 .width-container .foreground img {
	height: 100%;
}

#landing .panel2 .width-container .text {
	position: absolute;
	right: 0;
	width: 44%;
	text-align: center;
	top: 50%;
	transform: translateY(-50%);
}

#landing .panel3 .width-container .foreground {
	position: absolute;
	top: 0;
	right: -10rem;
	bottom: 0;
	z-index: 1;
	text-align: right;
}

#landing .panel3 .width-container .foreground img {
	height: 100%;
}

#landing .panel3 .width-container .text {
	position: absolute;
	left: 0;
	width: 44%;
	top: 50%;
	transform: translateY(-50%);
	text-align: center;
}

#landing .panel .stats {
	display: block;
	text-align: center;
	position: absolute;
	top: 50%;
	left: 50%;
	width: 1050px;
	margin-left: -525px;
	transform: translateY(-50%);
}

#landing .panel .stats .stat {
	display: inline-block;
	vertical-align: middle;
	text-align: center;
	margin-left: 40px;
	margin-right: 40px;
}

#landing .panel .stats .stat .number {
	font-family: 'Overpass', sans-serif;
	font-weight: 900;
	font-size: 5rem;
	line-height: 1;
	margin-bottom: 1rem;
}

#landing .panel .stats .stat .word {
	text-transform: uppercase;
}

#landing .panel5 .width-container .text {
	display: block;
	position: absolute;
	text-align: center;
	left: 50%;
	margin-left: -25%;
	top: 50%;
	transform: translateY(-50%);
	width: 50%;
}

.header-notifications-container {
	position: absolute;
	width: 400px;
	height: 390px;
	left: -302px;
	top: 30px;
	z-index: 200;
	display: none;
}

.header-notifications {
	background-color: #FFFFFF;
	box-sizing: border-box;
	border: solid 1px #ababab;
	width: 400px;
	height: 390px;
	position: relative;
	z-index: 3;
}

.header-notifications-container .triangle {
	position: absolute;
	border-left: solid 9px transparent;
	border-right: solid 9px transparent;
	border-bottom: solid 9px #FFFFFF;
	width: 0;
	height: 0;
	top: -8px;
	right: 80px;
	z-index: 4;
}

.header-notifications-container .triangle-background {
	position: absolute;
	border-left: solid 10px transparent;
	border-right: solid 10px transparent;
	border-bottom: solid 10px #ababab;
	width: 0;
	height: 0;
	top: -9px;
	right: 79px;
	z-index: 2;
}

.header-notifications .topbar {
	font-weight: bold;
	line-height: 1;
	border-bottom: solid 1px #ababab;
	padding-bottom: 10px;
	padding: 10px;
}

.notifications-list-top .no-message {
	padding: 10px;
}

.header-notifications .notifications-all-button-container {
	padding: 8px;
	text-align: right;
	line-height: 1;
	font-size: 12px;
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
}

.header-notifications .notifications-all-button-container a {
	color: #db880f !important;
}

.header-notifications .notifications-all-button-container a:hover {
	background-color: #db880f !important;
	color: #FFFFFF !important;
}

.header-notifications .notification-top {
	padding: 10px;
	border-bottom: solid 1px #ababab;
	transition: all 0.2s;
	position: relative;
}


.header-notifications .notification-top .avatar {
	display: inline-block;
	width: 60px;
	height: 60px;
	background-size: cover;
	background-position: center;
	vertical-align: top;
	margin-right: 10px;
	position: relative;
}

.header-notifications .notification-top .avatar:hover {
	opacity: 0.7;
}

.header-notifications .notification-top .text {
	display: inline-block;
	width: 300px;
	vertical-align: top;
}

.header-notifications .notification-top .text .name {
	white-space: nowrap;
	overflow: hidden;
	line-height: 1;
	margin-bottom: 5px;
	width: 300px;
	font-weight: bold;
}

.header-notifications .notification-top .text .date {
	font-size: 70%;
	position: absolute;
	bottom: 10px;
	right: 10px;
}

.header-notifications .notification-top .notification-dismiss-button {
	position: absolute !important;
	top: 3px !important;
	right: 3px !important;
	opacity: 0.5;
}

.header-notifications .notification-top .notification-dismiss-button:hover {
	opacity: 1;
}

.header-notifications-container .triangle-container {
	position: absolute;
	width: 20px;
	height: 10px;
	top: -10px;
	right: 79px;
	z-index: 1;
}

.legendary-list-header-icon {
	width: 26px;
}

.terms-shade {
	position: fixed;
	z-index: 999;
	background-color: #000000;
	opacity: 0.9;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}

.terms-container {
	position: fixed;
	z-index: 1000;
	top: 50%;
	left: 50%;
	width: 500px;
	height: 400px;
	margin-top: -200px;
	margin-left: -250px;
	background-color: #FFFFFF;
	padding: 20px;
}

.terms-container .title {
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	margin-bottom: 10px;
	font-size: 20px;
	line-height: 1;
}

.terms-container .terms {
	padding: 10px;
	border: solid 1px #ababab;
	overflow-y: scroll;
	height: 300px;
	margin-bottom: 10px;
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
}

.terms-container .agree-container {
	text-align: right;
	font-family: 'Overpass', sans-serif;
}

.terms-container .check-label {
	display: inline-block;
	margin-right: 20px;
}

.terms-container input[type=submit].disabled, .terms-container input[type=submit]:disabled {
	opacity: 0.5;
	cursor: no-drop;
	background-color: #666666;
}

.terms-container input[type=submit].disabled:hover, .terms-container input[type=submit]:disabled:hover {
	background-color: #666666 !important;
	color: #FFFFFF !important;
}

.terms-container .terms-loading {
	height: 16px;
}



.talent-popper-link {
	color: #db880f !important;
}

.talent-popper-link:hover {
	color: #FFFFFF !important;
	background-color: #db880f !important;
}

.talent-popper-container {
	overflow: visible;
}

.talent-popper {
	position: fixed;
	z-index: 1000;
	max-width: 500px;
	background-color: #FFFFFF;
	padding: 10px;
	border-radius: 2px;
	font-size: 12px;
	box-shadow: 0 0 5px #333333;
	width: 0;
	height: 0;
	overflow: hidden;
	box-sizing: border-box;
	display: none;
	color: #000000;
	opacity: 0;
	transform: translate(-50%, -50%);
}

.talent-popper .inner .left {
	width: 130px;
	display: inline-block;
	vertical-align: top;
}

.talent-popper .inner .left .image {
	width: 120px;
	height: 120px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	display: block;
}

.talent-popper .inner .left .hero {
	margin-top: 15px;
	text-align: center;
	display: block;
}

.talent-popper .inner .left .hero .hero-image {
	height: 30px;
	width: 30px;
	display: inline-block;
	margin-right: 5px;
	background-size: cover;
	background-position: center;
	border-radius: 50%;
	vertical-align: middle;
}

.talent-popper .inner .left .hero .hero-name {
	display: inline-block;
	vertical-align: middle;
}

.talent-popper .right {
	display: inline-block;
	vertical-align: top;
	width: 350px;
	white-space: normal;
}

.talent-popper .inner .talent-popper-target .right .title {
	font-weight: bold;
	display: block;
	margin-bottom: 5px;
	color: #db880f;
	font-size: 120%;
	text-align-last: left;
}

.talent-popper .inner .talent-popper-target .right .description {
	text-align: left;
	text-align-last: left;
	display: block;
	margin-bottom: 5px;
}

.talent-popper .inner .talent-popper-target .right .mana, .talent-popper .inner .talent-popper-target .right .cooldown {
	margin-bottom: 5px;
	text-align: left;
	text-align-last: left;
	display: block;
}

.talent-popper .inner .talent-popper-target {
	display: block;
	text-align-last: justify;
}

.talent-popper .inner .talent-popper-target:hover {
	background-color: transparent;
	color: #000000;
}

.talent-popper .inner {
	width: 500px;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
	padding: 10px;
	white-space: nowrap;
	display: block;
}

.heroji {
	display: inline-block;
	height: 1.5em;
	margin-left: 3px;
	margin-right: 3px;
}

.heroji.notext {
	width: 100px;
	height: 100px;
}

body {
	font-family: 'Overpass', sans-serif;
	font-weight: 400;
}

#page{
	min-height: calc(100vh - 270px) !important;
}

#page:after {
	display: table;
	content: '';
	clear: both;
}

.scheme-background, 
.gradient-background {
	display: none;
}

.page-background {
	z-index: -1;
	position: fixed;
	top: 0;
	width: 1090px;
	background-color: #ffffff;
	bottom: 0;
	left: 50%;
	transform: translateX(-50%);
	border-left: solid 1px #dfdfdf;
	border-right: solid 1px #dfdfdf;
}

#header-20 {
	position: fixed;
	z-index: 100;
	background-color: #FFFFFF;
	top: 0;
	left: 0;
	right: 0;
	padding: 20px;
	height: 60px;
	font-size: 26px;
	font-family: 'Teko', sans-serif;
	font-weight: 400;
	box-shadow: 0 0 7px #666666;
}

#header-20 .header-icons-container {
	position: absolute;
	right: 20px;
	top: 50%;
	transform: translateY(-50%);
	height: 34px;
	line-height: 34px;
}

#header-20 .header-icons-container .channel-changer {
	display: inline-block;
	margin-left: 10px;
	height: 24px;
	width: 24px;
	vertical-align: middle;
	background-size: cover;
	background-position: center;
	opacity: 0.5;
}

#header-20 .header-icons-container .channel-changer.selected {
	opacity: 1;
}

#header-20 .header-icons-container .channel-changer:hover {
	transform: scale(1.4);
	opacity: 1;
}

#header-20 .header-icons-container .header-login-button {
	font-family: 'Teko', sans-serif;
	color: #ababab;
	display: inline-block;
	line-height: 1;
	font-size: 20px;
	text-transform: uppercase;
	margin-left: 10px;
	vertical-align: middle;
}

#header-20 .header-icons-container .header-login-button:hover {
	color: #000000;
}

#header-20 .header-icons-container .header-avatar {
	width: 30px;
	height: 30px;
	display: inline-block;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	margin-left: 10px;
	vertical-align: middle;
}

#header-20 .header-icons-container .header-avatar:hover {
	opacity: 0.5;
}

#header-20 .header-icons-container .cart-header-alert {
	display: inline-block;
	position: relative;
	font-weight: 700;
	color: #000000;
	width: 34px;
	height: 34px;
	margin-left: 10px;
	background-image: url('/images/icon-cart.png');
	background-size: cover;
	background-position: center;
	vertical-align: middle;
}

#header-20 .header-icons-container .cart-header-alert:hover {
	opacity: 0.5;
}

#header-20 .header-icons-container .cart-header-alert img {
	width: 34px;
}

#header-20 .header-icons-container .cart-header-alert .indicator {
	position: absolute;
	background-color: #df4301;
	height: 0;
	width: 0;
	border-radius: 50%;
	opacity: 1;
	display: block;
	top: 46%;
	left: 19px;
	transform: translateX(-50%) translateY(-50%);
	z-index: 10;
}

#header-20 .header-icons-container .cart-header-alert .item-count {
	position: absolute;
	font-size: 11px;
	color: #df4301;
	top: 11px;
	left: 8px;
	text-align: center;
	width: 22px;
	line-height: 1;
	font-weight: 400;
}

.header-content-menu {
	position: fixed;
	width: 140px;
	top: 60px;
	right: 0;
	z-index: 99;
	background-color: #ffffff;
	border: solid 1px #dfdfdf;
	box-shadow: 0 0 4px #333333;
	font-size: 20px;
	text-align: center;
	font-weight: 300;
	letter-spacing: 1px;
	text-transform: uppercase;
	display: none;
	font-family: 'Teko', sans-serif;
}

.header-content-menu a {
	display: block;
	padding: 8px 4px;
	color: #000000;
	border-bottom: solid 1px #dfdfdf;
	position: relative;
	z-index: 1;
	line-height: 1;
}

.header-content-menu a:hover {
	background-color: #000000;
	color: #ffffff;
	z-index: 2;
	box-shadow: 0 0 3px #000000;
	border-color: #000000;
}

.header-content-menu a:first-child {
	padding-top: 12px;
}

#header-20 .sidebar-trigger-container {
	position: absolute;
	height: 18px;
	width: 22px;
	left: 20px;
	top: 50%;
	transform: translateY(-50%);
	display: block;
}

#header-20 .sidebar-trigger-container .sidebar-trigger {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
}

#header-20 .sidebar-trigger-container .sidebar-trigger .bar {
	display: block;
	width: 100%;
	height: 4px;
	margin-bottom: 3px;
	background-color: #7f7f7f;
}

#header-20 .sidebar-trigger-container .sidebar-trigger .bar:last-child {
	margin-bottom: 0;
}

#header-20 .sidebar-trigger-container .sidebar-trigger:hover .bar {
	background-color: #000000;
}

#header-20 .sidebar-trigger-container .sidebar-trigger-notifications-count {
	font-family: 'Overpass', sans-serif;
	position: absolute;
	z-index: 100;
	color: #ffffff;
	top: 0;
	left: 0;
	transform: translate(-50%, -50%);
	line-height: 16px;
	height: 16px;
	min-width: 16px;
	text-align: center;
	font-size: 10px;
	border-radius: 50%;
	background-color: #db880f;
}

#header-20 .home-hearth-heroes-container {
	position: absolute;
	left: 50px;
	top: 50%;
	transform: translateY(-50%);
	line-height: 1;
}

#header-20 .home-hearth-heroes-container .adjust {
	position: relative;
	top: 2px;
}

#header-20 .home-hearth-heroes-container .adjust a {
	color: #000000;
	text-transform: uppercase;
}

#header-20 .home-hearth-heroes-container .adjust a:hover {
	color: #db880f;
}

#header-20 .logo {
	position: absolute;
	height: 40px;
	width: 40px;
	display: block;
	background-image: url('/images/logo-hh.png');
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
}

#header-20 .logo:hover {
	filter: saturate(300%);
}

#header-20 .notifications-container {
	position: absolute;
	top: 0;
	bottom: 0;
	right: 20px;
	width: 50px;
}

#header-20 .notifications-container .notifications-button, 
#header-20 .notifications-container .messages-button {
	display: block;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
}

#header-20 .notifications-container .notifications-button {
	left: 0;
}

#header-20 .notifications-container .notifications-button img {
	height: 20px;
	display: block;
}

#header-20 .notifications-container .messages-button {
	right: 0;
}

#header-20 .notifications-container .messages-button img {
	height: 14px;
	display: block;
}

#header-20 .notifications-container .notifications-button:hover, 
#header-20 .notifications-container .messages-button:hover {
	filter: brightness(200%);
}

.channel-change-container {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 1000000000;
	display: none;
}

.channel-change-container .top {
	position: absolute;
	background-color: #000000;
	top: 0;
	left: 0;
	right: 0;
	height: 0;
}

.channel-change-container .bottom {
	position: absolute;
	background-color: #000000;
	bottom: 0;
	left: 0;
	right: 0;
	height: 0;
}

.channel-change-container .line {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	height: 3px;
	background-color: #ffffff;
	transform: translateY(-50%);
	display: none;
}

.channel-change-container.in-progress {
	display: block;
}

.channel-change-container.in-progress .top, .channel-change-container.in-progress .bottom {
	height: 50vh;
}

.channel-change-container.in-progress .line {
	display: block;
	left: 50vw;
	right: 50vw;
}

#footer {
	text-align: center;
	padding: 40px 40px 40px 60px;
	color: #db880f;
	line-height: 1;
	font-family: 'Teko', sans-serif;
	font-weight: 300;
	text-transform: uppercase;
	background-color: #000000;
	font-size: 24px;
	letter-spacing: 1px;
}

#footer a {
	color: #ffffff;
}

#footer a:hover {
	color: #000000;
	background-color: #ffffff;
}

#footer .row {
	margin-bottom: 30px;
}

#footer .row.links {
	font-size: 18px;
}

#footer .socials a {
	display: inline-block;
	width: 24px;
	height: 24px;
	background-size: cover;
	background-position: center;
	margin: 0 20px;
}

#footer .socials a:hover {
	transform: scale(1.4);
	background-color: transparent;
}

#sidebar-20 {
	position: fixed;
	z-index: 100;
	width: 300px;
	background-color: #424242;
	padding: 20px;
	top: 60px;
	left: -300px;
	font-family: 'Teko', sans-serif;
	font-size: 24px;
	color: #ffffff;
	bottom: 0;
	text-transform: uppercase;
}

#sidebar-20 .search-container {
	width: 100%;
	position: relative;
	margin-bottom: 20px;
}

#sidebar-20 ul {
	list-style: none;
	padding: 0;
	margin: 0;
	line-height: 1;
}

#sidebar-20 ul li {
	margin-bottom: 4px;
}

#sidebar-20 ul li a {
	color: #ffffff;
}

#sidebar-20 ul li a:hover {
	color: #db880f;
}

#sidebar-20 .search-container .icon {
	filter: invert(100%);
	position: absolute;
	left: 0;
	top: 0;
}

#sidebar-20 .search-container .search-input {
	font-family: 'Teko', sans-serif;
	background-color: transparent;
	color: #ffffff;
	border: 0;
	border-bottom: solid 1px #ffffff;
	padding: 0;
	line-height: 1;
	width: 100%;
	padding-left: 30px;
	font-size: 22px;
	outline: none;
}

#sidebar-20 .search-container :-moz-placeholder, 
#sidebar-20 .search-container :-ms-input-placeholder, 
#sidebar-20 .search-container ::-moz-placeholder,
#sidebar-20 .search-container ::-webkit-input-placeholder {
	opacity: 1;
	font-size: 80%;
}

#sidebar-20 .sidebar-notification-counter.popout,
#sidebar-20 .sidebar-message-counter.popout {
	color: #f0a83b !important;
}

#sidebar-20 .sidebar-notification-counter.popout:hover,
#sidebar-20 .sidebar-message-counter.popout:hover {
	color: #ffffff !important;
	text-shadow: 0 0 3px #ffffff;
}

#sidebar-20 .marginator {
	margin-bottom: 20px;
}

#sidebar-20 .right {
	float: right;
	width: 50%;
	text-align: right;
}

#sidebar-20 .community-menu-container {
	width: 50%;
}

#sidebar-20 .menu-container .menu-header {
	margin-bottom: 6px;
	border-bottom: solid 1px #ffffff;
	padding-bottom: 2px;
	line-height: 1;
}

#sidebar-20 .menu-container .menu li {
	margin-bottom: 4px;
}

#sidebar-20 .menu-container .menu:not(.main) li a {
	color: #ffffff;
	font-weight: 300;
}

#sidebar-20 .menu-container .menu li a:hover {
	color: #db880f;
}

#sidebar-20 .menu-container .menu li a.patreon-link {
	color: #f0a83b;
}

#sidebar-20 .menu-container .menu li a.patreon-link:hover {
	color: #ffffff;
	text-shadow: 0 0 3px #ffffff;
}

#sidebar-20 .vitals-menu-container {
	margin-top: 20px;
}

#sidebar-20 .user-search-results-20 {
	display: none;
	position: absolute;
	top: 32px;
	left: 0;
	right: 0;
	font-size: 16px;
	opacity: 0.9;
	background-color: #ffffff;
	text-transform: none;
	overflow: auto;
}

#sidebar-20 .user-search-results-20 .user-search-group-20 {
	
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-header-20 {
	padding: 5px;
	background-color: #000000;
	color: #ffffff;
	text-transform: uppercase;
	font-size: 20px;
	line-height: 1;
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20 {
	display: block;
	position: relative;
	line-height: 1;
	min-height: 40px;
	padding: 5px;
	padding-left: 45px;
	box-sizing: border-box;
	color: #000000;
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20:hover, 
#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20:focus {
	background-color: #000000;
	color: #ffffff;
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20 .avatar {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 40px;
	background-size: cover;
	background-position: center;
	filter: saturate(40%);
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20:hover .avatar, 
#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20:focus .avatar {
	filter: saturate(100%);
}


#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20 .name {
	display: block;
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20 .name .distinction-icons {
	display: inline-block;
	vertical-align: middle;
	width: 12px;
	height: 12px;
}

#sidebar-20 .user-search-results-20 .user-search-group-20 .user-search-result-20 .name .distinction-icons img {
	width: 12px;
}

#sidebar-20 .socials {
	position: absolute;
	left: 20%;
	right: 20%;
	bottom: 20px;
	text-align-last: justify;
}

#sidebar-20 .socials a {
	display: inline-block;
	width: 30px;
	height: 30px;
	vertical-align: middle;
}

#sidebar-20 .socials a:hover {
	opacity: 0.5;
}

#sidebar-20 .socials a img {
	width: 30px;
}

/*FEED STYLES*/

#mainbar.right {
	width: 720px;
	margin-left: 30px;
}

#mainbar.left {
	width: 720px;
	margin-right: 30px;
}

#sidebar.left {
	margin-left: 10px;
	margin-right: 0;
}

#sidebar.right {
	margin-right: 10px;
	margin-left: 0;
}

.vitals.sitewide {
	font-family: 'Teko', sans-serif;
	margin-bottom: 20px;
}

.vitals.sitewide ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.vitals.sitewide ul li {
	display: inline-block;
	padding-right: 10px;
	margin-right: 10px;
	border-right: solid 1px #db880f;
	line-height: 1;
	text-transform: uppercase;
	font-size: 20px;
}

.vitals.sitewide ul li:last-child {
	padding-right: 0;
	margin-right: 0;
	border-right: 0;
}

.vitals.sitewide ul li a, 
.vitals.sitewide ul li .noclick {
	color: #000000;
	opacity: 0.6;
}

.vitals.sitewide ul li a.liked, 
.vitals.sitewide ul li a.kapped, 
.vitals.sitewide ul li a.shared, 
.vitals.sitewide ul li a.commented {
	opacity: 1;
}

.vitals.sitewide ul li a:hover {
	opacity: 1;
}

.comments-sitewide .comments-header {
	font-family: 'Teko', sans-serif;
	text-transform: uppercase;
	margin-bottom: 10px;
	font-size: 24px;
}

.comments-sitewide .comments-container .comment {
	padding-bottom: 10px;
	border-bottom: solid 1px #dfdfdf;
	margin-bottom: 10px;
}

.comments-sitewide .comments-container .comment:last-child {
	padding-bottom: 0;
	border-bottom: 0;
	margin-bottom: 0;
}

.comments-sitewide .comments-container .comment .avatar {
	display: block;
	float: left;
	height: 50px;
	width: 50px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	vertical-align: middle;
	margin-right: 10px;
}

.comments-sitewide .comments-container .comment .avatar:hover {
	box-shadow: 0 0 5px #db880f;
}

.comments-sitewide .comments-container .comment .content {
	margin-left: 60px;
}

.comments-sitewide .comments-container .comment .content .byline {
	margin-bottom: 10px;
}

.comments-sitewide .comments-container .comment .content .byline .name {
	font-size: 24px;
	font-family: 'Teko', sans-serif;
	line-height: 1;
}

.comments-sitewide .comments-container .comment .content .byline .name a {
	color: #000000 !important;
}

.comments-sitewide .comments-container .comment .content .byline .name a:hover {
	color: #ffffff !important;
	background-color: #000000 !important;
}

.comments-sitewide .comments-container .comment .content .byline .date {
	font-family: 'Overpass', sans-serif;
	color: #777777;
	font-style: italic;
	font-size: 14px;
}

.comments-sitewide .comments-container .comment .content .body {
	margin-bottom: 10px;
}

.comments-sitewide .comments-container .comment .content .urls-loading {
	margin-bottom: 10px;
	text-align: center;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container {
	border: solid 5px #dfdfdf;
	padding: 12px;
	position: relative;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .image {
	width: 30%;
	padding-bottom: 30%;
	background-size: cover;
	background-position: center;
	display: block;
	float: left;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .image:hover {
	opacity: 0.7;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .info {
	margin-left: 32%;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .info .title {
	font-weight: 700;
	font-size: 20px;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .info a {
	color: #db880f;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .info a:hover {
	color: #ffffff;
	background-color: #db880f;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container .info .url {
	font-size: 80%;
}

.comments-sitewide .comments-container .comment .content .component-comment-url-container:after {
	display: table;
	content: '';
	clear: both;
}

.comments-sitewide .vitals {
	font-family: 'Teko', sans-serif;
	margin-bottom: 20px;
	margin-top: 10px;
}

.comments-sitewide .vitals ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.comments-sitewide .vitals ul li {
	display: inline-block;
	padding-right: 10px;
	margin-right: 10px;
	border-right: solid 1px #db880f;
	line-height: 1;
	text-transform: uppercase;
	font-size: 18px;
}

.comments-sitewide .vitals ul li:last-child {
	padding-right: 0;
	margin-right: 0;
	border-right: 0;
}

.comments-sitewide .vitals ul li a, 
.vitals.sitewide ul li .noclick {
	color: #000000 !important;
	opacity: 0.6;
}

.comments-sitewide .vitals ul li a.liked, 
.vitals ul li a.kapped, 
.vitals ul li a.shared, 
.vitals ul li a.commented {
	opacity: 1 !important;
}

.comments-sitewide .vitals ul li a:hover {
	opacity: 1 !important;
	background-color: transparent !important;
}

.comments-sitewide .delete input[type="submit"] {
	border: 0;
	padding: 5px;
	background-color: #666666;
	color: #ffffff;
	font-family: 'Overpass', sans-serif;
	cursor: pointer;
	transition: all 0.2s;
	text-transform: uppercase;
}

.comments-sitewide .delete input[type="submit"]:hover {
	background-color: #000000;
	transition: all 0.2s;
}

.list-filters {
	padding-top: 30px;
	padding-bottom: 40px;
	text-align: center;
	position: relative;
	border-left: solid 1px #dfdfdf;
	border-right: solid 1px #dfdfdf;
}

.list-filters .create-button {
	display: block;
	margin-bottom: 5px;
	background-color: #000000;
	color: #ffffff;
	font-family: 'Teko', sans-serif;
	text-transform: uppercase;
	font-size: 26px;
	line-height: 1;
	padding: 5px 46px 2px 20px;
	text-align: right;
	position: absolute;
	border-radius: 16.5px 0 0 16.5px;
	width: 85px;
	top: 20px;
	left: 0;
	transform: translateX(-100%);
}

.list-filters .create-button:hover {
	background-color: #db880f;
}

.list-filters ul {
	list-style: none;
	padding: 0;
	margin: 0 auto;
}

.list-filters ul li {
	position: relative;
	display: inline-block;
	margin: 0 8px;
	vertical-align: middle;
	width: 22px;
	height: 22px;
	text-align: center;
}

.list-filters ul li .list-filter-button,
.list-filters ul li .list-filters-reset-button {
	display: block;
	width: 22px;
	height: 22px;
	background-size: cover;
	background-position: center;
	margin: 0 auto;
}

.list-filters ul li .list-filter-button:hover,
.list-filters ul li .list-filter-button.selected,
.list-filters ul li .list-filters-reset-button:hover {
	transform: scale(1.5);
}


.list-filters ul li .list-filters-reset-button {
	background-image: url('/images/2.0/icon-reset.png');
}

.list-filters ul li .list-filter-button.attention {
	background-image: url('/images/2.0/icon-eyeball.png');
}

.list-filters ul li .list-filter-button.conversation {
	background-image: url('/images/2.0/icon-chatterbox.png');
}

.list-filters ul li .list-filter-button.ptr {
	background-image: url('/images/2.0/icon-ptr.png');
}

.list-filters .list-filter-search-container {	
	width: 500px;
	position: relative;
	margin: 0 auto 20px;
}

.list-filters .list-filter-search-container .list-filter-search {
	border: 0;
	border-bottom: solid 2px #000000;
	font-family: 'Overpass', sans-serif;
	font-size: 20px;
	line-height: 1;
	padding: 2px;
	width: 100%;
	position: relative;
	z-index: 1;
	text-align: center;
	box-sizing: border-box;
}

.list-filters .list-filter-search-container .list-filter-search-placeholder {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	font-family: 'Overpass', sans-serif;
	z-index: 20;
	width: 100%;
	text-align: center;
	cursor: text;
	transition: color 0.2s;
}

.list-filters .list-filter-search-container .list-filter-search-placeholder:hover {
	color: #666666;
	transition: color 0.2s;
}

.list-filters .list-filter-search-container .list-filter-search-placeholder img {
	display: inline-block;
	width: 24px;
	margin-right: 6px;
	vertical-align: middle;
}

.list-filters .list-filter-search-container .list-filter-autosearch-results {
	position: absolute;
	top: 26px;
	display: none;
	left: 0;
	right: 0;
	border-radius: 0 0 2px 2px;
}

.list-filters .list-filter-search-container .list-filter-autosearch-results .type-container .type-header {
	background-color: #000000;
	color: #ffffff;
	opacity: 0.9;
	font-weight: 900;
	font-family: 'Overpass', sans-serif;
	padding: 5px;
	position: relative;
	z-index: 1;
	
}

.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result {
	display: block;
	padding: 5px;
	font-family: 'Overpass', sans-serif;
	background-color: #ffffff;
	position: relative;
	z-index: 1;
	opacity: 0.9;
	font-weight: 900;
	color: #000000;
}

.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result .image {
	display: inline-block;
	width: 40px;
	height: 40px;
	background-size: cover;
	background-position: center;
	vertical-align: middle;
	margin-right: 8px;
	border-radius: 50%;
}

.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result .title {
	display: inline-block;
	vertical-align: middle;
}


.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result .distinction-icons {
	display: inline-block;
	width: 18px;
	height: 18px;
	vertical-align: middle;
}

.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result .distinction-icons img {
	width: 100%;
}

.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result:hover,
.list-filters .list-filter-search-container .list-filter-autosearch-results .list-filter-autosearch-result:focus {
	background-color: #333333;
	color: #ffffff;
	opacity: 1;
	z-index: 2;
	box-shadow: 0 0 5px #333333;
}

.component-list-more-button-container {
	text-align: center;
	padding-top: 40px;
	padding-bottom: 40px;
	border-left: solid 1px #dfdfdf;
	border-right: solid 1px #dfdfdf;
}

.component-list-more-button {
	font-size: 40px;
	font-weight: bold;
	display: inline-block;
	line-height: 40px;
	width: 40px;
	text-align: center;
	background-color: #bebebe;
	color: #db880f;
	font-family: 'Courier New', Courier, monospace;
	border-radius: 50%;
}

.component-list-more-button:hover {
	background-color: #db880f;
	color: #666666;
}

.component-list-loading {
	text-align: center;
	padding-top: 40px;
	padding-bottom: 40px;
	border-left: solid 1px #dfdfdf;
	border-right: solid 1px #dfdfdf;
}

.component-list-container .distinction-icons,
.component-list-top-container .distinction-icons {
	display: inline-block;
	vertical-align: middle;
	margin-left: 5px;
	width: 18px;
	height: 18px;
}

.component-list-container .distinction-icons img, 
.component-list-top-container .distinction-icons img {
	width: 18px;
	height: 18px;
}

.component-byline {
	font-family: 'Overpass', sans-serif !important;
	font-size: 12px !important;
	font-style: italic;
	color: #666666;
}

.component-byline .displayname {
	color: #db880f;
	font-family: 'Teko', sans-serif;
	font-size: 18px !important;
	text-transform: uppercase;
	margin-left: 2px;
	letter-spacing: 1px;
	font-style: normal;
}

.component-byline a.displayname:hover {
	color: #ffffff;
	background-color: #db880f;
}

.component-byline .distinction-icons {
	display: inline-block;
	margin-left: 8px;
	width: 16px;
	height: 16px;
}

.component-byline .distinction-icons img {
	display: block;
	height: 16px;
}

.component-list, .component-top-list {
	border-left: solid 1px #dfdfdf;
	border-right: solid 1px #dfdfdf;
}

.component-list-error {
	text-align: center;
}

.ui-tooltip {
	padding: 4px;
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-weight: 400;
	box-shadow: 0;
	border: solid 1px #333333 !important;
	border-radius: 2px;
	line-height: 1;
}

.moderator-buttons-container {
	position: absolute;
	top: 20px;
	left: 0;
	transform: translateX(-100%);
}

.moderator-buttons-container .button {
	display: block;
	margin-bottom: 5px;
	background-color: #000000;
	color: #ffffff;
	font-family: 'Teko', sans-serif;
	text-transform: uppercase;
	font-size: 26px;
	line-height: 1;
	padding: 5px 46px 2px 20px;
	text-align: right;
	position: relative;
	border-radius: 16.5px 0 0 16.5px;
	width: 85px;
}

.moderator-buttons-container .button.unfeature, .moderator-buttons-container .button.unendorse {
	background-color: #db880f;
}

.moderator-buttons-container .button .word {
	display: inline-block;
	vertical-align: middle;
	height: 26px;
	margin-left: 5px;
}

.moderator-buttons-container .button .icon {
	height: 26px;
	width: 26px;
	display: inline-block;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	vertical-align: middle;
	position: absolute;
	right: 10px;
	top: 50%;
	transform: translateY(-50%);
}

.moderator-buttons-container .button:hover {
	background-color: #666666;
}

.ad-policy-container {
	padding: 30px;
}

.ad-policy-container a {
	color: #db880f;
}

.ad-policy-container a:hover {
	background-color: #db880f;
	color: #ffffff;
}

.urls-loading {
	text-align: center;
}

.urls-loading img {
	height: 80px;
}

.coming-soon-message {
	font-family: 'Teko', sans-serif;
	font-size: 40px;
	text-transform: uppercase;
	padding-top: 40px;
	text-align: center;
	letter-spacing: 1px;
	color: #212121;
}
.widget {
	margin-bottom: 20px;
	background-color: #FFFFFF;
	font-family: 'Overpass', sans-serif;
	position: relative;
	border: solid 1px #dfdfdf;
}

.widget .padding {
	padding: 20px;
}

.widget h3 {
	margin: 0;
	text-transform: uppercase;
	display: block;
	font-size: 22px;
	letter-spacing: 0.05em;
	line-height: 1;
	padding: 15px 20px 12px;
	background-color: #db880f;
	color: #FFFFFF;
	position: relative;
	font-family: 'Teko', sans-serif;
	font-weight: 400;
	text-align: center;
}

.widget h3 a {
	text-decoration: none;
	color: #FFFFFF;
}

.widget h3 a:hover {
	background-color: #FFFFFF;
	color: #db880f;
}

.widget .thumbnail:hover {
	opacity: 0.7;
}

.widget.users-online .label {
	text-transform: uppercase;
	text-align: center;
}

.widget.users-online .number {
	font-size: 40px;
	text-align: center;
	font-weight: bold;
}

.widget.user-images .container, .widget.group-images .container {
	text-align: justify;
	font-size: 0.1;
	max-height: 165px;
	overflow: hidden;
}

.widget.user-images .container.single-row, .widget.group-images .container.single-row {
	max-height: 78px;
}

.widget.user-images .container .nextline, .widget.group-images .container .nextline {
	display: inline-block;
	width: 100%;
	height: 0;
}	

.widget.user-images .container .thumbnail, .widget.group-images .container .thumbnail {
	width: 30%;
	padding-bottom: 30%;
	display: inline-block;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	margin-bottom: 8px;
}

.widget.user-socials .container {
	text-align: center;
	font-size: 0.1px;
}

.widget.user-socials .container .thumbnail {
	margin-right: 15px;
	display: inline-block;
}

.widget.user-socials .container .thumbnail:last-child {
	margin-right: 0;
}

.widget.user-socials .container .thumbnail img {
	width: 26px;
}

.widget.user-custom .content {
	font-size: 12px;
	line-height: 1.4;
}

.widget.hero-league {
	background: linear-gradient(to right, #16071a, #db880f);
	white-space: nowrap;
}

.widget.hero-league img {
	width: 110px;
	display: inline-block;
	vertical-align: middle;
	margin-right: 10px;
}

.widget.hero-league .title {
	color: #FFFFFF;
	text-transform: uppercase;
	font-size: 14px;
	display: inline-block;
	vertical-align: middle;
	text-align: center;
	line-height: 1.15;
}

.widget.hero-league .title .bold {
	font-size: 24px;
}

.hashtag-trending a, .twitch a {
	color: #db880f;
}

.hashtag-trending a:hover, .twitch a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.hashtag-trending .row:last-child, .twitch .row:last-child {
	margin-bottom: 0;
}

.blog-posts.widget .blog-post {
	margin-bottom: 20px;
	padding-bottom: 20px;
	border-bottom: solid 1px #bebebe;
}

.blog-posts.widget .blog-post:last-child {
	margin-bottom: 0;
	padding-bottom: 0;
	border-bottom: 0;
}

.blog-posts.widget .blog-post .image, .widget.featured-event .image {
	display: block;
	height: 180px;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	margin-bottom: 6px;
}

.widget.featured-event .image {
	height: auto;
}

.blog-posts.widget .blog-post .image:hover, .widget.featured-event .image:hover {
	opacity: 0.7;
}	

.blog-posts.widget .blog-post .title, .widget.featured-event .title {
	display: block;
	font-weight: 400;
	margin-bottom: 6px;
	line-height: 1.3;
	color: #db880f;
	font-family: 'Teko', sans-serif;
	font-size: 23px;
}

.blog-posts.widget .blog-post .title a, .widget.featured-event .title a {
	color: #db880f;
}

.blog-posts.widget .blog-post .title a:hover, .widget.featured-event .title a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.blog-posts.widget .blog-post .byline {
	font-size: 14px;
	margin-bottom: 0;
	line-height: 1.3;
}

.blog-posts.widget .blog-post .byline a {
	color: #000000;
}

.blog-posts.widget .blog-post .byline a:hover {
	color: #FFFFFF;
	background-color: #000000;
}

.widget img {
	max-width: 100%;
}

.widget.user-avatar .avatar {
	width: 180px;
	height: 180px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	margin: 0 auto 20px auto;
	display: block;
	position: relative;
}

.widget.user-avatar .avatar:hover {
	opacity: 0.7;
}

.widget.user-avatar .name {
	display: block;
	color: #db880f;
	margin-bottom: 15px;
	font-weight: bold;
	font-size: 20px;
	text-align: center;
	letter-spacing: 0.05em;
	line-height: 1;
}

.widget.user-avatar .name:hover {
	color: #db880f;
}

.widget.user-avatar .battlenet, .widget.user-avatar .role, .widget.user-avatar .location {
	line-height: 1;
	font-size: 16px;
	text-align: center;
	margin-bottom: 15px;
}

.widget.user-avatar .location {
	padding-bottom: 15px;
	border-bottom: solid 1px #db880f;
}

.widget.user-avatar .follow-button-container {
	float: right;
}

.widget .following-container .followers .number {
	font-weight: bold;
}

.widget-follow-button {
	display: block;
	text-transform: uppercase;
	color: #FFFFFF;
	background-color: #db880f;
	line-height: 1;
	font-size: 12px;
	font-weight: bold;
	padding: 5px;
}

.widget-follow-button:hover {
	background-color: #db880f;
}

.widget-unfollow-button {
	display: block;
	text-transform: uppercase;
	color: #FFFFFF;
	background-color: #db880f;
	line-height: 1;
	font-size: 12px;
	font-weight: bold;
	padding: 5px;
}

.widget-unfollow-button:hover {
	background-color: #FF0000;
}

.widget.previous-post .image {
	display: block;
	margin-bottom: 12px;
	height: 180px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.widget.previous-post .image:hover {
	opacity: 0.7;
}

.widget.previous-post .title {
	color: #db880f;
	font-weight: bold;
	font-size: 16px;
	line-height: 1.3;
}

.widget.previous-post .title:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.widget.calendar {
	position: relative;
}

.widget.calendar .prev-month {
	position: absolute;
	top: 25px;
	left: 20px;
	width: 0;
	height: 0;
	border-top: solid 6px transparent;
	border-bottom: solid 6px transparent;
	border-right: solid 12px #db880f;
	display: block;
	z-index: 40;
}

.widget.calendar .prev-month:hover {
	border-right-color: #db880f;
}

.widget.calendar .next-month {
	position: absolute;
	top: 25px;
	right: 20px;
	width: 0;
	height: 0;
	border-top: solid 6px transparent;
	border-bottom: solid 6px transparent;
	border-left: solid 12px #db880f;
	display: block;
	z-index: 40;
}

.widget.calendar .calendar-container {
	position: relative;
	overflow: hidden;
}

.widget.calendar .next-month:hover {
	border-left-color: #db880f;
}

.widget.calendar .month {
	font-weight: bold;
	margin-bottom: 10px;
	text-align: center;
	padding-bottom: 10px;
	border-bottom: solid 1px #000000;
	font-size: 18px;
	text-transform: uppercase;
}

.widget.calendar table {
	width: 100%;
}

.widget.calendar table .day-name {
	text-align: center;
	text-transform: uppercase;
	color: #db880f;
	font-weight: bold;
	font-size: 12px;
}

.widget.calendar table .cell {
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	height: 30px;
	line-height: 30px;
}

.widget.calendar .indicator {
	color: #db880f;
	font-weight: bold;
	text-align: center;
	line-height: 30px;
}

.widget.calendar .indicator .circle {
	border: solid 1px #ababab;
	border-radius: 50%;
	height: 30px;
	width: 30px;
	display: block;
	margin-left: auto;
	margin-right: auto;
	position: relative;
}

.widget.calendar .indicator .circle .circle-background {
	border-radius: 50%;
	height: 30px;
	width: 30px;
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	background-color: #db880f;
	color: #FFFFFF;
}

.widget.calendar .indicator:hover {
	color: #FFFFFF;
}

.widget.calendar .indicator .circle:hover {
	background-color: #db880f;
	border-color: #db880f;
}

.widget.calendar .calendar-day-container {
	margin-top: 20px;
	padding-top: 20px;
	border-top: solid 1px #000000;
}

.widget.calendar .calendar-day-container h3 {
	margin: 0;
	margin-bottom: 10px;
}

.widget.calendar .calendar-day-container a {
	display: block;
	margin-bottom: 10px;
	padding-bottom: 10px;
	border-bottom: solid 1px #bebebe;
	color: #000000;
}

.widget.calendar .calendar-day-container a:last-child {
	padding-bottom: 0;
	border-bottom: 0;
	margin-bottom: 0;
}

.widget.calendar .calendar-day-container a:hover {
	color: #db880f;
}

.widget.calendar .calendar-day-container a .time {
	font-weight: bold;
}

.widget.event-participation .container .number {
	text-align: center;
	font-weight: bold;
	font-size: 40px;
}

.widget.event-participation .container .word {
	text-align: center;
	text-transform: uppercase;
}

.widget.event-participation .container .avatars .avatar {
	display: inline-block;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	width: 20px;
	height: 20px;
	position: relative;
}

.widget.event-participation .container .avatars .avatar:hover {
	opacity: 0.7;
}

.widget.group-mmr .row {
	margin-bottom: 6px;
	clear: both;
}

.widget.group-mmr .row a {
	color: #db880f;
}

.widget.group-mmr .row a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.widget.group-mmr {
	line-height: 1;
}

.widget.group-mmr .mmr {
	float: right;
	margin-top: 4px;
}

.widget.group-mmr .avatar {
	display: inline-block;
	height: 26px;
	width: 26px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	vertical-align: middle;
	margin-right: 6px;
	position: relative;
}

.widget.group-mmr .avatar:hover {
	opacity: 0.7;
}

.widget.group-mmr .total-row {
	margin-top: 20px;
	font-weight: bold;
	padding-bottom: 8px;
}

.user-widgets-container {
	padding: 20px;
	background-color: #FFFFFF;
}

.user-widgets-container h3 {
	font-family: 'Overpass', sans-serif;
	margin: 0;
	margin-bottom: 20px;
	font-size: 20px;
}

.widget-button {
	font-family: 'Overpass', sans-serif;
	background-color: #db880f;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	padding: 5px;
	transition: all 0.2s;

}

.widget-button:hover {
	background-color: #db880f;
	transition: all 0.2s;
}

.user-widgets-container .widget-row .buttons {
	float: right;
}

.user-widgets-container .widget-cancel {
	float: right;
}

#widget-title {
	font-family: 'Overpass', sans-serif;
	font-weight: bold;
	font-size: 18px;
	border: solid 1px #bebebe;
}

#widget-title:hover, #widget-title:focus {
	border-color: #000000;
}

.widget-row {
	clear: both;
	font-weight: bold;
	padding: 5px;
}

.widget-row:hover {
	background-color: #e4e4e4;
}

.widget-row .buttons {
	float: right;
}

.widget-row.sort-row {
	cursor: move;
}

.widget-delete-confirm {
	background-color: #FF0000 !important;
}

.widget-delete-confirm:hover {
	background-color: #FFFFFF !important;
	color: #000000 !important;
}

.delete {
	cursor: auto !important;
}

.user-widgets-container input[type=text] {
	width: 75%;
	box-sizing: border-box;
	font-family: Arial, Helvetica, sans-serif;
	border: solid 1px transparent;
	background-color: #FFFFFF;
	padding: 4px;
}

.user-widgets-container input[type=text]:hover, .user-widgets-container input[type=text]:focus {
	border-color: #bebebe;
}

.widget-error {
	padding: 20px;
	margin-bottom: 20px;
	border: solid 5px #FF0000;
	font-weight: bold;
}

.widget-success {
	padding: 20px;
	margin-bottom: 20px;
	border: solid 5px #00CC00;
	font-weight: bold;
}

.user-widgets-container .check-container .checker {
	font-weight: normal;
	display: block;
	margin-bottom: 10px;
	line-height: 1.3;
	vertical-align: middle;
	cursor: pointer;
	width: auto;
	padding-left: 20px;
	position: relative;
}

.user-widgets-container .checker .circle {
	display: inline-block;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	margin-right: 10px;
	vertical-align: middle;
	border: solid 1px #000000;
	position: absolute;
	left: 0;
	top: 6px;
}

.user-widgets-container .checker .circle.checked {
	border-color: transparent;
	background-color: #000000;
}

.user-widgets-container .checker.disabled {
	color: #bebebe;
	cursor: no-drop;
}

.user-widgets-container .checker.disabled .circle {
	border-color: #bebebe;
}

.user-widgets-container .checker:hover .circle {
	box-shadow: 0 0 3px #db880f;
}

.user-widgets-container .checker.disabled:hover .circle {
	box-shadow: none;
}

.widget.group-roles .row {
	margin-bottom: 15px;
	clear: both;
	line-height: 1;
}

.widget.group-roles .row:last-child {
	margin-bottom: 0;
}

.widget.group-roles .row .score {
	float: right;
	font-weight: bold;
}

.widget.sortable h3 {
	cursor: move;
}

.widget h3 .widget-remove-button, .widget.users-online .widget-remove-button, .widget.hero-league .widget-remove-button {
	display: none;
	position: absolute;
	top: 10px;
	right: 10px;
	opacity: 0.5;
}

.widget.hero-league .widget-remove-button img {
	height: 15px;
	width: 15px;
}

.widget.users-online .widget-remove-button, .widget.hero-league .widget-remove-button {
	top: 0;
}

.widget.hero-league .widget-remove-button {
	right: 0;
}

.widget h3:hover .widget-remove-button, .widget.users-online:hover .widget-remove-button, .widget.hero-league:hover .widget-remove-button {
	display: block;
}

.widget h3 .widget-remove-button:hover, .widget.users-online .widget-remove-button:hover, .widget.hero-league .widget-remove-button:hover {
	opacity: 1;
	background-color: transparent;
}

.widget.builds-other h3 {
	line-height: 1.3;
}

.widget.builds-other .container {
	border-bottom: solid 1px #ababab;
	padding-bottom: 20px;
	margin-bottom: 20px;
	line-height: 1.2;
}

.widget.builds-other .container:last-child {
	border-bottom: 0;
	padding-bottom: 0;
	margin-bottom: 0;
}

.widget.builds-other .container .hero {
	margin-bottom: 10px;
}

.widget.builds-other .container .hero a {
	color: #db880f;
	font-weight: bold;
	font-size: 18px;
}

.widget.builds-other .container .hero a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.widget.builds-other .container .image {
	display: block;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	height: 120px;
	margin-bottom: 10px;
}

.widget.builds-other .container .image:hover {
	opacity: 0.7;
}

.widget.builds-other .container .talents-row {
	margin-bottom: 10px;
	font-size: 0.1px;
	text-align: center;
}

.widget.builds-other .container .talents-row .talent {
	display: inline-block;
	border-radius: 50%;
	height: 32px;
	width: 32px;
	margin-right: 5px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.widget.builds-other .container .talents-row .talent:last-child {
	margin-right: 0;
}

.widget.builds-other .container .title a {
	color: #000000;
}

.widget.builds-other .container .title a:hover {
	background-color: #000000;
	color: #FFFFFF;
}

.widget.builds-other .container .byline {
	margin-top: 8px;
	font-size: 12px;
	font-style: italic;
	color: #000000;
}

.widget.builds-other .container .byline a {
	color: #db880f;
}

.widget.builds-other .container .byline a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.widget.user-tier .image img {
	display: block;
}

.widget.user-tier .image {
	display: block;
}

.widget.user-tier .image:hover {
	opacity: 0.7;
}

.widget.user-tier .updated {
	font-weight: bold;
	line-height: 1;
}

.group-upload-drag-target {
	transition: all 0.2s;
}

.group-upload-drag-target.over {
	box-shadow: 0 0 15px #db880f;
	transition: all 0.2s;
}

.group-upload-error {
	color: #FF0000;
	font-weight: bold;
	margin-bottom: 15px;
}

.group-upload-success {
	color: #00CC00;
	font-weight: bold;
	margin-bottom: 15px;
}

.group-upload-progress-container {
	width: 100%;
	height: 8px;
	border: solid 1px #db880f;
	position: relative;
}

.group-upload-progress {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 0;
	background-color: #db880f;
}

.group-upload .link {
	text-align: center;
	margin-top: 15px;
}

.group-upload .link a {
	color: #db880f;
}

.group-upload .link a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.group-upload .stats {
	font-size: 80%;
	text-align: center;
}

.widget-tab-container {
	margin-bottom: 20px;
}

.widget-where-button {
	display: inline-block;
	padding: 6px;
	line-height: 1;
	background-color: #FFFFFF;
	border: solid 1px #bebebe;
	color: #000000;
	position: relative;
	margin-right: 10px;
	font-size: 12px;
	text-transform: uppercase;
}

.widget-where-button:hover, .widget-where-button.selected {
	color: #FFFFFF;
	background-color: #bebebe;
}

.widget-where-button.selected .triangle {
	position: absolute;
	border-left: solid 6px transparent;
	border-right: solid 6px transparent;
	border-top: solid 6px #bebebe;
	left: 50%;
	bottom: -6px;
	margin-left: -6px;
}

.twitch .avatar {
	display: inline-block;
	height: 50px;
	width: 50px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	vertical-align: middle;
	position: relative;
}

.twitch .avatar:hover {
	opacity: 0.8;
	box-shadow: 0 0 10px #db880f;
}

.twitch .info {
	display: inline-block;
	vertical-align: middle;
	margin-left: 10px;
}

.twitch .info a {
	font-weight: bold;
}

.twitch .info .viewers {
	font-size: 12px;
	display: block;
}

.widget.reddit-feed .reddit-header {
	display: none;
}

.widget.reddit-feed .reddit-link {
	margin-bottom: 10px;
}

.widget.reddit-feed a {
	color: #db880f;
}

.widget.reddit-feed a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.widget.reddit-feed .reddit-link {
	white-space: nowrap;
}

.widget.reddit-feed .reddit-voting-arrows {
	display: inline-block;
	vertical-align: top;
	margin-right: 5px;
}

.widget.reddit-feed .reddit-entry {
	display: inline-block;
	vertical-align: top;
	white-space: normal;
	padding-right: 20px;
}

.widget.reddit-feed .score.dislikes, .widget.reddit-feed .score.likes {
	display: none;
}

.widget.reddit-feed .linkflairlabel {
	display: inline-block;
	font-size: 11px;
	background-color: #e4e4e4;
	border: solid 1px #898989;
	border-radius: 3px;
	line-height: 1;
	padding: 2px;
	margin-right: 4px;
	vertical-align: middle;
}

.widget.calendar .widget-jump-date {
	color: #db880f;
}

.widget.calendar .widget-jump-date:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.widget.hotslogs {
	font-weight: bold;
}

.widget.hotslogs .padding .row:last-child {
	margin-bottom: 0;
	border-top: solid 1px #000000;
	padding-top: 15px;
	font-size: 130%;
}

.widget.group-mmr .padding .mmr-slideshow .league-container .slide-title {
	font-weight: bold;
	margin-bottom: 15px;
	font-size: 110%;
}

.widget.group-mmr h3 .mmr-slide-advance {
	position: absolute;
	top: 50%;
	right: 20px;
	display: block;
	width: 0;
	height: 0;
	border-top: solid 10px transparent;
	border-bottom: solid 10px transparent;
	border-left: solid 10px #FFFFFF;
	margin-top: -10px;
}

.widget.group-mmr h3 .mmr-slide-advance:hover {
	background-color: transparent;
	opacity: 0.7;
}

.widget.user-builds img, .widget.user-tier img {
	width: 100%;
	display: block;
}

.widget.user-builds .image:hover {
	opacity: 0.7;
}

.widget.user-builds .title, .widget.user-tier .title {
	font-weight: bold;
	color: #db880f;
}

.widget.user-builds .title:hover, .widget.user-tier .title:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.widget .cover {
	position: absolute;
	z-index: 200;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	cursor: move;
}

.widget .cover .cover-background {
	position: absolute;
	z-index: 1;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #db880f;
	opacity: 0.3;
}

.widget .cover .widget-remove-button {
	position: absolute;
	top: 10px;
	right: 10px;
	display: none;
	opacity: 0.5;
	cursor: pointer;
	z-index: 10;
}

.widget .cover .widget-edit-button {
	position: absolute;
	top: 10px;
	right: 35px;
	display: none;
	opacity: 0.5;
	cursor: pointer;
	z-index: 10;
}

.widget .cover .widget-edit-button img, .widget .cover .widget-remove-button img {
	width: 20px;
}

.widget .cover:hover .widget-remove-button, .widget .cover:hover .widget-edit-button {
	display: block;
}

.widget .cover .widget-remove-button:hover, .widget .cover .widget-edit-button:hover {
	opacity: 1;
	background-color: transparent;
}

.widget-about-shade {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #000000;
	z-index: 999;
	opacity: 0.9;
	display: none;
	cursor: auto;
}

.widget-about-editor {
	display: none;
	position: fixed;
	height: 400px;
	width: 400px;
	top: 50%;
	left: 50%;
	margin-top: -200px;
	margin-left: -200px;
	background-color: #FFFFFF;
	padding: 20px;
	cursor: auto;
	z-index: 1000;
}

.widget-about-edit {
	width: 100%;
	box-sizing: border-box;
}

.widget-about-save {
	margin-top: 10px;
}

.widget.reddit-feed .reddit-comment-link {
	color: #000000;
}

.widget.reddit-feed .reddit-comment-link:hover {
	background-color: #000000;
}

.widget.hotslogs {
	font-size: 15px;
}

.widget.user-numbers .padding {
	font-family: 'Overpass', sans-serif;
}

.widget.user-numbers .avatar {
	display: block;
	height: 180px;
	width: 180px;
	background-position: center;
	background-size: cover;
	margin: 0 auto 10px;
	border-radius: 50%;
}

.widget.user-numbers .avatar:hover {
	opacity: 0.7;
}

.widget.user-numbers .displayname {
	position: relative;
	text-align: center;
	font-weight: 900;
	font-size: 20px;
}

.widget.user-numbers .displayname .distinction-icons {
	display: inline-block;
	height: 18px;
	width: 18px;
	margin-left: 6px;
	vertical-align: middle;
	position: relative;
	top: -5px;
}

.widget.user-numbers .displayname .distinction-icons img {
	height: 18px;
	width: 18px;
}

.widget.user-numbers .stat {
	position: relative;
	height: 15px;
	font-size: 14px;
	border-bottom: dotted 1px #666666;
	margin-bottom: 4px;
}

.widget.user-numbers .stat .label {
	background-color: #ffffff;
	position: absolute;
	height: 16px;
	top: 0;
	left: 0;
}

.widget.user-numbers .stat .number {
	background-color: #ffffff;
	position: absolute;
	height: 16px;
	top: 0;
	right: 0;
}

.widget.user-numbers a {
	color: #000000;
}

.widget.user-numbers a:hover {
	background-color: #000000;
	color: #FFFFFF;
}

.widget.user-numbers .stat-container .title {
	font-size: 10px;
	text-transform: uppercase;
}

.widget.user-numbers .stat-container .number {
	font-weight: bold;
}

.widget.user-numbers .users-online-dropdown {
	position: relative;
	z-index: 10;
	margin-left: 100px;
}

.widget.user-numbers .users-online-dropdown .title {
	font-size: 10px;
	text-transform: uppercase;
	color: #db880f;
	cursor: pointer;
}

.widget.user-numbers .users-online-dropdown .dropdown {
	position: absolute;
	left: 0;
	top: 14px;
	background-color: #FFFFFF;
	opacity: 0.9;
	display: none;
	max-height: 250px;
	overflow-y: auto;
	overflow-x: hidden;
}

.widget.user-numbers .users-online-dropdown .dropdown .online-user {
	display: block;
	padding: 4px;
	white-space: nowrap;
}

.widget.user-numbers .users-online-dropdown .dropdown .online-user .avatar {
	height: 20px;
	width: 20px;
	position: relative;
	top: 0;
	left: 0;
	margin-right: 4px;
	display: inline-block;
}

.widget.user-numbers .users-online-dropdown .dropdown .online-user .displayname {
	display: inline-block;
}

.widget.group-widgets .content {
	word-wrap: break-word;
}

.widget.legendary-tier-list .avatar-container {
	position: relative;
	height: 200px;
}

.widget.legendary-tier-list .avatar-container .avatar {
	position: absolute;
	height: 140px;
	width: 140px;
	border-radius: 50%;
	top: 0px;
	left: 0px;
	z-index: 1;
	background-size: cover;
	background-position: center;
}

.widget.legendary-tier-list .avatar-container .hero-avatar {
	position: absolute;
	height: 160px;
	width: 160px;
	border-radius: 50%;
	bottom: 0px;
	right: 0px;
	z-index: 2;
	background-size: cover;
	background-position: center;
}

.widget.legendary-tier-list .avatar-container .avatar:hover, .widget.legendary-tier-list .avatar-container .hero-avatar:hover {
	box-shadow: 0 0 20px #db880f;
}

.widget.legendary-tier-list .displayname {
	font-weight: bold;
	font-size: 20px;
	margin-bottom: 10px;
	line-height: 1;
	margin-top: 8px;
}

.widget.legendary-tier-list .displayname a {
	color: #db880f;
}

.widget.legendary-tier-list .displayname a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.widget.legendary-tier-list .displayname .distinction-icons {
	display: inline-block;
	width: 16px;
	height: 16px;
	vertical-align: middle;
	position: relative;
	top: -2px;
}

.widget.legendary-tier-list .displayname .distinction-icons img {
	width: 16px;
}

.widget.legendary-tier-list .date {
	line-height: 1;
	font-style: italic;
}

.widget.user-comfort-picks .widget-comfort-picks-shade {
	background-color: #000000;
	position: fixed;
	opacity: 0.9;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 999;
	display: none;
}

.widget.user-comfort-picks .widget-comfort-picks-editor {
	position: fixed;
	background-color: #FFFFFF;
	top: 50%;
	left: 50%;
	max-height: 500px;
	width: 900px;
	margin-top: -250px;
	margin-left: -450px;
	padding: 20px;
	z-index: 1000;
	display: none;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-selector-container {
	display: inline-block;
	margin-right: 15px;
	position: relative;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-selector-container:last-child {
	margin-right: 0;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-selector {
	display: block;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
	top: 0px;
	left: 0px;
	box-sizing: border-box;
	opacity: 0.5;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-selector.selected {
	opacity: 1;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-row, .widget.user-comfort-picks .widget-comfort-picks-editor .hero-row-pad {
	display: block;
	margin-bottom: 10px;
	text-align: center;
	font-size: 0.1px;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-selector-container .title {
	position: absolute;
	background-color: #db880f;
	color: #FFFFFF;
	font-family: 'Overpass', sans-serif;
	font-weight: bold;
	padding: 4px;
	text-transform: uppercase;
	top: 55px;
	font-size: 14px !important;
	left: 50%;
	transform: translate(-50%);
	box-sizing: border-box;
	white-space: nowrap;
	display: none;
	z-index: 50;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .hero-selector-container .title .arrow {
	border-left: solid 5px transparent;
	border-right: solid 5px transparent;
	border-bottom: solid 5px #db880f;
	position: absolute;
	top: -5px;
	left: 50%;
	margin-left: -5px;
}

.widget.user-comfort-picks .widget-comfort-picks-editor .button-container {
	text-align: right;
}

.widget.user-comfort-picks .comfort-picks-list {
	text-align: center;
}

.widget.user-comfort-picks .hero-avatar {
	display: inline-block;
	margin: 5px;
	height: 60px;
	width: 60px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
}

.widget.user-comfort-picks .hero-avatar:hover {
	opacity: 0.7;
}

.widget.build-feed .widget-build-container, .widget.blog-posts .widget-blog-container {
	display: block;
	position: relative;
	margin-bottom: 20px;
	vertical-align: top;
}

.widget.build-feed .widget-build-container:last-child, .widget.blog-posts .widget-blog-container:last-child {
	margin-bottom: 0;
	border-bottom: 0;
	padding-bottom: 0;
}

.widget.build-feed .widget-build-container:hover .image .vitals-container, .widget.blog-posts .widget-blog-container:hover .image .vitals-container {
	opacity: 0.9;
	transition: opacity 0.2s;
}

.widget.build-feed .widget-build-container .image, .widget.blog-posts .widget-blog-container .image {
	display: block;
	width: 100%;
	padding-bottom: 44%;
	background-size: cover;
	background-position: center;
	position: relative;
	margin-bottom: 5px;
}

.widget.build-feed .widget-build-container .image .ptr-label {
	position: absolute;
	top: 10px;
	right: 10px;
	background-color: #db880f;
	color: #ffffff;
	font-weight: 900;
	text-transform: uppercase;
	padding: 4px 4px 2px 4px;
	line-height: 1;
	font-size: 14px;
}

.widget.build-feed .widget-build-container .image .vitals-container, .widget.blog-posts .widget-blog-container .image .vitals-container {
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #000000;
	opacity: 0;
	z-index: 1;
	transition: opacity 0.2s;
}

.widget.build-feed .widget-build-container .image .vitals-container .vitals, .widget.blog-posts .widget-blog-container .image .vitals-container .vitals {
	display: block;
	position: absolute;
	text-align: center;
	text-align-last: center;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	color: #ffffff;
	font-weight: bold;
	font-family: 'Overpass', sans-serif;
	text-transform: uppercase;
}

.widget.build-feed .widget-build-container .image .talents-container {
	position: absolute;
	left: 0;
	right: 0;
	bottom: 5px;
	text-align: center;
	text-align-last: center;
	line-height: 1;
}

.widget.build-feed .widget-build-container .image .talents-container .talent {
	display: inline-block;
	height: 20px;
	width: 20px;
	border: solid 2px #ffffff;
	background-size: cover;
	background-position: center;
	border-radius: 50%;
	margin: 0 1px;
}

.widget.build-feed .widget-build-container .title, .widget.blog-posts .widget-blog-container .title {
	display: block;
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	margin-top: 10px;
	margin-bottom: 4px;
	text-align: left;
	text-align-last: left;
	font-size: 16px;
	line-height: 1.2;
	color: #000000;
}

.widget.build-feed .widget-build-container .byline, .widget.blog-posts .widget-blog-container .byline {
	display: block;
}

.widget.build-feed .widget-build-container .byline .distinction-icons, .widget.blog-posts .widget-blog-container .byline .distinction-icons {
	width: 16px;
	height: 16px;
	display: inline-block;
	vertical-align: middle;
	margin-left: 5px;
}

.widget.build-feed .widget-build-container .byline .distinction-icons img, .widget.blog-posts .widget-blog-container .byline .distinction-icons img {
	width: 16px;
	height: 16px;
}

.widget.twitch .tab {
	display: inline-block;
	background-color: #ababab;
	color: #000000;
	padding: 2px;
	margin-bottom: 10px;
}

.widget.twitch .tab.selected, .widget.twitch .tab:hover {
	background-color: #FFFFFF;
	font-weight: bold;
	font-size: 120%;
}

.widget.twitch .panel-container {
	position: relative;
	margin-bottom: 20px;
}

.widget.twitch .panel-container .panel {
	display: none;
}

.widget.twitch .panel-container .panel.selected {
	display: block;
}

.widget.twitch .panel-container .panel .stream-container {
	margin-bottom: 20px;
	position: relative;
}

.widget.twitch .panel-container .panel .stream-container:last-child {
	margin-bottom: 0;
}

.widget.twitch .panel-container .panel .stream-container .image {
	position: relative;
	display: block;
}

.widget.twitch .panel-container .panel .stream-container .image .vitals {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #000000;
	opacity: 0;
	transition: all 0.2s;
}

.widget.twitch .panel-container .panel .stream-container .image:hover .vitals {
	opacity: 0.9;
	transition: all 0.2s;
}

.widget.twitch .panel-container .panel .stream-container .image .vitals .info {
	position: absolute;
	color: #FFFFFF;
	font-weight: bold;
	text-align: center;
	top: 50%;
	left: 0;
	right: 0;
	transform: translateY(-50%);
}

.widget.twitch .panel-container .panel .stream-container .image img {
	display: block;
}

.widget.twitch .panel-container .panel .stream-container .avatar {
	display: block;
	position: absolute;
	bottom: 20px;
	left: 20px;
	height: 40px;
	width: 40px;
	border-radius: 50%;
}

.widget.hhe-stream h3 .viewers {
	float: right;
	font-size: 12px;
	font-weight: normal;
	position: relative;
	bottom: -4px;
	line-height: 1;
}

.widget.hhe-stream h3 .viewers .meeple {
	display: inline-block;
	vertical-align: middle;
	margin-left: 5px;
	height: 12px;
	position: relative;
	top: -2px;
}

.widget.hhe-stream iframe {
	display: block;
}

.widget.user-avatar .distinction-icons {
	width: 16px;
	height: 16px;
	display: inline-block;
	vertical-align: topmiddle;
}

.widget.hgc-standings .hgc-standings-regions {
	line-height: 1;
	margin-bottom: 5px;
	padding-bottom: 5px;
	border-bottom: solid 1px #999999;
	font-size: 16px;
	text-align-last: justify;
}

.widget.hgc-standings .hgc-standings-region {
	color: #999999;
	font-weight: bold;
	display: inline-block;
}

.widget.hgc-standings .hgc-standings-region.selected, .widget.hgc-standings .hgc-standings-region:hover {
	color: #db880f;

	font-size: 110%;
}

.widget.hgc-standings .hgc-standings-table {
	width: 100%;
	font-size: 14px;
}

.widget.hgc-standings .hgc-standings-table .head {
	font-weight: bold;
}

.widget.hgc-standings .hgc-standings-table .head .title, .widget.hgc-standings .hgc-standings-container .title {
	font-size: 14px;
	font-weight: bold;
}

.widget.hgc-standings .hgc-standings-table .wl, .widget.hgc-standings .hgc-standings-table .points {
	text-align: center;
	width: 15%;
}

.widget.hgc-standings .hgc-standings-divider {
	padding-top: 5px;
	margin-bottom: 5px;
	border-bottom: solid 1px #999999;
}

.widget.user-team .team-user-container {
	margin-bottom: 10px;
}

.widget.user-team .team-user-container .avatar {
	display: inline-block;
	width: 60px;
	height: 60px;
	vertical-align: middle;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
}

.widget.user-team .team-user-container .avatar:hover {
	box-shadow: 0 0 10px #db880f;
}

.widget.user-team .team-user-container .info {
	display: inline-block;
	vertical-align: middle;
	margin-left: 10px;
}

.widget.user-team .team-user-container .info .displayname {
	margin-bottom: 3px;
	line-height: 1;
}

.widget.user-team .team-user-container .info .displayname a {
	font-weight: bold;
	color: #db880f;
}

.widget.user-team .team-user-container .info .displayname a:hover {
	color: #ffffff;
	background-color: #db880f;
}

.widget.user-team .team-user-container .info .title {
	line-height: 1;
}

.widget.user-guild .avatar {
	display: block;
	margin: 0 auto 10px auto;
	width: 60%;
	padding-bottom: 60%;
	background-size: cover;
	background-position: center;
	border-radius: 50%;
}

.widget.user-guild .avatar:hover {
	opacity: 0.7;
}

.widget.user-guild .title {
	text-align: center;
	font-size: 20px;
	font-weight: 900;
	letter-spacing: 1px;
}

.widget.user-guild .title a {
	color: #212121;
}

.widget.user-guild .title a:hover {
	background-color: #212121;
	color: #ffffff;
}

.widget.user-guild .realm {
	font-size: 14px;
	text-align: center;
}


.post {
	background-color: #FFFFFF;
	padding: 20px;
	font-size: 17px;
	margin-bottom: 20px;
	line-height: 1.6;
	padding-bottom: 10px;
	position: relative;
}

.post.new {
	display: none;
}

.post a {
	color: #000000;
	text-decoration: none;
}

.post a:hover {
	color: #FFFFFF;
	background-color: #000000;
}

.post .share-credit {
	margin-bottom: 20px;
}

.post .share-credit, .post .share-credit a {
	color: #999999;
	font-style: italic;
}

.post .share-credit a:hover {
	color: #FFFFFF;
	background-color: #bebebe;
}

.post .info {
	margin-bottom: 11px;
}

.post .info .avatar {
	display: block;
	float: left;
	height: 50px;
	width: 50px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	vertical-align: middle;
	margin-right: 10px;
	position: relative;
}

.post .info .avatar:hover {
	box-shadow: 0 0 5px #db880f;
}

.post .info .avatar .avatar-border {
	max-width: 100%;
}

.post .info .name {
	display: block;
	font-weight: bold;
	font-size: 18px;
	font-family: 'Open Sans', sans-serif;
	line-height: 1;
	margin-bottom: 6px;
}

.post .info .post-guild-title {
	margin-top: 5px;
	font-weight: 400;
	font-size: 14px;
	font-style: italic;
}

.post .info .date {
	display: block;
	font-style: italic;
	font-size: 12px;
	color: #777777;
}

.post .body {
	margin-bottom: 20px;
	word-wrap: break-word;
}

.post .body iframe {
	margin-left: auto;
	margin-right: auto;
	display: block;
	margin-top: 10px;
}

.post .image {
	text-align: center;
}

.post .image img, .post .image object {
	max-width: 100%;
}

.post .image a:hover {
	opacity: 0.7;
	background-color: transparent;
}

.post .images {
	margin-bottom: 10px;
}

.post .vitals {
	border-top: solid 1px #bebebe;
	text-align: center;
	padding-top: 10px;
	line-height: 1;
}

.post .vitals a, .post .vitals .commenter-noclick, .post .vitals .liker-noclick, .post .vitals .kapper-noclick {
	font-weight: bold;
	display: inline-block;
	margin-left: 10px;
	margin-right: 10px;
	opacity: 0.4;
	letter-spacing: 0.08em;
	font-size: 13px;
	font-family: 'Open Sans', sans-serif;
}

.post .vitals a:hover {
	opacity: 1;
	color: #000000;
	background-color: transparent;
}

.post .vitals .liker.liked, .post .vitals .kapper.kapped {
	opacity: 1;
	color: #db880f;
}

.post .comment-add-container {
	margin-top: 20px;
	text-align: right;
	position: relative;
	display: none;
}

.post .comment-input.over {
	box-shadow: 0 0 16px #db880f;
}

.post .comment-add-container .comment-input {
	resize: none;
	border: 0;
	height: 60px;
	width: 100%;
	background-color: #e4e4e4;
	font-family: 'Roboto Slab', serif;
	font-size: 14px;
	text-align: left;
	outline: none;
	padding: 15px;
	box-sizing: border-box;
}

.post .comment-add-container .comment-add-button-container {
	margin-top: 5px;
}

.post .comment-add-container .comment-add-button {
	font-weight: bold;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	text-decoration: none;
	background-color: #db880f;
	color: #FFFFFF;
	padding: 4px;
	display: inline-block;
	font-size: 12px;
}

.post .comment-add-container .comment-add-button:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.post .comment-add-container .comment-add-image-error {
	text-align: left;
	color: #FF0000;
	font-weight: bold;
}

.post .comment-add-container .comment-add-image-preview {
	text-align: left;
}

.post .comment-add-container .comment-add-preview-image {
	height: 40px;
	width: 40px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	display: inline-block;
	position: relative;
}

.post .comment-add-container .comment-add-image-remove-button {
	height: 14px;
	width: 14px;
	position: absolute;
	top: -7px;
	right: -7px;
	display: none;
	opacity: 0.7;
}

.post .comment-add-container .comment-add-preview-image:hover .comment-add-image-remove-button {
	display: block;
}

.post .comment-add-container .comment-add-preview-image .comment-add-image-remove-button:hover {
	opacity: 1;
	background-color: transparent;
}

.post .comment-add-container .comment-add-progress-container {
	position: absolute;
	border: solid 1px #db880f;
	width: 100%;
	height: 4px;
	display: none;
	bottom: 0;
	left: 0;
	right: 0;
}

.post .comment-add-container .comment-add-progress-container .comment-add-progress {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 0;
	width: 0;
	background-color: #db880f;
}

.post .comments .comment:first-child {
	border-top: solid 1px #bebebe;
	margin-top: 10px;
	padding-top: 10px;
}

.post .comments .comment {
	margin-top: 20px;
}

.post .comments .comment .body iframe {
	max-width: 100% !important;
}

.post .comments .comment .vitals {
	border-top: 0;
	margin-top: 0;
	text-align: left;
	padding-top: 0;
}

.post .comments .comment .avatar {
	float: left;
	height: 35px;
	width: 35px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
	display: block;
	border-radius: 50%;
}

.post .comments .comment .avatar:hover {
	box-shadow: 0 0 5px #db880f;
}

.post .comments .comment .info {
	margin-left: 45px;
	margin-bottom: 0;
}

.post .comments .comment .info .name {
	font-size: 14px;
	margin-bottom: 3px;
}

.post .comments .comment .info .date {
	color: #777777;
	margin-bottom: 1px;
}

.post .comments .comment .info .byline {
	margin-bottom: 8px;
}

.post .comments .comment .info .body {
	font-size: 16px;
	padding-top: 2px;
	margin-bottom: 3px;
	position: relative;
	top: -1px;
}

.post .comments .comment .images {
	padding-top: 10px;
	margin-bottom: 5px;
}

.post .comments .comment .images .image {
	text-align: left;
}

.post .comments .comment .vitals {
	margin-left: 45px;
	margin-top: 3px;
}

.post .comments .comment .vitals .liker, .post .comments .comment .vitals .kapper {
	margin-left: 0;
	font-size: 13px;
}

.post .comments .comment .vitals .deleter {
	font-size: 13px;
}

.post .comments .show-comments-button {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	color: #bebebe;
	border-top: solid 1px #bebebe;
	display: block;
	text-align: center;
	text-transform: uppercase;
	margin-top: 20px;
	padding-top: 20px;
	padding-bottom: 20px;
	border-bottom: solid 1px #bebebe;
}

.post .comments .show-comments-button:hover {
	color: #FFFFFF;
	background-color: #bebebe;
}

.post .promotion {
	margin-bottom: 10px;
	font-size: 18px;
	font-family: 'Open Sans', sans-serif;
	font-weight: bold;
}

.post .promotion a {
	color: #db880f;
}

.post .promotion a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.post .promotion .date {
	color: #515151;
	font-size: 80%;
	margin-left: 20px;
}

.load-more-container {
	text-align: center;
	margin-top: 40px;
	margin-bottom: 40px;
}

.load-more-button {
	font-size: 40px;
	font-weight: bold;
	display: inline-block;
	line-height: 40px;
	width: 40px;
	text-align: center;
	background-color: #bebebe;
	color: #db880f;
}

.load-more-button:hover {
	background-color: #db880f;
	color: #666666;
}

.feed-loading {
	text-align: center;
	margin-top: 40px;
	margin-bottom: 40px;
}

.pretty-link {
	padding: 10px;
	border: solid 4px #e4e4e4;
	margin-bottom: 20px;
	line-height: 1.3;
}

.pretty-link .image {
	display: block;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	margin-bottom: 10px;
}

.pretty-link .image img {
	width: 100%;
	display: block;
}

.pretty-link .image:hover {
	opacity: 0.7;
}

.pretty-link .title {
	margin-bottom: 6px;
	font-size: 20px;
	font-weight: bold;
	font-family: 'Open Sans', sans-serif;
}

.pretty-link .title a {
	color: #db880f;
}

.pretty-link .title a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.pretty-link .site-name {
	font-size: 14px;
}

.pretty-link .site-name a {
	color: #777777;
}

.pretty-link .site-name a:hover {
	background-color: #777777;
	color: #FFFFFF;
}

.pretty-link .description {
	font-size: 14px;
	margin-bottom: 6px;
	line-height: 1.6;
	max-height: 67px;
	overflow: hidden;
	text-overflow: ellipsis;
}

.post .share-container {
	padding: 10px;
	border: solid 4px #e4e4e4;
}

.post .share-container .image {
	display: block;
	float: left;
	height: 100px;
	width: 100px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.post .share-container.tier .image {
	display: block;
	width: 100%;
	padding-bottom: 34.375%;
	float: none;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.post .share-container.build .info {
	margin-bottom: 0;
	margin-left: 0 !important;
}

.post .share-container .image:hover {
	opacity: 0.7;
}

.post .share-container .info.allow-image {
	margin-left: 110px;
}

.post .share-container .info .title {
	margin-bottom: 6px;
	font-size: 18px;
	font-weight: bold;
	font-family: 'Overpass', sans-serif;
}

.post .share-container.tier .title {
	font-size: 24px;
	font-weight: 900;
}

.post .share-container.tier .title a {
	color: #db880f;
}

.post .share-container.tier .title a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.post .share-container.tier .byline .avatar {
	display: inline-block;
	width: 30px;
	height: 30px;
	margin-right: 6px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	vertical-align: middle;
}

.post .share-container.tier .byline .avatar:hover {
	opacity: 0.7;
}

.post .share-container .info .title a {
	color: #db880f;
}

.post .share-container .info .title a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.twitter-tweet {
	margin: 0 auto;
}

.share-container.build {
	line-height: 1.2;
}

.share-container.build .share-image, .share-container.concept-hero .image {
	display: block;
	width: 662px;
	height: 228px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
	margin-bottom: 10px;
	max-width: 100%;
}

.share-container.build .share-image:hover, .share-container.concept-hero .image:hover {
	box-shadow: 0 0 10px #db880f;
	opacity: 0.8;
	background-color: transparent;
}

.share-container .share-image .talents {
	position: absolute;
	bottom: 20px;
	right: 20px;
	font-size: 0.1px;
}

.share-container .share-image .talents .talent {
	display: inline-block;
	height: 46px;
	width: 46px;
	margin-left: 4px;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	border: solid 2px #FFFFFF;
}

.share-container.build .info .title .hero {
	color: #db880f;
}

.share-container.build .info .description {
	font-size: 14px;
	line-height: 1.6;
	margin-bottom: 10px;
	max-height: 63px;
	overflow: hidden;
	text-overflow: ellipsis;
}

.share-container.concept-hero .title {
	font-weight: bold;
}

.share-container.concept-hero .title a {
	color: #db880f;
}

.share-container.concept-hero .title a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.share-container.build .info .byline, .share-container.blog .info .byline, .share-container.concept-hero .byline {
	font-size: 12px;
	font-style: italic;
	color: #858585;
	line-height: 30px;
}

.share-container.build .info .byline a, .share-container.blog .info .byline a, .share-container.concept-hero .byline a {
	color: #db880f;
}

.share-container.build .info .byline a:hover, .share-container.blog .info .byline a:hover, .share-container.concept-hero .byline a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.share-container.build .info .byline .avatar, .share-container.blog .info .byline .avatar, .share-container.concept-hero .byline .avatar {
	height: 30px;
	width: 30px;
	border-radius: 50%;
	margin-right: 6px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	display: inline-block;
	vertical-align: middle;
	position: relative;
}

.share-container.build .info .byline .avatar:hover, .share-container.blog .info .byline .avatar:hover, .share-container.concept-hero .byline .avatar:hover {
	background-color: transparent;
	opacity: 0.8;
}

.post .share-credit.build, .post .share-credit.blog, .post .share-credit.concept-hero, .post .share-credit.tier {
	font-weight: normal;
	display: inline;
	font-size: 15px;
}

.share-container.blog .info .byline {
	margin-top: 6px;
}

.post .share-container.blog .info {
	margin-bottom: 0;
	margin-left: 148px;
}

.post .share-container.blog .content {
	font-size: 14px;
	height: 68px;
	overflow: hidden;
}

.post .share-container.blog .image {
	height: 138px;
	width: 138px;
}

.comment-insert-build-button, .comment-insert-image-button, .comment-insert-heroji-button {
	float: left;
	line-height: 1;
	font-size: 11px;
	padding: 3px;
	background-color: #000000;
	color: #ffffff !important;
	margin-right: 4px;
}

.comment-insert-build-button:hover, .comment-insert-image-button:hover, .comment-insert-heroji-button:hover {
	background-color: #e4e4e4 !important;
	color: #000000 !important;
}

.comment-giphy-button {
	height: 17px;
	display: inline-block;
	float: left;
}

.comment-giphy-button:hover {
	background-color: transparent;
	opacity: 0.7;
}

.comment-giphy-button img {
	height: 17px;
	display: block;
}

.comment-build-search-container {
	float: left;
	position: relative;
	display: none;
}

.comment-build-search-input {
	font-family: 'Open Sans', sans-serif;
	font-weight: bold;
	width: 300px;
}

.comment-build-search-results {
	position: absolute;
	background-color: #FFFFFF;
	top: 23px;
}

.comment-build-search-result {
	display: block;
	padding: 4px;
	padding-right: 8px;
	line-height: 1;
	position: relative;
	color: #db880f;
	font-weight: bold;
	font-family: 'Open Sans', sans-serif;
}

.comment-build-search-result:hover, .comment-build-search-result:focus {
	background-color: #db880f;
}

.comment-build-search-result .avatar {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 60px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.comment-build-search-result .title {
	margin-left: 65px;
	display: block;
	margin-bottom: 2px;
}

.comment-build-search-result .hero {
	color: #000000;
	font-size: 12px;
	display: block;
	margin-left: 65px;
}

.comment-build-search-result:hover span, .comment-build-search-result:focus span {
	color: #FFFFFF;
}

.pinner {
	text-transform: uppercase;
}

.pinner.pinned {
	color: #db880f !important;
	opacity: 1 !important;
}

.post .gfycat {
	display: block;
	margin: 10px auto;
	max-width: 100%;
}

.sharer.shared {
	color: #db880f !important;
	opacity: 1 !important;
}

.pretty-link.twitch .image {
	display: block;
	height: 138px;
	width: 138px;
	float: left;
	margin-bottom: 0;
	background-size: cover;
	background-position: center;
}

.comment-giphy-results-container {
	position: absolute;
	left: 0;
	right: 0;
	height: 400px;
	bottom: -400px;
	background-color: #FFFFFF;
	z-index: 500;
	padding: 10px;
	display: none;
	border: solid 1px #ababab;
	border-radius: 0 0 3px 3px;
}

.comment-giphy-results-container .search-container {
	margin-bottom: 10px;
	text-align: left;
}

.comment-giphy-list {
	text-align: left;
}

.comment-giphy-close-button, .comment-heroji-close-button {
	position: absolute;
	top: 5px;
	right: 5px;
	opacity: 0.5;
}

.comment-giphy-close-button:hover, .comment-heroji-close-button:hover {
	opacity: 1;
	background-color: transparent !important;
}	

.comment-giphy-gif-button {
	display: inline-block;
	height: 110px;
	width: 110px;
	background-size: cover;
	background-position: center;
}

.comment-giphy-gif-button:hover {
	opacity: 0.7;
}

.comment-insert-heroji-container {
	position: absolute;
	left: 0;
	right: 0;
	height: 100px;
	bottom: -100px;
	background-color: #FFFFFF;
	z-index: 500;
	padding: 10px;
	display: none;
	border: solid 1px #ababab;
	border-radius: 0 0 3px 3px;
	text-align: left;
}

.comment-insert-heroji-container .packs-container {
	position: absolute;
	top: 0;
	left: 0;
	height: 30px;
	font-size: 0.1px;
}

.comment-insert-heroji-container .packs-container .comment-select-heroji-pack-button {
	display: inline-block;
	height: 30px;
	width: 30px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	filter: saturate(20%);
}

.comment-insert-heroji-container .packs-container .comment-select-heroji-pack-button:hover, .comment-insert-heroji-container .packs-container .comment-select-heroji-pack-button.selected {
	filter: saturate(100%);
	background-color: transparent;
}

.comment-insert-heroji-container .pack-container {
	position: absolute;
	top: 40px;
	left: 0;
	bottom: 0;
	right: 0;
	overflow-x: auto;
	overflow-y: hidden;
	white-space: nowrap;
}

.comment-insert-heroji-container .pack-container .comment-heroji-button {
	display: inline-block;
	height: 57px;
	width: 57px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
	opacity: 0.8;
}

.comment-insert-heroji-container .pack-container .comment-heroji-button:hover {
	opacity: 1;
	background-color: transparent;
}

.post .post-channel-indicator {
	position: absolute;
	top: 20px;
	right: 45px;
	width: 16px;
	filter: grayscale(100%);
	transition: filter 0.2s;
}

.post .post-channel-indicator:hover {
	filter: grayscale(0%);
	transition: filter 0.2s;
}

.post .post-options-button {
	position: absolute;
	top: 20px;
	right: 20px;
	display: block;
}

.post .post-options-button:hover {
	filter: brightness(50%);
	background-color: transparent;
}

.post .post-options-button img {
	width: 16px;
	display: block;
}

.post .post-dropdown-menu {
	position: absolute;
	top: 20px;
	right: 20px;
	background-color: #FFFFFF;
	border: solid 1px #ababab;
	display: none;
}

.post .post-dropdown-menu a {
	display: block;
	font-family: 'Open Sans', sans-serif;
	border-bottom: solid 1px #ababab;
	font-size: 12px;
	padding: 3px;
	line-height: 1;
	text-transform: uppercase;
	text-align: center;
	width: 100px;
}

.post .post-dropdown-menu a:last-child {
	border-bottom: 0;
}

.post .post-dropdown-menu a:hover {
	background-color: #666666;
	color: #FFFFFF;
}

.post .post-dropdown-menu .url-copy-button input {
	display: none;
	position: absolute;
}

.post .url-container .url-copy-button {
	font-family: 'Open Sans', sans-serif;
	font-size: 12px;
	padding: 1px;
	border: solid 1px #000000;
	line-height: 1;
}

.post .url-copy-success {
	font-family: 'Open Sans', sans-serif;
	font-size: 12px;
	color: #00CC00;
	font-weight: bold;
	line-height: 1;
	position: absolute;
	top: 20px;
	right: 40px;
	display: none;
}

.post .url-copy-success img {
	vertical-align: middle;
	width: 16px;
}

.post .pin {
	position: absolute;
	top: -14px;
	right: -6px;
	transform: rotate(45deg);
}

.post .pin img {
	height: 20px;
}

.post .distinction-icons {
	display: inline-block;
	vertical-align: middle;
	height: 17px;
	width: 17px;
	position: relative;
	top: -1px;
}

.post .distinction-icons img {
	width: 17px;
	height: 17px;
}

.post.screenshot .image a:hover {
	background-color: transparent;
}

.post.screenshot .delete a, .post.screenshot .delete {
	color: #000000;
}

.post.screenshot .delete a:hover {
	color: #ffffff;
	background-color: #000000;
}

.post .post-url-container {
	border: solid 5px #ababab;
	padding: 20px;
	width: 80%;
	margin: 0 auto;
	position: relative;
	margin-bottom: 20px;
}

.post .post-url-container:after {
	content: '';
	display: table;
	clear: both;
}

.post .post-url-container .image {
	display: block;
	width: 35%;
	padding-bottom: 35%;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	vertical-align: top;
	float: left;
}

.post .post-url-container .info {
	display: block;
	width: 62%;
	float: right;
	vertical-align: top;
	margin-left: 0 !important;
}

.post .post-url-container .info .title {
	font-weight: bold;
	font-size: 120%;
	margin-bottom: 5px;
}

.post .post-url-container .info .url {
	font-size: 80%;
}

.post .post-url-container .info .url a {
	color: #db880f;
}

.post .post-url-container .info .url a:hover {
	color: #ffffff;
	background-color: #db880f;
}

.feed .post {
	margin-bottom: 0;
}

.feed .post .info .avatar {
	border-radius: 50%;
	float: none;
	display: inline-block;
	vertical-align: middle;
}

.feed .post .info .name-date-container {
	display: inline-block;
	vertical-align: middle;
}

.feed .post .info .name {
	font-family: 'Overpass', sans-serif;
	font-size: 18px;
	line-height: 1;
	font-weight: 900;
}

.feed .post .info .date {
	font-family: 'Overpass', sans-serif;
	line-height: 1;
}

.feed .post .body {
	margin-bottom: 14px;
}

.feed .post .share-container {
	margin-bottom: 14px;
}

.feed .post .post-divider {
	border-bottom: solid 1px #dfdfdf;
	margin-top: 20px;
}

.feed .post .vitals {
	border: 0;
	padding: 0;
	text-align: left;
	font-family: 'Teko', sans-serif;
	padding-bottom: 12px;
}

.feed .post .vitals ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

.feed .post .vitals ul li {
	display: inline-block;
	padding: 0 10px 0 0;
	border-right: solid 1px #db880f;
	margin-right: 10px;
	line-height: 1;
}

.feed .post .vitals ul li:last-child {
	border-right: 0;
	margin-right: 0;
	padding-right: 0;
}

.feed .post .vitals a, .feed .post .vitals .commenter-noclick, .feed .post .vitals .liker-noclick, .feed .post .vitals .kapper-noclick {
	margin: 0;
	font-family: 'Teko', sans-serif;
	color: #000000;
}

.feed .post .comments {
	margin-left: 64px;
	border-left: solid 1px #dfdfdf;
	padding-left: 20px;
	margin-top: 20px;
}

.feed .post .comments .show-comments-button {
	font-family: 'Teko', sans-serif;
	border: 0;
	color: #dfdfdf;
	font-size: 30px;
	font-weight: normal;
}

.feed .post .comments .show-comments-button:hover {
	background-color: #dfdfdf;
	color: #ffffff;
}

.feed .post .comments .comment:first-child {
	border-top: 0;
	margin-top: 0;
	padding-top: 0;
}

.feed .post .comments .comment .info .name {
	font-size: 18px;
}

.feed .post .comments .comment .info .body {
	font-size: 90%;
}

.feed .post .comments .comment .vitals .ul li {	
	line-height: 1;
}#page {
	margin-top: 60px;
	width: 1090px;
}

.hearth-module {
	background-color: #FFFFFF;
	border: solid 1px #eaeaea;
	box-shadow: 0 0 4px #eaeaea;
	padding: 20px;
	padding-bottom: 30px;
	width: 1090px;
	position: relative;
}

.hearth-module:first-child {
	padding-top: 0;
}

.hearth-module.featured {
	text-align-last: justify;
	padding-bottom: 40px;
}

.hearth-module .hearth-feature {
	display: inline-block;
	width: 32%;
	vertical-align: top;
}

.hearth-module .hearth-feature:not(.top) .image {
	display: block;
	width: 100%;
	padding-bottom: 50%;
	background-size: cover;
	background-position: center;
	position: relative;
}

.hearth-module .hearth-feature:not(.top) .byline .distinction-icons {
	display: inline-block;
	margin-left: 5px;
	vertical-align: middle;
	height: 14px;
	width: 14px;
	position: relative;
	top: -2px;
}

.hearth-module .hearth-feature:not(.top) .byline .distinction-icons img {
	width: 14px;
	height: 14px;
}

.hearth-module .hearth-feature.top {
	width: 100%;
	padding-bottom: 50%;
	display: block;
	margin-bottom: 20px;
	background-size: cover;
	background-position: center;
	position: relative;
}

.hearth-module .hearth-feature.top .byline .distinction-icons {
	display: inline-block;
	width: 20px;
	height: 20px;
	vertical-align: middle;
	margin-left: 5px;
	position: relative;
	top: -2px;
}

.hearth-module .hearth-feature.top .byline .distinction-icons img {
	display: block;
	width: 20px;
	height: 20px;
}

.hearth-module .hearth-feature.top:hover {
	box-shadow: 0 0 10px #eaeaea;
}

.hearth-module .hearth-feature.top .info {
	position: absolute;
	color: #ffffff;
	bottom: 0;
	left: 0;
	right: 0;
	padding-bottom: 20px;
	padding-left: 20px;
	padding-right: 20px;
	padding-top: 100px;
	text-align-last: left;
	background: -moz-linear-gradient(top, rgba(89,89,89,0) 0%, rgba(25,25,25,0.77) 100%);
	background: -webkit-linear-gradient(top, rgba(89,89,89,0) 0%,rgba(25,25,25,0.77) 100%);
	background: linear-gradient(to bottom, rgba(89,89,89,0) 0%,rgba(25,25,25,0.77) 100%);
}

.hearth-module .hearth-feature.top .info .title {
	font-family: 'Overpass', sans-serif;
	font-size: 40px;
	font-weight: 900;
	display: block;
	line-height: 1.3;
}

.hearth-module .hearth-feature.top .info .byline {
	display: block;
	color: #ffffff !important;
}

.hearth-module .hearth-feature:not(.top) .info {
	display: block;
	text-align-last: left;
}

.hearth-module .hearth-feature:not(.top) .info .title {
	font-family: 'Overpass', sans-serif;
	color: #000000;
	font-weight: 700;
	display: block;
	font-size: 20px;
	line-height: 1.1;
	margin-top: 10px;
	margin-bottom: 6px;
}

.hearth-module .hearth-feature:not(.top):hover .image {
	box-shadow: 0 0 5px #eaeaea;
}

.hearth-module .hearth-feature:not(.top) .info .byline {
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-style: italic;
	display: block;
	line-height: 1.3;
	color: #666666;
}

.hearth-module .hearth-module-title {
	font-family: 'Overpass', sans-serif;
	font-weight: 900;
	font-size: 30px;
	text-transform: uppercase;
	line-height: 1;
	position: relative;
	margin-bottom: 22px;
	text-align-last: left;
	letter-spacing: 1px;
}

.hearth-module .hearth-module-title .bar {
	display: inline;
	color: #db880f;
}

.hearth-module .hearth-module-title .tabs-container {
	float: right;
	font-family: 'Teko', sans-serif;
	text-transform: uppercase;
	font-size: 22px;
	line-height: 1;
	position: relative;
	z-index: 3;
	margin-top: 5px;
	top: 1px;
}

.hearth-module .hearth-module-title .tabs-container ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

.hearth-module .hearth-module-title .tabs-container ul li {
	display: inline-block;
	vertical-align: baseline;
}

.hearth-module .hearth-module-title .tabs-container .tabs {
	display: inline-block;
	vertical-align: middle;
}

.hearth-module .hearth-module-title .tabs-container .tabs .module-tab {
	color: #666666;
	margin-left: 15px;
	display: inline-block;
	position: relative;
	font-weight: 400 !important;
	line-height: 1;
	letter-spacing: 0;
}

.hearth-module .hearth-module-title .tabs-container .tabs .module-tab:hover, .hearth-module .hearth-module-title .tabs-container .tabs .module-tab.selected {
	color: #000000;
}

.hero-community-container .hero-community-tabs .hero-community-tab:hover, .hero-community-container .hero-community-tabs .hero-community-tab.selected {
	color: #000000;
}

.hearth-module .hearth-module-title .tabs-container .tabs .module-tab .bar {
	display: inline-block;
	position: relative;
	height: 14px;
	width: 4px;
	margin-right: 6px;
	opacity: 0;
	background-color: #e9ab29;
	transition: opacity 0.2s;
	vertical-align: baseline;
}

.hearth-module .hearth-module-title .tabs-container .tabs .module-tab:hover .bar, .hearth-module .hearth-module-title .tabs-container .tabs .module-tab.selected .bar {
	opacity: 1;
	transition: opacity 0.2s;
}

.hearth-module .hearth-module-title .hearth-search-container {
	position: relative;
	left: -10px;
	top: -5px;
	display: inline-block;
	vertical-align: baseline;
	width: 240px;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-input {
	-webkit-appearance: none;
	border: 0;
	border-bottom: solid 1px #333333;
	font-family: 'Teko', sans-serif;
	width: 100%;
	padding: 0;
	padding-right: 20px;
	font-size: 18px;
	line-height: 1;
	text-transform: uppercase;
	outline: none;
	font-weight: 300;
	letter-spacing: 0.02em;
}

.hearth-module .hearth-module-title .hearth-search-container .icon {
	height: 14px;
	position: absolute;
	right: 0;
	bottom: 6px;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results {
	position: absolute;
	z-index: 10;
	top: 26px;
	left: 0;
	opacity: 0.9;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results .hearth-search-result {
	display: block;
	background-color: #ffffff;
	font-family: 'Overpass', sans-serif;
	font-size: 20px;
	color: #000000;
	letter-spacing: 1px;
	position: relative;
	z-index: 1;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results .hearth-search-result:hover, .hearth-module .hearth-search-container .hearth-search-results .hearth-search-result:focus {
	background-color: #333333;
	color: #ffffff;
	box-shadow: 0 0 5px #333333;
	position: relative;
	z-index: 2;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results .hearth-search-result:after {
	content: '';
	display: table;
	clear: both;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results .hearth-search-result .image {
	display: block;
	width: 40px;
	height: 40px;
	background-size: cover;
	float: left;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results .hearth-search-result .info {
	padding: 4px;
	padding-left: 44px;
	display: block;
}

.hearth-module .hearth-module-title .hearth-search-container .hearth-search-results .hearth-search-result .info .title {
	font-weight: 600;
	display: block;
	white-space: nowrap;
	line-height: 40px;
}

.hearth-module .hearth-module-title .tabs-container .see-all-link {
	color: #ababab;
	display: inline-block;
	margin-left: 25px;
	font-size: 22px;
	letter-spacing: 0;
	text-transform: uppercase;
	font-weight: 400;
}

.hearth-module .hearth-module-title .tabs-container .see-all-link:hover {
	color: #db880f;
}

.hearth-module.blogs {
	padding-top: 40px;
	padding-bottom: 40px;
	text-align-last: justify;
}

.hearth-module.blogs .tabs-container .tabs {
	position: relative;
}

.hearth-module.blogs .hearth-blog {
	display: inline-block;
	width: 48.5%;
	text-align-last: left;
	vertical-align: top;
}

.hearth-module.blogs .hearth-blog .image {
	display: block;
	width: 100%;
	padding-bottom: 50%;
	background-size: cover;
	background-position: center;
	margin-bottom: 10px;
	position: relative;
}

.hearth-module.blogs .hearth-blog .info .byline .distinction-icons {
	display: inline-block;
	width: 14px;
	height: 14px;
	vertical-align: middle;
	margin-left: 5px;
	position: relative;
	top: -2px;
}

.hearth-module.blogs .hearth-blog .info .byline .distinction-icons img {
	display: block;
	width: 14px;
	height: 14px;
}

.hearth-module.blogs .hearth-blog .info {
	display: block;
	text-align-last: left;
}

.hearth-module.blogs .hearth-blog .info .title {
	display: block;
	font-size: 23px;
	font-family: 'Overpass', sans-serif;
	font-weight: 700;
	line-height: 1.3;
	color: #000000;
}

.hearth-module.blogs .hearth-blog .info .byline {
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-style: italic;
	line-height: 1.3;
	color: #666666;
}

.hearth-module.blogs .hearth-blog:hover .image {
	box-shadow: 0 0 10px #eaeaea;
}

.hearth-module .tab-content-container .module-tab-content {
	text-align-last: justify;
}

.hearth-module .hearth-build.top {
	display: block;
	margin-bottom: 30px;
	width: 100%;
}

.hearth-module.builds {
	padding-top: 40px;
	padding-bottom: 40px;
}

.hearth-module .hearth-build:not(.top) {
	display: inline-block;
	width: 48.5%;
	vertical-align: top;
}

.hearth-module .hearth-build.top .image {
	display: block;
	width: 100%;
	padding-bottom: 44.5%;
	background-size: cover;
	background-position: center top;
	position: relative;
}

.hearth-module .hearth-build.top .info .byline .distinction-icons {
	display: inline-block;
	width: 20px;
	height: 20px;
	vertical-align: middle;
	margin-left: 5px;
	position: relative;
	top: -2px;
}

.hearth-module .hearth-build.top .info .byline .distinction-icons img {
	display: block;
	width: 20px;
	height: 20px;
}

.hearth-module .hearth-build:not(.top) .image {
	display: block;
	width: 100%;
	padding-bottom: 50%;
	background-size: cover;
	background-position: center top;
	position: relative;
}

.hearth-module .hearth-build:not(.top) .info .byline .distinction-icons {
	display: inline-block;
	width: 14px;
	height: 14px;
	margin-left: 5px;
	vertical-align: middle;
	position: relative;
	top: -2px;
}

.hearth-module .hearth-build:not(.top) .info .byline .distinction-icons img {
	display: block;
	width: 14px;
	height: 14px;
}

.hearth-module .hearth-build.top .image .talents-container {
	position: absolute;
	top: 20px;
	left: 20px;
	font-size: 0.1px;
}

.hearth-module .hearth-build:not(.top) .image .talents-container {
	position: absolute;
	bottom: 10px;
	left: 10px;
	font-size: 0.1px;
}

.hearth-module .hearth-build.top .image .talents-container .talent {
	display: block;
	margin-bottom: 10px;
	width: 50px;
	height: 50px;
	background-size: cover;
	background-position: center;
	border-radius: 50%;
	position: relative;
	border: solid 2px #ffffff;
	box-sizing: border-box;
}

.hearth-module .hearth-build.top .image .talents-container .talent .talent-title {
	position: absolute;
	top: 50%;
	left: 120%;
	transform: translateY(-50%);
	color: #ffffff;
	font-weight: 900;
	font-family: 'Overpass', sans-serif;
	font-size: 20px;
	white-space: nowrap;
	line-height: 1;
}

.hearth-module .hearth-build:not(.top) .image .talents-container .talent {
	display: inline-block;
	margin-right: 4px;
	width: 30px;
	height: 30px;
	background-size: cover;
	background-position: center;
	border-radius: 50%;
	box-sizing: border-box;
	border: solid 1px #ffffff;
}

.hearth-module .hearth-build .info {
	display: block;
	text-align-last: left;
}

.hearth-module .hearth-build.top .info .title {
	font-family: 'Overpass', sans-serif;
	color: #000000;
	font-weight: 700;
	display: block;
	font-size: 30px;
	line-height: 1.3;
	margin-top: 13px;
	margin-bottom: 6px;
}

.hearth-module .hearth-build:not(.top) .info .title {
	font-family: 'Overpass', sans-serif;
	color: #000000;
	font-weight: 700;
	display: block;
	font-size: 23px;
	line-height: 1.1;
	margin-top: 10px;
	margin-bottom: 6px;
}

.hearth-module .hearth-build.top .info .byline {
	display: block;
	line-height: 1.3;
	color: #666666;
}

.hearth-module .hearth-build .info .byline {
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-style: italic;
	display: block;
	line-height: 1.3;
	color: #666666;
}

.hearth-module .hearth-build:hover .image {
	box-shadow: 0 0 5px #eaeaea;
}

.hearth-module.tiers {
	text-align-last: justify;
	background-size: cover;
	background-position: center;
	padding-top: 40px;
	padding-bottom: 40px;
}

.hearth-module.tiers .hearth-module-title {
	color: #ffffff;
}

.hearth-module.tiers .hearth-module-title .module-tab {
	color: #ababab;
}

.hearth-module.tiers .hearth-module-title .module-tab:hover, .hearth-module.tiers .hearth-module-title .module-tab.selected {
	color: #ffffff !important;
}

.hearth-module.tiers .hearth-tier {
	display: inline-block;
	width: 19%;
	vertical-align: top;
}

.hearth-module.tiers .hearth-tier .image {
	width: 70%;
	padding-bottom: 70%;
	display: block;
	margin: 0 auto 10px auto;
	border-radius: 50%;
	background-size: cover;
	background-position: center;
	position: relative;
	overflow: hidden;
}

.hearth-module.tiers .hearth-tier .image .vitals-container .vitals {
	font-size: 11px;
	font-weight: normal;
	white-space: nowrap;
}

.hearth-module.tiers .hearth-module-title .tabs-container .tabs .module-tab {
	color: #878787;
}
.hearth-module.tiers .hearth-module-title .tabs-container .see-all-link {
	color: #bcbcbc;
}

.hearth-module.tiers .hearth-tier .info {
	display: block;
	text-align: center;
	text-align-last: center;
	color: #ffffff;
	line-height: 1.3;
}

.hearth-module.tiers .hearth-tier .info .byline {
	font-family: 'Overpass', sans-serif;
	font-weight: 900;
	margin-bottom: 5px;
	display: block;
	font-size: 20px;
}

.hearth-module.tiers .hearth-tier .info .byline .distinction-icons {
	display: inline-block;
	margin-left: 4px;
	vertical-align: middle;
	width: 14px;
	height: 14px;
	position: relative;
	top: -2px;
}

.hearth-module.tiers .hearth-tier .info .byline .distinction-icons img {
	display: block;
	width: 14px;
	height: 14px;
}

.hearth-module.tiers .hearth-tier .info .title {
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-weight: 400;
	display: block;
	margin-bottom: 5px;
}

.hearth-module.tiers .hearth-tier .info .patch {
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-style: italic;
	display: block;
}

.hearth-module.tiers .hearth-tier:hover .image {
	box-shadow: 0 0 5px #eaeaea;
}

.hearth-module.concepts {
	text-align-last: justify;
	padding-top: 40px;
	padding-bottom: 40px;
}

.hearth-module.concepts .hearth-concept {
	width: 48.5%;
	display: inline-block;
	vertical-align: middle;
}

.hearth-module.concepts .hearth-concept .image {
	display: block;
	width: 100%;
	padding-bottom: 50%;
	background-size: cover;
	background-position: center top;
	position: relative;
}

.hearth-module.concepts .hearth-concept .info .byline .distinction-icons {
	display: inline-block;
	width: 14px;
	height: 14px;
	vertical-align: middle;
	margin-left: 5px;
	position: relative;
	top: -2px;
}

.hearth-module.concepts .hearth-concept .info .byline .distinction-icons img {
	display: block;
	width: 14px;
	height: 14px;
}

.hearth-module.concepts .hearth-concept .info {
	display: block;
	text-align-last: left;
}

.hearth-module.concepts .hearth-concept .info .title {
	font-family: 'Overpass', sans-serif;
	font-size: 23px;
	display: block;
	font-weight: 700;
	color: #000000;
	line-height: 1.1;
	margin-top: 10px;
	margin-bottom: 6px;
}

.hearth-module.concepts .hearth-concept .info .byline {
	font-size: 12px;
	font-family: 'Overpass', sans-serif;
	font-style: italic;
	display: block;
	line-height: 1.3;
	color: #666666;
}

.hearth-module.concepts .hearth-concept:hover .image {
	box-shadow: 0 0 5px #eaeaea;
}

.hearth-unit .vitals-container {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #000000;
	opacity: 0;
	transition: all 0.2s;
}

.hearth-unit .vitals-container .vitals {
	position: absolute;
	top: 50%;
	left: 50%;
	text-align: center;
	text-align-last: center;
	transform: translate(-50%, -50%);
	color: #FFFFFF;
	font-family: 'Overpass', sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}

.hearth-unit:hover .vitals-container {
	opacity: 0.9;
	transition: all 0.2s;
}

.ad-container.hearth {
	display: block;
	text-align: center;
	padding: 30px;
	width: 1090px;
}

.ad-container.hearth img {
	display: block;
	margin: 0 auto;
}




.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder {
	position: relative;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager {
	position: absolute;
	right: 0;
	top: -50px;
	width: 70px;
	height: 40px;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager .prev-button {
	position: absolute;
	left: 0;
	top: 50%;
	transform: translateY(-50%);
	display: block;
	width: 0;
	height: 0;
	border-top: solid 20px transparent;
	border-bottom: solid 20px transparent;
	border-right: solid 30px #959595;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager .prev-button .inner {
	display: block;
	position: absolute;
	border-top: solid 20px transparent;
	border-bottom: solid 20px transparent;
	border-right: solid 30px #e4e4e4;
	top: 0;
	left: 1px;
	transform: translateY(-50%) scale(0.85);
	transition: all 0.2s;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager .prev-button:hover .inner {
	border-right-color: #959595;
	transition: all 0.2s;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager .next-button {
	position: absolute;
	right: 0;
	top: 50%;
	transform: translateY(-50%);
	display: block;
	width: 0;
	height: 0;
	border-top: solid 20px transparent;
	border-bottom: solid 20px transparent;
	border-left: solid 30px #959595;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager .next-button .inner {
	display: block;
	position: absolute;
	border-top: solid 20px transparent;
	border-bottom: solid 20px transparent;
	border-left: solid 30px #e4e4e4;
	top: 0;
	right: 1px;
	transform: translateY(-50%) scale(0.85);
	transition: all 0.2s;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .hero-legendary-notes-slicker-pager .next-button:hover .inner {
	border-left-color: #959595;
	transition: all 0.2s;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note {
	position: relative;
	width: 30%;
	padding-left: 10px;
	padding-right: 10px;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .hero-container {
	display: block;
	position: absolute;
	top: 0;
	left: 10px;
	right: 10px;
	height: 100px;
	background-size: cover;
	background-position: center;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .hero-container:hover {
	opacity: 0.7;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .hero-container .title {
	color: #ffffff;
	text-transform: uppercase;
	font-weight: 900;
	position: absolute;
	bottom: 10px;
	right: 10px;
	letter-spacing: 1px;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .byline-container {
	position: absolute;
	top: 110px;
	left: 10px;
	right: 10px;
	height: 50px;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .byline-container .avatar {
	display: block;
	margin-right: 4px;
	vertical-align: middle;
	position: absolute;
	left: 0;
	top: 0;
	width: 50px;
	height: 50px;
	background-size: cover;
	background-position: center;
	border-radius: 50%;
	z-index: 5;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .byline-container .info {
	position: absolute;
	left: 60px;
	top: 50%;
	transform: translateY(-50%);
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .byline-container .info .sub-head {
	font-size: 12px;
	color: #999999;
	font-style: italic;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .component-byline .distinction-icons {
	vertical-align: middle;
	position: relative;
	top: -2px;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .avatar:hover {
	opacity: 0.7;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .content {
	margin-top: 164px;
	position: relative;
	z-index: 2;
	padding-right: 20px;
	padding-left: 5px;
	font-size: 16px;
	line-height: 22px;
}

.hearth-module.legendary-notes .hero-legendary-notes-slicker-holder .legendary-note .content .quotation-mark {
	font-family: 'Times New Roman', serif;
	color: #999999;
	font-size: 20px;
}


.hearth-module.legendary-notes .hero-legendary-notes-slicker .slick-track {
	margin-left: 0;
	margin-right: 0;
}
body {
	overflow-x: hidden;
}

#sidebar ins {
	margin: 0 auto;
}

#page {
	margin-top: 60px !important;
	width: 1090px;
	position: relative;
}

#page:after {
	display: table;
	content: '';
	clear: both;
}

#sidebar {
	float: right;
	width: 300px;
	padding-top: 20px;
	margin-right: 0 !important;
}

#mainbar {
	float: left;
	margin: 0 !important;
}

.component-top-list {
	text-align-last: justify;
	position: relative;
	padding-left: 20px;
	padding-right: 20px;
	box-sizing: border-box;
	border-bottom: solid 1px #dfdfdf;
	padding-bottom: 20px;
}

.component-top-list .blog-list-top-container {
	display: inline-block;
	width: 49%;
	text-align: left;
	text-align-last: left;
	box-sizing: border-box;
	white-space: normal;
	position: relative;
	top: 0;
	left: 0;
	vertical-align: top;
}

.component-top-list .blog-list-top-container .image {
	display: block;
	width: 100%;
	padding-bottom: 56.25%;
	background-size: cover;
	background-position: center;
	position: relative;
}

.component-top-list .blog-list-top-container .image .vitals-container {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #000000;
	opacity: 0;
	transition: all 0.2s;
}

.component-top-list .blog-list-top-container .image .vitals-container .vitals {
	position: absolute;
	top: 50%;
	left: 50%;
	text-align: center;
	text-align-last: center;
	transform: translate(-50%, -50%);
	color: #FFFFFF;
	font-family: 'Open Sans', sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}

.component-top-list .blog-list-top-container:hover .image .vitals-container {
	opacity: 0.9;
	transition: all 0.2s;
}

.component-top-list .blog-list-top-container .info {
	display: block;
	margin-top: 10px;
	margin-bottom: 5px;
}

.component-top-list .blog-list-top-container .info .title {
	display: block;
	font-family: 'Overpass', sans-serif;
	font-size: 30px;
	font-weight: 700;
	color: #000000;
	line-height: 1.1;
	margin-bottom: 5px;
}

.component-top-list .blog-list-top-container .info .dateline {
	line-height: 1;
}

.component-list .blog-list {
	border-right: 0 !important;
}

.component-list .blog-list-container {
	display: block;
	position: relative;
	top: 0;
	padding: 20px;
	border-bottom: solid 1px #dfdfdf;
	background-color: #ffffff;
	text-align: left;
	text-align-last: left;
	border-right: 0 !important;
}

.component-list .blog-list-container:after {
	display: table;
	content: '';
	clear: both;
}

.component-list .blog-list-container .image-container {
	display: block;
	width: 40%;
	float: left;
}

.component-list .blog-list-container .image-container .image {
	width: 100%;
	padding-bottom: 56.25%;
	background-size: cover;
	background-position: center;
	display: block;
	position: relative;
}

.component-list .blog-list-container .image .vitals-container {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #000000;
	opacity: 0;
	transition: all 0.2s;
}

.component-list .blog-list-container .image .vitals-container .vitals {
	position: absolute;
	top: 50%;
	left: 50%;
	text-align: center;
	text-align-last: center;
	transform: translate(-50%, -50%);
	color: #FFFFFF;
	font-family: 'Open Sans', sans-serif;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 1px;
}

.component-list .blog-list-container:hover .image .vitals-container {
	opacity: 0.9;
	transition: all 0.2s;
}

.component-list .blog-list-container .info {
	white-space: normal;
	float: right;
	width: 58.5%;
	position: relative;
	top: -5px;
}

.component-list .blog-list-container .info .title {
	font-size: 24px;
	font-weight: 700;
	font-family: 'Overpass', sans-serif;
	display: block;
	margin-bottom: 10px;
	line-height: 1.3;
	color: #000000;
}

.component-list .blog-list-container .info .byline {
	font-family: 'Teko', sans-serif;
	font-size: 20px;
	color: #666666;
	text-transform: uppercase;
	display: block;
	margin-bottom: 10px;
	line-height: 1;
}

.component-list .blog-list-container .info .dateline {
	font-family: 'Open Sans', sans-serif;
	color: #666666;
	font-size: 16px;
	font-style: italic;
	display: block;
}

#page.blog-single #topbar, .blog-list-container #topbar {
	width: 1090px;
	position: relative;
	margin-bottom: 20px;
}

#page.blog-single #topbar img {
	width: 100%;
	display: block;
}

#page.blog-single #topbar .blog-post-single-title-container {
	padding: 20px;
	border-top: solid 1px #dfdfdf;
	border-bottom: solid 1px #dfdfdf;
	padding-top: 40px;
}

#page.blog-single #topbar .blog-post-single-title-container .title {
	font-size: 50px;
	font-family: 'Overpass', sans-serif;
	margin-bottom: 20px;
	font-weight: 700;
	line-height: 1;
}

#page.blog-single #topbar .blog-post-single-title-container .byline {
	font-size: 14px;
}

#page.blog-single #topbar .blog-post-single-title-container .byline .author {
	font-family: 'Teko', sans-serif;
	font-size: 20px;
	text-transform: uppercase;
}

#page.blog-single #topbar .blog-post-single-title-container .byline .author a {
	color: #db880f;
}

#page.blog-single #topbar .blog-post-single-title-container .byline .author a:hover {
	color: #ffffff;
	background-color: #db880f;
}

#page.blog-single #topbar .blog-post-single-title-container .byline .date {
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
}

#page.blog-single #topbar .edit-button-container {
	position: absolute;
	right: 0;
	top: 20px;
	margin-right: -80px;
}

#page.blog-single #topbar .edit-button {
	font-family: 'Raleway', sans-serif;
	background-color: #db880f;
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	padding: 5px;
	transition: all 0.2s;
}

#page.blog-single #topbar .edit-button:hover {
	background-color: #db880f;
	transition: all 0.2s;
}

#page.blog-single .blog-single-content-container {
	white-space: nowrap;
	padding-bottom: 40px;
	padding-right: 20px;
}

#page.blog-single .blog-single-content-container:after {
	display: table;
	content: '';
	clear: both;
}

.blog-list-container {
	white-space: nowrap;
}

#page.blog-single #mainbar.left {
	white-space: normal;
	float: left;
	width: 730px;
	padding-left: 20px;
}

#page.blog-single #sidebar.right {
	float: right;
	white-space: normal;
	padding-top: 0;
}

#page.blog-single .blog-single-content-container .content {
	line-height: 1.6;
	font-family: 'Overpass', sans-serif;
	font-weight: 400;
	font-size: 17px;
}

#page.blog-single .blog-single-content-container .content a {
	color: #db880f;
}

#page.blog-single .blog-single-content-container .content a:hover {
	background-color: #db880f;
	color: #ffffff;
}

#page.blog-single .blog-single-content-container .content img {
	max-width: 100%;
}

#page.blog-single .blog-single-content-container .tags-list {
	font-style: italic;
	margin-top: 20px;
	color: #838383;
	font-family: 'Overpass', sans-serif;
	font-weight: 400;
}

#page.blog-single .blog-single-content-container .tags-list a {
	color: #838383;
}

#page.blog-single .blog-single-content-container .tags-list a:hover {
	color: #ffffff;
	background-color: #838383;
}

#page.blog-single .blog-single-content-container .social {
	margin-bottom: 10px;
	margin-top: 10px;
}

#page.blog-single .blog-single-content-container .social .fb-share-button, #page.blog-single .blog-single-content-container .social .twitter-share-button, #page.blog-single .blog-single-content-container .social .reddit-share-button {
	vertical-align: baseline;
}

#page.blog-single .blog-single-content-container .social .fb-share-button {
	position: relative;
	top: -7px;
}

.delete {
	color: #000000;
	font-family: 'Open Sans', sans-serif;
	text-transform: none;
}

.admin-shade {
	position: fixed;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	background-color: #000000;
	opacity: 0.8;
	z-index: 999;
	display: none;
}

.blog-admin-sidebar {
	background-color: #FFFFFF;
	border: solid 1px #ABABAB;
	overflow: hidden;
	padding-top: 20px;
	padding-bottom: 20px;
}

.blog-admin-sidebar-link {
	display: block;
	padding: 10px;
	font-size: 20px;
	font-weight: bold;
	color: #db880f;
}

.blog-admin-sidebar-link:hover, .blog-admin-sidebar-link.selected {
	padding-left: 30px;
	background-color: #db880f;
	color: #FFFFFF;
	text-shadow: none;
}

.view-blog-link {
	padding: 10px;
	display: block;
	font-size: 14px;
	font-weight: bold;
	color: #db880f;
}

.view-blog-link:hover {
	padding-left: 30px;
	background-color: #db880f;
	color: #FFFFFF;
	text-shadow: none;
}

.blog-admin-container {
	padding: 20px;
	background-color: #FFFFFF;
	border: solid 1px #ABABAB;
	overflow: hidden;
}

.topic-select {
	color: #000000 !important;
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif !important;
}

.blog-admin-container h2 {
	margin: 0;
	margin-bottom: 20px;
}

.blog-admin-container a {
	color: #db880f;
}

.blog-admin-container a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.blog-admin-container input[type=submit], .admin-delete input[type=submit], .continue-editing-button {
	font-weight: normal;
	font-size: 12px;
	text-transform: uppercase;
	padding: 4px;
	background-color: #FFFFFF;
	color: #db880f;
	border: solid 1px #db880f;
	display: inline-block;
	line-height: 1;
	font-weight: normal;
	font-size: 12px;
	font-family: 'Raleway', sans-serif;
}

.blog-admin-container input[type=submit]:hover, .admin-delete input[type=submit]:hover, .continue-editing-button:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.blog-admin-container input[type=text], .blog-admin-container textarea {
	width: 100%;
	box-sizing: border-box;
	font-family: Arial, Helvetica, sans-serif;
}

.blog-admin-container select {
	font-family: 'Raleway', sans-serif;
	color: #db880f;
	border: solid 1px #000000;
}

.blog-admin-container .title-input {
	font-size: 20px;
	font-family: 'Raleway', sans-serif !important;
}

.blog-admin-container .excerpt-input {
	font-size: 12px;
	resize: none;
	height: 160px;
}

.admin-error, .admin-success {
	font-weight: bold;
	margin-bottom: 20px;
	padding: 20px;
}

.admin-error {
	border: solid 2px #FF0000;
	background-color: #FFCCCC;
}

.admin-success {
	border: solid 2px #00CC00;
	background-color: #CCFFCC;
}

.blog-admin-table {
	width: 100%;
	font-size: 12px;
}

.blog-admin-table tr.gray {
	background-color: #F4F4F4;
}

.blog-admin-table td {
	padding: 5px;
	vertical-align: top;
}

.blog-admin-table .date-cell {
	width: 8%;
	text-align: center;
}

.blog-admin-table .checker-cell {
	width: 4%;
	text-align: center;
}

.blog-admin-container a.title-edit-button {
	font-weight: bold;
	color: #000000;
	font-size: 14px;
	font-family: 'Raleway', sans-serif;
}

.blog-admin-container a.title-edit-button:hover {
	color: #FFFFFF;
	background-color: #000000;
}

.admin-buttons {
	visibility: hidden;
}

.admin-edit-button {
	color: #db880f;
}

.admin-edit-button:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.blog-admin-container a.admin-delete-button {
	color: #FF0000;
}

.blog-admin-container a.admin-delete-button:hover {
	color: #FFFFFF;
	background-color: #FF0000;
}

.excerpt-container {
	width: 49.5%;
	float: left;
}

.categories-container {
	width: 49.6%;
	font-size: 12px;
	border: solid 1px #ABABAB;
	padding: 10px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	/*max-height: 200px;
	overflow: auto;*/
	min-height: 100px;
	display: inline-block;
	vertical-align: top;
}

.tags-container {
	width: 49.6%;
	display: inline-block;
	vertical-align: top;
	font-size: 12px;
	border: solid 1px #ABABAB;
	padding: 10px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	max-height: 200px;
	overflow: auto;
	min-height: 100px;
}

.admin-delete {
	position: fixed;
	height: 160px;
	width: 400px;
	text-align: center;
	padding: 20px;
	z-index: 1000;
	top: 50%;
	left: 50%;
	margin-top: -80px;
	margin-left: -200px;
	border: solid 20px #FF0000;
	font-size: 14px;
	background-color: #FFFFFF;
	display: none;
}

.admin-delete input[type=submit] {
	border: 0;
	font-weight: bold;
	font-size: 16px;
	background-color: #000000;
	color: #FFFFFF;
}

.admin-delete input[type=submit]:hover {
	color: #000000;
	background-color: #FFFFFF;
}

#sidebar.admin {
	padding-top: 0;
}

.blog-admin-holder {
	padding-top: 40px;
	margin-bottom: 40px;
}

.blog-admin-holder:after {
	display: table;
	content: '';
	clear: both;
}

.channel-cell {
	text-align: center;
}

.categories-cell.list, .tags-cell.list {
	font-size: 11px;
}

.admin-search-container {
	position: relative;
}

.admin-search-icon {
	position: absolute;
	top: 3px;
	right: 3px;
	height: 18px;
}

.admin-search {
	padding-right: 15px;
}

.header-image-input {
	display: none;
}

.header-image-preview {
	width: 200px;
	height: 112px;
	display: none;
	margin-top: 5px;
	background-size: cover;
	background-position: center;
}

.pagination {
	text-align: right;
	margin-top: 20px;
	font-weight: bold;
	color: #ABABAB;
	font-size: 11px;
}

.user-blog-title {
	display: block;
	margin: 0;
	margin-bottom: 20px;
	border: solid 1px #ABABAB;
	padding: 15px;
	background-color: #FFFFFF;
}

.user-blog-title a {
	color: #000000;
}

.user-blog-title .subtitle {
	display: block;
	font-size: 11px;
	letter-spacing: 0.04em;
	text-transform: uppercase;
	margin-top: 15px;
}

.list-more-button {
	display: block;
	width: 32px;
	height: 32px;
	text-align: center;
	font-size: 30px;
	color: #FFFFFF;
	background-color: #DEDEDE;
	font-weight: bold;
	line-height: 32px;
	margin: 10px auto;
}

.list-more-button:hover {
	background-color: #000000;
	text-decoration: none;
}

.user-blog-profile {
	background-color: #FFFFFF;
	border: solid 1px #ABABAB;
	padding: 20px;
	white-space: nowrap;
	font-size: 0.1%;
	position: relative;
}

.user-blog-profile .left {
	display: inline-block;
	width: 110px;
	vertical-align: top;
	white-space: normal;
	font-size: 12px;
}

.user-blog-profile .right {
	position: absolute;
	display: inline-block;
	right: 20px;
	bottom: 20px;
	left: 140px;
	top: 20px;
	vertical-align: top;
	margin-left: 2%;
	white-space: normal;
	font-size: 12px;
	float: right;
}

.user-blog-profile .right .followers {
	position: absolute;
	bottom: 8px;
	left: 0;
	text-transform: uppercase;
}

.user-blog-profile .right .followers .follower-count {
	font-weight: bold;
}

.user-blog-profile .avatar {
	display: block;
	background-size: cover;
	width: 100%;
	padding-bottom: 100%;
	background-position: center;
	background-repeat: no-repeat;
	margin-bottom: 20px;
	position: relative;
	overflow: hidden;
}

.user-blog-profile .avatar:hover {
	opacity: 0.7;
}

.user-blog-profile .name a {
	font-size: 24px;
	font-weight: bold;
}



.follow-button, .unfollow-button {
	text-transform: uppercase;
	background-color: #000000;
	color: #FFFFFF;
	font-weight: bold;
	font-size: 14px;
	width: 100px;
	padding: 5px;
	text-align: center;
	line-height: 20px;
	white-space: nowrap;
	margin: 0 auto;
}

.follow-button, .unfollow-button {
	display: block;
}

.follow-button img, .unfollow-button img {
	vertical-align: middle;
	margin-right: 3px;
	position: relative;
	top: -3px;
}

.following-text, .unfollow-text {
	color: #FFFFFF;
}

.unfollow-button.click:hover {
	background-color: #FF0000;
}

.unfollow-button.click:hover .following-text {
	display: none;
}

.unfollow-button.noclick {
	cursor: text;
}

.unfollow-button.click:hover .unfollow-text {
	display: inline;
}

.follow-button:hover {
	background-color: #999999;
}

.follow-button:active, .unfollow-button:active {
	margin-left: 1px;
	margin-top: 1px;
}

.user-blog-search-container {
	position: relative;
	margin-top: 20px;
	margin-bottom: 20px;
}

.user-blog-search {
	font-size: 20px;
	text-transform: uppercase;
	margin-left: 40px;
	border: none;
	padding: 4px;
	letter-spacing: 1px;
	width: 270px;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.user-blog-search-container img {
	position: absolute;
	left: 3px;
	top: 0;
}


.blog-admin-container .widget-add-button {
	font-size: 11px;
}

.widgets-list {
	margin-botom: 20px;
}

.admin-widget {
	font-size: 12px;
	width: 200px;
	border: solid 2px #000000;
	margin-bottom: 2px;
	padding: 3px;
	position: relative;
	cursor: move;
}

.widget-remove {
	position: absolute;
	display: none;
	top: 0;
	right: 1px;
}

.admin-widget:hover .widget-remove {
	display: block;
}

.widget-remove:hover {
	opacity: 0.7;
}

.user-blog-list-item {
	margin-bottom: 20px;
	border: solid 1px #ABABAB;
	background-color: #FFFFFF;
	overflow: hidden;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-o-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.user-blog-list-item img, .user-blog-single img {
	max-width: 100%;
}

.user-blog-list-item .info {
	padding: 20px;
}

.user-blog-list-item .title {
	font-size: 18px;
	margin-bottom: 10px;
	font-weight: bold;
}

.user-blog-list-item .excerpt {
	font-size: 14px;
}

.user-blog-list-item .date, .user-blog-single .date {
	float: right;
	color: #ABABAB;
	font-size: 12px;
}

.user-blog-list-item .date .meridiem, .user-blog-single .date .meridiem {
	color: #ABABAB;
	font-size: 80%;
}

.user-blog-list-item .image {
	background-color: #000000;
	text-align: center;
}

.user-blog-list-item .image a:hover {
	opacity: 0.7;
}

.user-blog-list-item .excerpt {
	margin-bottom: 10px;
}

.user-blog-list-item .vitals, .user-blog-list-item .vitals span, .user-blog-single .vitals, .user-blog-single .vitals span {
	color: #ABABAB;
	font-size: 12px;
}

.user-blog-list-item .vitals .vital, .user-blog-single .vitals .vital {
	color: #ABABAB;
	display: inline-block;
	margin-right: 15px;
}

.user-blog-list-item .vitals img, .user-blog-single .vitals img {
	vertical-align: middle;
}

.user-blog-single {
	background-color: #FFFFFF;
	padding: 20px;
	border: solid 1px #ABABAB;
}

.user-blog-single .info {
	margin-bottom: 20px;
}

.user-blog-single h3 {
	margin: 0;
	margin-bottom: 10px;
	color: #db880f;
	font-size: 30px;
}

.user-blog-single .content img {
	display: block;
	margin: 0 auto;
}

.user-blog-single .content {
	font-size: 14px;
}

.tag-search-container {
	position: relative;
}

.tag-search-results {
	position: absolute;
	top: 25px;
	background-color: #FFFFFF;
	opacity: 0.9;
	display: none;
	z-index: 50;
}

.tag-search-result {
	display: block;
	padding: 2px;
}

.tag-search-result:hover, .tag-search-result:focus {
	background-color: #D3D3D3;
	text-shadow: none;
}

.tag-remove {
	display: inline-block;
	vertical-align: middle;
	margin-right: 10px;
	opacity: 0.5;
}

.tag-remove:hover {
	opacity: 1;
	background-color: transparent !important;
}

.tag-remove img {
	width: 12px;
}

.tag-item {
	line-height: 15px;
}

.single-categories-container {
	margin-top: 10px;
	padding-top: 10px;
	border-top: solid 1px #ABABAB;
	font-size: 13px;
}

.single-tags-container {
	margin-top: 10px;
	font-size: 11px;
	font-style: italic;
}

.archives-list-button {
	font-size: 22px;
	font-weight: bold;
	text-transform: uppercase;
	color: #FFFFFF;
	background-color: #db880f;
	padding: 10px;
	text-align: center;
	display: block;
	margin-bottom: 20px;
	border: solid 2px #db880f;
	margin-top: 20px;
}

.archives-list-button:hover {
	color: #db880f;
	background-color: #FFFFFF;
}

.archives-list {
	padding: 20px;
	background-color: #FFFFFF;
	border: solid 1px #ABABAB;
	font-size: 14px;
	margin-bottom: 20px;
}

.archives-list .title {
	font-size: 24px;
	font-weight: bold;
	text-transform: uppercase;
	margin-bottom: 10px;
}

.archive-year-container {
	width: 150px;
	margin-left: auto;
	margin-right: auto;
}

.archive-year-button {
	font-size: 16px;
	font-weight: bold;
}

.archive-months-container {
	padding-left: 30px;
}

.archive-months-container a {
	display: block;
}

.comment-add-submit-container {
	display: none;
	margin-top: 10px;
	float: left;
}

.comment-add-input {
	resize: none;
	font-size: 12px;
}

.comment-likes-container, .comment-delete-container {
	display: inline-block;
	margin-left: 8px;
	margin-right: 0;
}

.user-blog-single .content, .user-blog-single table {
	font-size: 14px;
}

.continue-editing-button {
	float: right;
}

.share-icons-container {
	border-top: solid 1px #ABABAB;
	margin-top: 10px;
	padding-top: 10px;
}

.share-icons-container .container {
	display: inline-block;
	margin-right: 10px;
}

.stats-container {
	font-size: 14px;
}

.stats-container table {
	width: 100%;
}

.stats-container td {
	padding-right: 10px;
	padding-bottom: 10px;
	width: 33%;
	vertical-align: top;
}

.stats-container .popular-cell {
	width: 66%;
}

.stats-container .bigger.bold {
	margin-bottom: 4px;
}

.blog-stats-container table {
	width: 100%;
}

.blog-stats-container td {
	width: 50%;
	vertical-align: top;
}

.continue-reading-container {
	margin-top: 8px;
	margin-bottom: 3px;
	font-size: 10px;
	text-align: right;
}

.continue-reading-container a:hover {
	text-shadow: none;
	color: #FFFFFF;
	background-color: #db880f;
}

.user-blog-single .content img {
	max-width: 100%;
}

.writer-badge {
	margin-top: 20px;
}

.user-blog-single .card-inline-image .links img {
	display: inline-block;
}

.user-blog-single .edit-button-container {
	text-align: right;
	margin-bottom: 10px;
}

.user-blog-single .edit-button {
	font-weight: normal;
	font-size: 12px;
	text-transform: uppercase;
	padding: 4px;
	background-color: #FFFFFF;
	color: #db880f;
	border: solid 1px #db880f;
	display: inline-block;
	line-height: 1;
}

.user-blog-single .edit-button:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.user-blog-image-link:hover {
	opacity: 0.7;
}

.slug-preview-container {
	font-size: 14px;
	margin-bottom: 15px;
}

.blog-list-container {
	text-align: justify;
}

.blog-list-container:after {
	content: '';
	display: inline-block;
	width: 100%;
}

.blog-list-column {
	display: inline-block;
	vertical-align: top;
	width: 247px;
	white-space: normal;
}

.blog-list-item {
	display: block;
	background-color: #FFFFFF;
	padding: 20px;
	margin-bottom: 20px;
	font-family: 'Raleway', sans-serif;
	text-align: left;
	position: relative;
	top: 0;
	left: 0;
	padding-bottom: 16px;
}

.blog-list-item:hover {
	box-shadow: 5px 5px #db880f;
	top: -5px;
	left: -5px;
}

.blog-list-item .image {
	display: block;
	position: relative;
	height: 207px;
	overflow: hidden;
	margin-bottom: 10px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.blog-list-item .image .vitals {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 2;
	background-color: #000000;
	opacity: 0.8;
	color: #FFFFFF;
	text-transform: uppercase;
	padding-top: 60px;
	text-align: center;
	display: none;
}

.blog-list-item .image .vitals span {
	display: block;
	text-align: center;
	margin-bottom: 6px;
	font-weight: bold;
	letter-spacing: 0.08em;
}

.blog-list-item .image img {
	max-width: 100%;
	position: relative;
	z-index: 1;
}

.blog-list-item .title {
	color: #db880f;
	font-size: 19px;
	font-weight: bold;
	display: block;
	margin-bottom: 8px;
	line-height: 1.3;
}

.blog-list-item .author {
	color: #000000;
	display: block;
	margin-bottom: 6px;
	font-size: 14px;
}

.blog-list-item .date {
	color: #999999;
	font-size: 85%;
	font-style: italic;
	line-height: 1;
	font-family: 'Overpass', serif;
}

.blog-options {
	position: fixed;
	border-bottom: solid 1px #bebebe;
	top: 60px;
	left: 0;
	right: 0;
	height: 60px;
	background-color: #e4e4e4;
	z-index: 100;
	letter-spacing: 0.08em;
	
}

.blog-options .container {
	width: 1050px;
	margin: 0 auto;
	line-height: 60px;
	font-family: 'Raleway', sans-serif;
}

.blog-options .container .search-container {
	float: right;
}

.blog-options .container .sort-label {
	font-weight: bold;
	border-left: solid 1px #bebebe;
	text-transform: uppercase;
	float: left;
	font-size: 14px;
	padding-left: 20px;
	padding-right: 20px;
	border-right: solid 1px #bebebe;
	color: #666666;
}

.blog-search-input {
	background-image: url('/images/icon-search.png');
	background-size: auto 80%;
	background-position: 99% center;
	background-repeat: no-repeat;
	padding: 2px;
	font-family: 'Raleway', sans-serif;
	padding-right: 20px;
	border: solid 1px #bebebe;
	width: 250px;
	color: #db880f;
}

.blog-search-input:hover, .blog-search-input:focus {
	border-color: #db880f;
	box-shadow: 0 0 3px #db880f;
}

.blog-list-response {
	padding: 20px;
	font-weight: bold;
	background-color: #FFFFFF;
	font-family: 'Raleway', sans-serif;
	font-size: 20px;
}

.blog-options .dropdown-container {
	float: left;
	padding-left: 20px;
	padding-right: 20px;
	position: relative;
	font-size: 14px;
	border-right: solid 1px #bebebe;
	color: #666666;
	transition: all 0.2s;
	cursor: pointer;
	text-transform: capitalize;
}

.blog-options .dropdown-container .nocaps {
	text-transform: none !important;
}

.blog-options .dropdown-container.categories {
	border-left: solid 1px #bebebe;
}

.blog-options .dropdown-container .triangle {
	display: inline-block;
	border-left: solid 4px transparent;
	border-right: solid 4px transparent;
	border-top: solid 4px #666666;
	margin-left: 4px;
	vertical-align: middle;
	width: 0;
	height: 0;
}

.blog-options .dropdown-container:hover {
	background-color: #666666;
	color: #FFFFFF;
	border-color: #666666;
	transition: all 0.2s;
}

.blog-options .dropdown-container:hover .triangle {
	border-top-color: #FFFFFF;
}

.blog-options .blog-list-reset {
	float: left;
	padding-left: 20px;
	padding-right: 20px;
	position: relative;
	font-size: 14px;
	border-right: solid 1px #bebebe;
	color: #666666;
	transition: all 0.2s;
	cursor: pointer;
	display: block;
}

.blog-options .blog-list-reset:hover {
	background-color: #666666;
	color: #FFFFFF;
	border-color: #666666;
}

.blog-options .blog-list-create {
	float: left;
	padding-left: 20px;
	padding-right: 20px;
	position: relative;
	font-size: 14px;
	color: #FFFFFF;
	transition: all 0.2s;
	cursor: pointer;
	display: block;
	background-color: #db880f;
}

.blog-options .blog-list-create:hover {
	color: #db880f;
	background-color: #FFFFFF;
}

.blog-options .dropdown-container .menu {
	position: absolute;
	top: 59px;
	left: 0;
	background-color: #666666;
	line-height: 1;
	display: none;
}

.blog-options .dropdown-container .menu a {
	display: block;
	background-color: #666666;
	color: #FFFFFF;
	padding: 5px;
	white-space: nowrap;
}

.blog-options .dropdown-container .menu a:hover {
	color: #000000;
	background-color: #bebebe;
}

.blog-list-more-button-container {
	text-align: center;
	border: 0;
	border-left: solid 1px #dfdfdf;
}

.blog-list-more-button {
	font-size: 40px;
	font-weight: bold;
	display: inline-block;
	line-height: 40px;
	width: 40px;
	text-align: center;
	background-color: #bebebe;
	color: #db880f;
	font-family: 'Courier New', Courier, monospace;
	border-radius: 50%;
}

.blog-list-more-button:hover {
	background-color: #db880f;
	color: #666666;
}

.user-blog-top {
	margin-bottom: 20px;
}

.user-blog-top .banner {
	width: 1050px;
	height: 320px;
	overflow: hidden;
}

.user-blog-top .banner img {
	display: block;
	width: 100%;
}

.user-blog-top .info-container {
	background-color: #FFFFFF;
	padding: 20px;
	font-family: 'Raleway', sans-serif;
	position: relative;
}

.user-blog-top .info-container .follow-container {
	position: absolute;
	bottom: 20px;
	right: 20px;
}

.user-blog-top .info-container .info .title {
	display: block;
	font-size: 36px;
	margin: 0;
	margin-bottom: 20px;
	text-align: center;
	color: #db880f;
	font-family: 'Open Sans', sans-serif;
}

.user-blog-top .info-container .info .byline {
	display: block;
	font-size: 18px;
	font-style: italic;
	color: #db880f;
	text-align: center;
	font-family: 'Open Sans', sans-serif;
}

.user-blog-top .info-container .info .byline a {
	color: #db880f;
}

.user-blog-top .info-container .info .byline a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.user-blog-top .info-container .follow-container .followers {
	font-size: 14px;
	margin-bottom: 6px;
	display: inline-block;
	margin-right: 20px;
}

.user-blog-top .info-container .follow-container .followers .number {
	font-weight: bold;
}

.user-blog-top .info-container .follow-button, .user-blog-top .info-container .unfollow-button {
	font-size: 12px;
	font-weight: bold;
	text-transform: uppercase;
	padding: 4px;
	text-decoration: none;
	color: #FFFFFF;
	margin-bottom: 6px;
	display: inline-block;
	width: 76px;
	text-align: center;
} 

.user-blog-top .info-container .follow-button {
	background-color: #db880f;
}

.user-blog-top .info-container .unfollow-button, .user-blog-top .info-container .message-button {
	background-color: #db880f;
}

.user-blog-top .info-container .follow-button:hover, .user-blog-top .info-container .message-button:hover {
	background-color: #bebebe;
	color: #000000;
}

.user-blog-top .info-container .unfollow-button:hover {
	background-color: #FF0000;
}

.blog-post-single {
	background-color: #FFFFFF;
	padding: 20px;
	position: relative;
	margin-bottom: 40px;
}

.blog-post-single .edit-button-container {
	position: absolute;
	right: 0;
	top: 0;
	margin-right: -80px;
}

.blog-post-single .edit-button {
	font-family: 'Raleway', sans-serif;
	background-color: #db880f;
	font-size: 14px;
	color: #FFFFFF;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	padding: 5px;
	transition: all 0.2s;
}

.blog-post-single .edit-button:hover {
	background-color: #db880f;
	transition: all 0.2s;
}

.blog-post-single h3 {
	margin: 0;
	margin-bottom: 10px;
	font-size: 36px;
	font-weight: bold;
	display: block;
	text-align: center;
	font-family: 'Raleway', sans-serif;
	line-height: 1.3;
}

.blog-post-single .post-date {
	text-align: center;
	margin-bottom: 20px;
	font-style: italic;
	font-weight: bold;
	color: #848484;
	font-size: 12px;
}

.blog-post-single .post-date a {
	color: #db880f;
}

.blog-post-single .post-date a:hover {
	background-color: #db880f;
	color: #FFFFFF;
}

.blog-post-single .content {
	line-height: 1.6;
	margin-bottom: 20px;
	font-size: 17px;
	word-wrap: break-word;
}

.blog-post-single .content img {
	max-width: 100%;
}

.blog-post-single .categories {
	margin-bottom: 20px;
	color: #848484;
	font-style: italic;
	font-size: 12px;
}

.blog-post-single .categories a {
	color: #848484;
}

.blog-post-single .categories a:hover {
	color: #db880f;
}

.blog-post-single .categories .divider {
	display: inline-block;
	height: 16px;
	border-left: solid 1px #db880f;
	margin-left: 12px;
	margin-right: 12px;
	vertical-align: middle;
}

.blog-post-single .social {
	margin-bottom: 20px;
}

.blog-post-single .social .fb-share-button, .blog-post-single .social .twitter-share-button, .social .reddit-share-button {
	vertical-align: text-bottom;
	display: inline-block;
}

.blog-post-single .social .fb-share-button, .blog-post-single .social .twitter-share-button {
	margin-right: 20px;
}

.social .reddit-share-button {
	position: relative;
	top: -2px;
}

.social .reddit-share-button img {
	display: block;
}

.blog-post-single .related-container {
	margin-bottom: 20px;
	padding-bottom: 20px;
	border-bottom: solid 1px #bebebe;
	text-align: justify;
}

.blog-post-single .related-container:after {
	content: '';
	display: inline-block;
	width: 100%;
}

.blog-post-single .related-container h4 {
	margin: 0;
	margin-bottom: 20px;
	font-size: 18px;
	font-weight: bold;
	font-family: 'Raleway', sans-serif;
	display: block;
	letter-spacing: 0.08em;
}

.blog-post-single .related-container .related {
	display: inline-block;
	width: 23%;
	text-align: left !important;
	vertical-align: top;
}

.blog-post-single .related-container .related .image {
	display: block;
	margin-bottom: 12px;
	height: 120px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.blog-post-single .related-container .related .title {
	font-weight: bold;
	color: #db880f;
	font-size: 16px;
	font-family: 'Raleway', sans-serif;
	letter-spacing: 0.05em;
}

.blog-post-single .related-container .related:hover .image {
	opacity: 0.7;
}

.blog-post-single .related-container .related:hover .title {
	color: #db880f;
}

.blog-post-single .comments-header {
	margin: 0;
	margin-bottom: 20px;
	font-size: 18px;
	font-weight: bold;
	font-family: 'Raleway', sans-serif;
	display: block;
	letter-spacing: 0.08em;
}

.blog-post-single .comment-add-container .comment-add-input {
	background-color: #e4e4e4;
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	width: 100%;
	border: 0;
	box-sizing: border-box;
	min-height: 100px;
	padding: 10px;
}

.blog-post-single .no-comments {
	margin-bottom: 20px;
}

.blog-post-single .comment-add-container .comment-add-submit {
	font-family: 'Raleway', sans-serif;
	background-color: #db880f;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	padding: 5px;
	transition: all 0.2s;
	line-height: 1;
}

.blog-post-single .comment-add-container .comment-add-submit:hover {
	background-color: #db880f;
	transition: all 0.2s;
}

.blog-post-single .comment .avatar {
	display: block;
	float: left;
	height: 50px;
	width: 50px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
}

.blog-post-single .comment .content {
	min-height: 50px;
	margin-left: 62px;
}

.blog-post-single .comment .byline {
	margin-bottom: 8px;
}

.blog-post-single .comment .byline .name {
	font-weight: bold;
	font-family: 'Raleway', sans-serif;
	font-size: 16px;
	letter-spacing: 0.05em;
	line-height: 1;
	margin-bottom: 6px;
}

.blog-post-single .comment .byline .name a {
	color: #000000;
}

.blog-post-single .comment .byline .name a:hover {
	color: #db880f;
}

.blog-post-single .comment .byline .date {
	font-style: italic;
	color: #777777;
	font-size: 12px;
}

.blog-post-single .comment .body {
	margin-bottom: 8px;
}

.blog-post-single .comment .delete input[type=submit] {
	font-family: 'Raleway', sans-serif;
	background-color: #db880f;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	padding: 5px;
	transition: all 0.2s;
}

.blog-post-single .comment .delete input[type=submit]:hover {
	background-color: #db880f;
	transition: all 0.2s;
}

.blog-post-single .comment .delete .blog-post-comment-delete-confirm {
	background-color: #FF0000 !important;
}

.blog-post-single .comment .delete .blog-post-comment-delete-confirm:hover {
	background-color: #FFFFFF !important;
	color: #000000 !important;
}

.blog-category-top {
	background-color: #FFFFFF;
	font-family: 'Raleway', sans-serif;
	font-size: 26px;
	font-weight: bold;
	padding: 20px;
	margin-bottom: 20px;
}

.blog-category-top .highlight {
	color: #db880f;
}

/*comment-drag-begin*/

.comment-drag-target {
	transition: all 0.2s;
	border: solid 4px #FFFFFF;
}

.comment-drag-target.over {
	box-shadow: 0 0 15px #db880f;
	transition: all 0.2s;
}

.comment-drag-error {
	font-family: 'Raleway', sans-serif;
	font-weight: bold;
	margin-bottom: 5px;
	font-size: 12px;
	color: #FF0000;
}

.comment-add-preview-image {
	display: inline-block;
	height: 60px;
	width: 60px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	margin-right: 4px;
	margin-bottom: 4px;
	position: relative;
}

.comment-add-preview-image .comment-add-preview-image-remove-button {
	position: absolute;
	right: -7px;
	top: -7px;
	opacity: 0.5;
	display: none;
}

.comment-add-preview-image:hover .comment-add-preview-image-remove-button {
	display: block;
}


.comment-add-preview-image .comment-add-preview-image-remove-button:hover {
	opacity: 1;
}

.comment-add-progress-container {
	height: 4px;
	position: relative;
	display: none;
}

.comment-add-progress {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 0;
	background-color: #db880f;
}

.comments-container .comment img:not(.heroji) {
	margin: 0 auto;
	display: block;
	max-width: 100%;
}

/*comment-drag-end*/

.user-tag-search-results-container {
	position: relative;
}

.user-tag-search-results {
	position: absolute;
	bottom: 0;
	left: 0;
	opacity: 0.9;
	background-color: #FFFFFF;
	display: none;
	top: auto;
}

.user-tag-search-result {
	display: block;
	padding: 4px;
	font-size: 12px;
	position: relative;
}

.user-tag-search-result:hover, .user-tag-search-result:focus {
	background-color: #db880f !important;
}

.user-tag-search-result .avatar {
	display: inline-block;
	float: left;
	height: 40px;
	width: 40px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	margin-right: 6px;
	vertical-align: middle;
	position: relative;
}

.user-tag-search-result .info {
	display: inline-block;
	vertical-align: middle;
	margin-bottom: 0 !important;
}

.user-tag-search-result .info .name {
	display: block;
	color: #000000;
	font-weight: bold;
}	

.user-tag-search-result .info .username {
	display: block;
	color: #db880f;
}

.user-tag-search-result .info .location {
	display: block;
	color: #000000;
}

.user-tag-search-result:hover span, .user-tag-search-result:focus span {
	color: #FFFFFF !important;
}

.comment .content .body a {
	color: #db880f;
}

.comment .content .body a:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.blog-build-search-row {
	margin-bottom: 10px;
	position: relative;
	top: -15px;
}

.blog-insert-build-button {
	line-height: 1;
	font-size: 11px;
	padding: 3px;
	background-color: #000000;
	color: #ffffff !important;
}

.blog-insert-build-button:hover {
	background-color: #e4e4e4 !important;
	color: #000000 !important;
}

.blog-build-search-container {
	position: relative;
	display: none;
}

.blog-build-search-input {
	font-family: 'Raleway', sans-serif;
	font-weight: bold;
	width: 300px;
}

.blog-build-search-results {
	position: absolute;
	background-color: #FFFFFF;
	top: 23px;
}

.blog-build-search-result {
	display: block;
	padding: 4px;
	padding-right: 8px;
	line-height: 1;
	position: relative;
	color: #db880f;
	font-weight: bold;
	font-family: 'Raleway', sans-serif;
}

.blog-build-search-result:hover, .blog-build-search-result:focus {
	background-color: #db880f;
}

.blog-build-search-result .avatar {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 60px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.blog-build-search-result .title {
	margin-left: 65px;
	display: block;
	margin-bottom: 2px;
}

.blog-build-search-result .hero {
	color: #000000;
	font-size: 12px;
	display: block;
	margin-left: 65px;
}

.blog-build-search-result:hover span, .blog-build-search-result:focus span {
	color: #FFFFFF;
}

.blog-comment-insert-build-button-container {
	float: left;
	margin-right: 10px;
	margin-top: 10px;
}

.blog-comment-insert-build-button, .blog-comment-insert-image-button, .blog-comment-insert-heroji-button {
	font-family: 'Raleway', sans-serif;
	background-color: #000000;
	font-size: 16px;
	color: #FFFFFF;
	font-weight: bold;
	text-transform: uppercase;
	border: 0;
	padding: 5px;
	transition: all 0.2s;
	line-height: 1;
}

.blog-comment-insert-build-button:hover, .blog-comment-insert-image-button:hover, .blog-comment-insert-heroji-button:hover {
	transition: all 0.2s;
	background-color: #666666;
}

.blog-comment-build-search-container {
	position: relative;
	float: none !important;
	display: none;
}

.blog-comment-build-search-input {
	font-family: 'Raleway', sans-serif;
	font-weight: bold;
	width: 300px;
}

.blog-comment-build-search-results {
	position: absolute;
	background-color: #FFFFFF;
	bottom: 23px !important;
	top: auto !important;
	display: none;
}

.blog-comment-build-search-result {
	display: block;
	padding: 4px;
	padding-right: 8px;
	line-height: 1;
	position: relative;
	color: #db880f;
	font-weight: bold;
	font-family: 'Raleway', sans-serif;
}

.blog-comment-build-search-result:hover, .blog-comment-build-search-result:focus {
	background-color: #db880f;
}

.blog-comment-build-search-result .avatar {
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	width: 60px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.blog-comment-build-search-result .title {
	margin-left: 65px;
	display: block;
	margin-bottom: 2px;
}

.blog-comment-build-search-result .hero {
	color: #000000;
	font-size: 12px;
	display: block;
	margin-left: 65px;
}

.blog-comment-build-search-result:hover span, .blog-comment-build-search-result:focus span {
	color: #FFFFFF;
}

.comment .share-container.build, .blog-post-single .content .share-container.build {
	border: solid 4px #e4e4e4;
	padding: 10px;
}

.legendary-blog-list {
	width: 12px;
}

.comment .body iframe {
	max-width: 100% !important;
}

.comment-add-container {
	position: relative;
}

.blog-comment-giphy-button {
	display: inline-block;
	vertical-align: middle;
	position: relative;
	top: -1px;
}

.blog-comment-giphy-button img {
	height: 28px;
	display: block;
}

.blog-comment-giphy-results-container {
	position: absolute;
	left: 0;
	right: 0;
	height: 400px;
	top: -400px;
	background-color: #FFFFFF;
	z-index: 500;
	padding: 10px;
	display: none;
	border: solid 1px #ababab;
	border-radius: 0 0 3px 3px;
}

.blog-comment-giphy-results-container .search-container {
	margin-bottom: 10px;
}

.blog-comment-giphy-close-button {
	position: absolute;
	top: 5px;
	right: 5px;
	opacity: 0.5;
}

.blog-comment-giphy-close-button:hover {
	opacity: 1;
}	

.blog-comment-giphy-gif-button {
	display: inline-block;
	height: 110px;
	width: 110px;
	background-size: cover;
	background-position: center;
}

.blog-comment-giphy-gif-button:hover {
	opacity: 0.7;
}

.blog-comment-insert-heroji-container {
	position: absolute;
	left: 0;
	right: 0;
	height: 100px;
	top: -100px;
	background-color: #FFFFFF;
	z-index: 500;
	padding: 10px;
	display: none;
	border: solid 1px #ababab;
	border-radius: 0 0 3px 3px;
}

.blog-comment-heroji-close-button {
	position: absolute;
	top: 5px;
	right: 5px;
	opacity: 0.5;
}

.blog-comment-heroji-close-button:hover {
	opacity: 1;
}

.blog-comment-insert-heroji-container .packs-container {
	position: absolute;
	top: 0;
	left: 0;
	height: 30px;
	font-size: 0.1px;
}

.blog-comment-insert-heroji-container .packs-container .blog-comment-select-heroji-pack-button {
	display: inline-block;
	height: 30px;
	width: 30px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	filter: saturate(20%);
}

.blog-comment-insert-heroji-container .packs-container .blog-comment-select-heroji-pack-button:hover, .blog-comment-insert-heroji-container .packs-container .blog-comment-select-heroji-pack-button.selected {
	filter: saturate(100%);
}

.blog-comment-insert-heroji-container .pack-container {
	position: absolute;
	top: 40px;
	left: 0;
	bottom: 0;
	right: 0;
	overflow-x: auto;
	overflow-y: hidden;
	white-space: nowrap;
}

.blog-comment-insert-heroji-container .pack-container .blog-comment-heroji-button {
	display: inline-block;
	height: 57px;
	width: 57px;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	position: relative;
	opacity: 0.8;
}

.blog-comment-insert-heroji-container .pack-container .blog-comment-heroji-button:hover {
	opacity: 1;
}

.legendary-list-header-icon {
	width: 20px;
	vertical-align: middle;
}

.blog-build-container {
	margin-bottom: 20px;
	padding: 20px;
	border: solid 4px #d3d3d3;
}

.blog-build-container .hero-title {
	font-size: 20px;
	color: #db880f;
	font-weight: bold;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
}

.blog-build-container .hero-title:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.blog-build-container .build-info {
	display: block;
	margin-bottom: 10px;
}

.blog-build-container .build-info .build-title {
	font-weight: bold;
	font-family: 'Open Sans', sans-serif;
	color: #db880f;
	font-size: 20px;
}

.blog-build-container .build-info .build-title:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.blog-build-container .build-info .byline {
	margin-bottom: 10px;
	font-style: italic;
	margin-top: 10px;
}

.blog-build-container .build-info .byline .avatar {
	display: inline-block;
	height: 30px;
	width: 30px;
	border-radius: 50%;
	position: relative;
	margin-right: 6px;
	background-size: cover;
	background-position: center;
	vertical-align: middle;
}

.blog-build-container .build-info .byline .avatar:hover {
	background-color: transparent;
	opacity: 0.8;
}

.blog-build-container .build-info .byline .displayname {
	color: #db880f;
}

.blog-build-container .build-info .byline .displayname:hover {
	color: #FFFFFF;
	background-color: #db880f;
}

.blog-build-container .talents .talent-container {
	margin-bottom: 10px;
	white-space: nowrap;
}	

.blog-build-container .talents .talent-container .image {
	height: 90px;
	width: 90px;
	border-radius: 50%;
	display: inline-block;
	margin-right: 10px;
	vertical-align: middle;
	background-size: cover;
	background-position: center;
}

.blog-build-container .talents .talent-container .info {
	display: inline-block;
	vertical-align: middle;
	font-size: 14px;
	font-family: 'Open Sans', sans-serif;
	white-space: normal;
	max-width: 540px;
}

.blog-build-container .talents .talent-container .info .title {
	font-weight: bold;
}

.blog-list-item .distinction-icons {
	display: inline-block;
	vertical-align: middle;
	width: 14px;
	height: 14px;
}

.blog-post-admin-buttons {
	position: absolute;
	height: 50px;
	line-height: 1;
	font-size: 0.1px;
	top: 0;
	right: 0;
	transform: translate(25px, -50%);
	text-align: right;
}

.blog-post-endorse-button, .blog-post-feature-button {
	display: inline-block;
	height: 50px;
	width: 50px;
	filter: grayscale(90%);
	border-radius: 50%;
	margin-left: 10px;
}

.blog-post-endorse-button:hover {
	filter: grayscale(0%);
	box-shadow: 0 0 20px #3ccf0e;
}

.blog-post-feature-button:hover {
	filter: grayscale(0%);
	box-shadow: 0 0 20px #FF0000;
}

.blog-post-endorse-button.unendorse, .blog-post-feature-button.unfeature {
	filter: grayscale(0%);
}

.blog-post-endorse-button img, .blog-post-feature-button img {
	display: block;
	height: 50px;
	width: 50px;
}