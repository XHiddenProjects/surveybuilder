@echo off

set /p username=Enter Username(Folder):
set /p surveyname=Enter Surveys Name: 
rem del "./%username%/Surveys/%surveyname%/Storage"



del /s /q ".\%username%\Surveys\%surveyname%\Storage\*"
timeout /t 10 /nobreak
for /d %%p in (".\%username%\Surveys\*.*") do rmdir "%%p" /s /q
echo Press any key to exit
pause>nul
exit