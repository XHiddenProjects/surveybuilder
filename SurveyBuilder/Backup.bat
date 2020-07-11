@echo off


cls
set /p input=Enter file path(Must Include the FolderName that you chose):
xcopy "C:\xampp\htdocs\SurveyBuilder" "%input%" /S

echo Files are exported.
pause>nul
cls
exit
