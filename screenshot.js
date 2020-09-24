const webshot = require('webshot');

webshot('./Builder/SurveyBuilder.php', 'SurveyBuilderScreenshot.png', function(err){
if(!err){
    console.log('screenshot taking');
}
});