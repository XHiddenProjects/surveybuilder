@echo off

:choice
cls
set /P c=Are you sure you want to Unistall SurveyBuilder[Y/N]?
if /I "%c%" EQU "Y" goto :del
if /I "%c%" EQU "N" goto :end
goto :choice

:del
cls

set /p filePath=Enter folder where the dir. startes at "/SurveyBuilder/..."


del /s /q "%filePath%*"
for /d %%p in ("%filePath%*.*") do rmdir "%%p" /s /q


echo Successfully unistalled
pause>nul



exit
:end
exit