@echo off

:choice
cls
set /P c=Are you sure you want to Unistall SurveyBuilder[Y/N]?
if /I "%c%" EQU "Y" goto :del
if /I "%c%" EQU "N" goto :end
goto :choice

:del
cls
set /p select= Select a folder path that the folder "SurveyBuilder"(main directory), also end it with a \.

pause>nul
del /s /q "%select%*.*"
for /d %%p in ("%select%*.*") do rmdir "%%p" /s /q
exit
:end
exit