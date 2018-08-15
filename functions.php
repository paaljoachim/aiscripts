/*
Theme Name: AIScripts Beans child
Description: Starter Child Theme for the Beans Theme.
Author: Beans
Author URI: http://www.getbeans.io
Template: tm-beans
Version: 1.0.0
Text Domain: tm-beans
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


html {
	font-size: 18px !important;	
	background: #eeeeee;
}

body {
	background: #eeeeee;
}

.tm-article-content a, .uk-link {
	color: #e6552e !important;
	transition: all 0.2s ease-in-out;
    text-decoration: none;
}

.uk-article-title a:hover {
	color: #e6552e !important;
}

/* body/content for sticky footer */
.tm-main {
	min-height: calc(72vh - 70px);
}


.tm-site-branding, .tm-site-branding a {
    font-size: 42px !important;
    line-height: 24px;
    color: #000 !important; /* #FFD700; */
    font-weight: 700;
    text-decoration: none;
    font-family: times;
    display: block;
    
    font-stretch: expanded;
	margin-bottom: 10px;
}

.tm-site-title-tag {
	font-size: 20px;
	
	color: #000 !important; /* #FFD700; */
	font-weight: 800;
	text-decoration: none;

	display: block;	
}


.tm-header {
	height: 150px;
	background: #fff;
	border-bottom: 3px solid #eeeeee; 
}

.tm-site {
	margin: auto;
    max-width: 1200px;
    padding: 54px;
	background: #eeeeee;
}

.tm-article-content {
	font-size: 1.05em;
	line-height: 1.5em;
}


/* ----- Primary menu ----*/

 .tm-primary-menu {
     font-size: 16px;
     height: 40px; 
     border: 1px solid #eeeeee; 
 	 border: 0;
  }
  
  /* Each menu item */
  .tm-primary-menu .menu-item > a, 
  .uk-nav-side > li > a  {
      color: black !important;  /*#d9cb9e */
      font-size: 18px;
      height: 40px;
      background: none;
  }
 
 /* Hover effect */
  .tm-primary-menu .menu-item > a:hover,
  .uk-nav-side .menu-item > a:hover {
      background: none;
      color: #e6552e !important;  
  }
  
  /* NB!! 
 Clicking a menu link shows a white background square. To adjust this add the following code. */
 .uk-nav-dropdown > li > a:hover, 
 .uk-nav-dropdown > li > a:focus,
 .uk-navbar-nav > li:hover > a, 
 .uk-navbar-nav > li > a:focus, 
 .uk-navbar-nav > li.uk-open > a,
 .uk-navbar-nav > li.uk-open > a::after,
 .uk-navbar-nav > li > a:active,
 .uk-navbar-nav > li.uk-active > a {
     background-color: transparent !important;
     color: black;
 }  
   
   /* Current page */
   /* Styling all menus: .uk-navbar-nav>li.uk-active>a */
   .tm-primary-menu, .current-menu-item > a {
      background: none !important;
      color: #c02130 !important;
   }
 
 
 /* SUB MENU */
 
 
 /* Adjusting the default space above and below the submenu. */
 .uk-dropdown-navbar {
     background: #fff !important;
 	 margin-top: 15px;
     padding-top: 5px;
	 width: 250px !important;
 }
 
 /* Sub menu each menu item. */
  .tm-primary-menu .menu-item li > a,
  .uk-nav-side .menu-item li > a {
     margin: 0;
     color: black;
  }
 
 /* Sub menu hover each menu item*/
  /* Styling all drop down menus: .uk-dropdown .uk-nav a:hover  */
  .tm-primary-menu .menu-item li>a:hover,
  .uk-nav-side .menu-item li>a:hover {
     margin: 0;
     color: #c02130;
  }
 
 /* Footer menu */
 /* Open submenu might show another menu item color. */
 .uk-nav-side ul a {
    color: #fff;
 	overflow: visible !important;
 }


/* ---- MENU END ---*/

.widget-hero.uk-block {
	background: #fff;
	width: 100%;
	display: none;
}


/* Footer widget area. */
 .footer-widget.uk-block {
 	padding: 25px 0 10px 0;
 	background: white;
 	min-height: 200px;
 	border-top: 1px solid #ccc;
 }
 
 .uk-panel-title {
     color: black;
 }



/* Copyright area. */
 .tm-footer {
 	height: 48px;
 	padding: 10px 0 0 0;
	background: #fff;
 	/*border-top: 1px solid #ccc;*/
 }
 
/* Footer widget area. 
.widget_nav_menu {
	width: 65%;
	float: right;
}
*/

/* ------- Responsive media query code -------- */


/* Used for the responsive menu button - Hamburger icon. */
.uk-button {
    color: black;
    background: none;
}

/* Used for the responsive menu button - Hamburger icon. */
.uk-button:hover, .uk-button:focus {
    background-color: none !important;
    color: red;
}

