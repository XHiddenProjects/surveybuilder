const speakeasy = require('speakeasy');
const qrcode = require('qrcode');

var seceret = speakeasy.generateSecret({
name:"SurveyBuilder"
});
console.log(seceret);