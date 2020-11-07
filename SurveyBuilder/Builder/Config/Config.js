//Admin Config Panel
//Allow and disable certain items
//Everything is eaither True/False
/*
system corrnation:
{url} = url,
{seperator} = '?' or '&',
{:string} = text,
{:int} = number,
{:boolean} = true/false(most of this already has a boolean...
(ex:templateSelect:0) has a boolean of true) just to stop any error from occuring you will see tag if boolean is optional, 
{:optional[string]} = optional format{null(blank)/string(value)}

*/
//web Config	
var Allow_Banner_display = true; //Allow to display SurveyBuilder footer(banner)
var Allow_Console_attribute = true; //Enables the Console Log
var Allow_Pop_up = false; //Allow alert_box to popup when a user joins
var limit_list = ["not"]; //Removes any category on your choice. 
var Allow_Inspect_element = true; //Allows users to use the Inspect Element
var Allow_location_tracking = false; //Allows you to know there location.. sends this to the console.
var Allow_API_config = [false, "{url}"]; //Enables a password that works only when a API is enabled. Password will popup when a player joins. type '?api={API}' in URL bar
var get_users_lang = true; //Gives the user lang. to the console
var get_users_platform = true; //Give the users platform to the console.
var get_users_usersAngent = true; //Give the users userAgent to the console.
var test_users_cookieEnable = true; //Displays if the console should replay back if the cookie was enable
var Collect_IP = false; //The Console will display there IP_address. 
var Allow_cPanel = true; //Allow's users to have cPanel
var maxTitle = 25; //Change the length of the title
var username = ""; //Enter username 
var banIP = []; //Enter IP adderess here
var BanLocation = "{url}" //enter URL here to set a direction to a ban location
var Enable_Config_File = "Enable"; //- Use 'Enable' to enable this or type 'Disable'  this will allow config to activatet. - This will return false;
var Allow_Database = "mySQL"; //- this supports [mySQL] --SQLite is not supported-- or set to [false] to disable SQL database, this will require you to have a SQL server if using 'mySQL'
var redirFormLink = "false"; //Enter URL to execute the form to add. Use 'false' to deny action
var Allow_ad_blocker = false; //Gives an error if a person is using any ad-blockers(Used as a annoyence it really doesn't detect adblockers)
var DarkTheme = false; //Allows Dark Theme
//Config URL(Note this config how to url is preformed, there always set to an array) '?|&' API has the same function. This will automaticall add '?'|'&'
var templateSelect = [true, "{url}", "{seperator:optional}", "{value:optional}"]; 
/*
- Allows the url to have '?temp={default template}' or '&temp={default template}'
- format: enable:boolean, url:string, seperator:string, value:string
*/
var setPreview = [true, "{url}", "{seperator:optional}", "{value:optional}"]; 
/*
- Allows to set preview to form on join
- format: enable:boolean, url:string, seperator:string, value:string
*/





    