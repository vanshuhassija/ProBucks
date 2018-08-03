<?php

 

if(isset($_FILES['filefield'])){

$file=$_FILES['filefield'];

$upload_directory="C:\Users\siddhant\AppData\Local\Temp\php6B79.tmp";

$ext_str = "gif,jpg,jpeg,mp,tiff,bmp,doc,docx,ppt,pptx,txt,pdf";

$allowed_extensions=explode(',',$ext_str);

$max_file_size = 10870;//10 mb remember 10bytes =1kbytes /* check allowed extensions here */

$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character

if (!in_array($ext, $allowed_extensions) ) {

echo "only".$ext_str." files allowed to upload"; // exit the script by warning

} /* check file size of the file if it exceeds the specified size warn user */



if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){

 



}



 

mysql_connect("localhost","root","usbw");

 

mysql_select_db("upload");

echo"Your File Successfully Uploaded";

 

mysql_query("INSERT INTO gravator VALUES ('', '$path')");

 



 



 

}

 

/*

 

Hurrey we uploaded a file to server successfully.

 

*/

?>

<form action="" method="post" enctype="multipart/form-data">

<label>Upload File

 

<input id="filefield" type="file" name="filefield" />

 

</label>

 

<label>

<input id="Upload" type="submit" name="Upload" value="Upload" />

 

<!-- This hidden input will force the  PHP max upload size. it may work on all servers. -->

 

<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
</label></form>
