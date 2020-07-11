@echo off

:choice
cls
set /P c=Are you sure you want to Unistall SurveyBuilder[Y/N]?
if /I "%c%" EQU "Y" goto :del
if /I "%c%" EQU "N" goto :end
goto :choice

:del
del /s /q "C:\xampp\htdocs\SurveyBuilder\*.*"
for /d %%p in ("C:\xampp\htdocs\SurveyBuilder\*.*") do rmdir "%%p" /s /q
exit
:end
exit