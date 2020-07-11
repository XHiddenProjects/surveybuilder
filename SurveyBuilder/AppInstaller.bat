@echo off
echo SurveyBuilder Appinstaller is a custom installment for custom App.
echo Insert your own Apps here
echo Thanks for using this.
pause
goto :choice

:choice
cls
set /P c=Are you sure you want to continue[Y/N]?
if /I "%c%" EQU "Y" goto :part1
if /I "%c%" EQU "N" goto :end
goto :choice


:part1
cls
echo Ready to start click again.
pause>nul
goto :start

:end
cls
echo Installment Cancelled
pause>nul
exit

:start
echo First Step
pause>nul
echo Ready to add
set /p input=Enter a file path:
echo your file path is %input%
pause>nul
goto :nextstep

:nextstep
cls
xcopy "%input%" "\SurveyBuilder\Builder\Apps\appdata" /S
echo All data copied.
pause>nul
%SystemRoot%\explorer.exe "\SurveyBuilder\Builder\Apps\appdata"
exit