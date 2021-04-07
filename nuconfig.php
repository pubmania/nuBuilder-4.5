<?php

// Important Note: You must restart your browser after modifying nuconfig.php in order for changes to be reflected 

// Database Settings:
	/*$nuConfigDBHost						= "127.0.0.1";				//-- Database Host / IP
	$nuConfigDBName						= "nubuilder4";				//-- Database Name. You can change the name, if desired. The database must exist or must be created on your server.
	$nuConfigDBUser						= "nuadmin";				//-- Database User. Change the user, if desired. The user must exist or must be created.
	$nuConfigDBPassword					= "YourDBPassword";			//-- Database Password. We recommend you to use any strong password.
        */
	$nuConfigDBHost                 = getenv('DB_HOST');
        $nuConfigDBName                 = getenv('DB_NAME'); 
        $nuConfigDBUser                 = getenv('DB_ROOT'); 
        $nuConfigDBPassword             = getenv('DB_ROOT_PASSWORD'); 

// Administrator Login:
	/*$nuConfigDBGlobeadminUsername	 	= "globeadmin";				//-- globeadmin username. You can choose any username you like.
	$nuConfigDBGlobeadminPassword		= "nu";						//-- globeadmin password. Please choose a stronger password!
	*/
        $nuConfigDBGlobeadminUsername   = getenv('DB_GLOBEADMIN_USERNAME');
        $nuConfigDBGlobeadminPassword   = getenv('DB_GLOBEADMIN_PASSWORD');

// Settings:
	$nuConfigTitle						= "nuBuilder 4";			//-- nuBuilder Title
	$nuConfigTimeOut					= 1440;						//-- Session Timeout. Default: 1440 (24h)

	$nuConfigIsDemo						= false;					//-- Demo mode. Saving not permitted.	
	$nuConfigDemoDBGlobeadminUsername	= "";						//-- Specify a Demo User Name and Password if $nuConfigIsDemo is set to true
	$nuConfigDemoDBGlobeadminPassword	= "";
	$nuConfigDemoSavingAllowedIds		= "";

// Options:
	$nuConfigIncludeGoogleCharts		= true;						//-- Include external link to www.gstatic.com
	$nuConfigIncludeApexCharts			= false;					//-- Include apex charts (libs/apexcharts)
	$nuConfigEnableDatabaseUpdate		= true;						//-- Enable updating the database within nuBuilder
	$nuConfigKeepSessionAlive			= true;						//-- Use a timer to keep the session alive
	$nuConfigKeepSessionAliveInterval	= 600;						//-- Keep-alive interval. Default 600 s (10 min)

	$nuConfig2FAAdmin					= false;					//-- Use 2FA authentication for administrator
	$nuConfig2FAUser					= false;					//-- Use 2FA authentication for users
	$nuConfig2FAFormID					= "nuauthentication";		//-- 2FA form ID. Default id: nuauthentication
	$nuConfig2FATokenValidityTime		= 168;						//-- 2FA Token Validity Time. Default: 7 days (7 * 24 hours)
	$nuConfig2FAShowRememberMe			= false;					//-- Show a checkbox "Remember me for X days" in the authentication form

// Includes:
	$nuConfigIncludeJS					= '';						//-- Include one or more JavaScript File(s).  E.g. 'myjsfunctions.js' or ['myjsfunctions1.js','myjsfunctions2.js']
	$nuConfigIncludeCSS					= '';						//-- Include one or more CSS File(s). E.g. 'mystyles.css' or ['mystyles1.css','mystyles2.css']
	$nuConfigIncludePHP					= '';						//-- Include a PHP File. E.g. '..\myphpfunctions.php'

$nuJSOptions = "

	window.nuUXOptions = [];
	nuUXOptions['nuEnableBrowserBackButton']		= true;		 	// Enable the browser's Back button 
	nuUXOptions['nuPreventButtonDblClick']			= true;		 	// Disable a button for 1 5 s to prevent a double click
	nuUXOptions['nuShowPropertiesOnMiddleClick']	= true;		 	// Show the Object Properties on middle mouse click
	nuUXOptions['nuAutosizeBrowseColumns']			= true;		 	// Autosize columns to fit the document width
	nuUXOptions['nuShowBackButton']					= false;		// Show a Back Button
	nuUXOptions['nuBrowsePaginationInfo']			= 'default';	// Default Format is= '{StartRow} - {EndRow} ' + nuTranslate('of') + ' ' + '{TotalRows}'.
	nuUXOptions['nuShowNuBuilderLink']				= true;		 	// Show the link to nubuilder com
	nuUXOptions['nuShowLoggedInUser']				= false;		// Show the logged in User
	nuUXOptions['nuShowBeforeUnloadMessage']		= true;		 	// Show or disable 'Leave site?' message
	nuUXOptions['nuShowBrowserTabTitle']			= true;		 	// Show the Form Title in the Browser Tab
	nuUXOptions['nuDebugMode']						= true;		 	// If true, a warning is output in the Developer Console if an element does not exist when using nuGetValue() or nuSetValue()	
	nuUXOptions['nuBrowserTabTitlePrefix']			= 'nuBuilder'	// Prefix in the Browser Tab

	window.nuAdminButtons = [];
	nuAdminButtons['nuDebug']					= false;
	nuAdminButtons['nuPHP']						= true; 
	nuAdminButtons['nuRefresh']					= true;
	nuAdminButtons['nuObjects']					= true; 
	nuAdminButtons['nuProperties']					= true;	

";


// Uncomment this block to customise the login form:

/*
	$nuWelcomeBodyInnerHTML = " 

				<div id='outer' style='width:100%'>
				<form id='nuLoginForm' action='#' method='post' onsubmit='return false'>
					<div id='login' class='nuLogin'>
						<table>
							<tr>
								<td align='center' style='padding:0px 0px 0px 33px; text-align:center;'>
								<img src='core/graphics/logo.png'><br><br>
								</td>
							</tr>
							<tr>
								<td><div style='width:90px; margin-bottom: 5px;'>Username</div><input class='nuLoginInput' id='nuusername' autocomplete='off' /><br><br></td>
							</tr>
							<tr>
								<td><div style='width:90px; margin-bottom: 5px;'>Password</div><input class='nuLoginInput' id='nupassword' type='password' autocomplete='off'  onkeypress='nuSubmit(event)'/><br></td>
							</tr>
							<tr>
								<td style='text-align:center' colspan='2'><br><br>
									<input id='submit' style='width:90px' type='submit' class='nuButton' onclick='nuLoginRequest()' value='Log in'/>
								</td>
							</tr>
						</table>
					</div>
				</form>	
				</div>			

	";
*/




	if(array_key_exists('REQUEST_URI', $_SERVER)){
		if(strpos($_SERVER['REQUEST_URI'], basename(__FILE__)) !== false){
			header('HTTP/1.0 404 Not Found', true, 404);
			die();
		}
	}

?>
