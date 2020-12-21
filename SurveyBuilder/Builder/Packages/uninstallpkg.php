<?php
echo "<head><title>SurveyBuilder-Package Uninstaller</title><link rel='shortcut icon' href='/SurveyBuilder/Builder/favicon.ico'/></head>";

$pattern = $_SERVER['DOCUMENT_ROOT'] . "/SurveyBuilder/Builder/Packages/libs/testpackage/v0.0.1/";

$fileList = glob($pattern . "*.*");
foreach($fileList as $filename){
	$filename = basename($filename);
  $link = "libs/testpackage/v0.0.1/" . $filename;
  $path = "libs/testpackage/v0.0.1";
  $path2 = "libs/testpackage";
  //Do function
  if(unlink($link)){
	  echo "deleted package file<br/>";
	   if(!rmdir($path)){
	  echo "error: cannot delete package path:'v0.0.1' <br/>";
	  }
	  else{ 
	  echo "package deleted path:'v0.0.1'<br/>";
	  if(is_dir($path2)){
		   if(!rmdir($path2)){
			  echo "error: cannot delete package path:'testpackage'<br/>";
	  }
	  else{
		  echo "package deleted path:'testpackage'<br/>";
		  echo "<script>window.close();</script>";
	  }
	  }else{
		  echo $path2 . " is not a dir.";
	  }
		 
	  } 
  
	  
  }else{
	  echo "error: cannot delete package file<br/>";
  }
 
 
    
	 
 
 
}




?>