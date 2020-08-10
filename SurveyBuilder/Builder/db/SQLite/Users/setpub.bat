@echo off
echo Welcome to the SQLite database batch file. This will ask a couple of questions. 
echo.
echo You must publish your "Survey" and put the "Survey Folder" and "Survey File" and make a new folder
echo.
echo Put the "Survey Folder" and "Survey File" into the New Folder, this is the folder you want to copy.
echo.
echo Format: "MainDir>SubDir>{YourSurvey's folder and file}"
pause>nul
cls
set /p fileSet=Enter a file path:
set /p foldername=Enter Username(Folder):
set /p surveyname=Enter Surveys Name(Subfolder):
xcopy "%fileSet%" ".\%foldername%\Surveys\%surveyname%\Storage\" /S
echo.
echo ---------------------------------------------------------------------------------------------------------------------------
echo.
echo {domain}="http(s)://(example.)example.example/" --- "(example.) means if you have a subdomain"
echo.
echo This was sent to "{domain}\SurveyBuilder\Builder\db\SQLite\Users\%FolderName%\Surveys\%surveyname%\Storage\"
pause>nul
exit

