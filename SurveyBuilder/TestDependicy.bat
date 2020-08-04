@echo off
echo Ready to take a Dependency test.
echo This will help you to see if this service works
set num1=0
set num2=0
set num3=0
set num4=0
pause
cls
echo Testing for Xampp folder
echo.
if EXIST C:\xampp set num1=1
if NOT EXIST C:\xampp set num1=0
timeout 10 /nobreak
cls
echo Testing for htdocs folder
echo.
if EXIST C:\xampp\htdocs set num2=1
if NOT EXIST C:\xampp\htdocs set num2=0
timeout 10 /nobreak
cls
echo Testing for SurveyBuilder folder
echo.
if EXIST C:\xampp\htdocs\SurveyBuilder set num3=1
if NOT EXIST C:\xampp\htdocs\SurveyBuilder set num3=0
timeout 10 /nobreak
cls
echo Testing for API.txt
echo.
if EXIST C:\xampp\htdocs\SurveyBuilder\API.txt set num4=1
if NOT EXIST C:\xampp\htdocs\SurveyBuilder\API.txt set num4=0
timeout 10 /nobreak
cls
echo Resaults:
echo.
if %num1%==0 (
echo Xampp was not found.
)
if %num1%==1 (
echo Xampp was found.
)
if %num2%==0 (
echo htdocs was not found.
)
if %num2%==1 (
echo htdocs was found.
)
if %num3%==0 (
echo SurveyBuilder was not found
)
if %num3%==1 (
echo SurveyBuilder was found.
)
if %num4%==0 (
echo API was not found
)
if %num4%==1 (
echo API was found
)

echo.
echo -----------------------------------------------------------------------------------------------------------
echo.
echo 1 means pass 0 means failed:
echo Xampp: %num1%
echo htdocs: %num2%
echo SurveyBuilder: %num3%
echo API: %num4%
pause>nul
cls
exit