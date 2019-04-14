<?php

if(isset($_POST['submit'])){
    $name = $_FILES['fileupload']['name'];//Name of the File
    $temp = $_FILES['fileupload']['tmp_name'];
    if(isset($name)){
        if(!empty($name)){      
            $location = 'C:\wamp64\www\PostgreSQL_TP\DATABASE';      
            if(move_uploaded_file($temp_name, $location.$name)){
                echo 'File uploaded successfully';
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}


//   $message="";
//   if(isset($_POST["valider"])){
//      if(!preg_match("",$_FILES["myfile"]["type"]))
//         $message='<span class="nook">Invalid format!</span>';
//      elseif($_FILES["myfile"]["size"]>20000)
//         $message='<span class="nook">File too big!</span>';
//      else{
//        $message='file name :<b>'.
//            $_FILES["myfile"]["name"].
//            '</b><br />';
//         $message.='Temporary file name :<b>'.
//            $_FILES["myfile"]["tmp_name"].
//           '</b><br />';
//         $message.='File type :<b>'.
//            $_FILES["myfile"]["type"].
//            '</b><br />';
//         $message.='File size :<b>'.
//            $_FILES["myfile"]["size"].
//            ' octets</b><br />';
//         if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"uploads/".$_FILES["myfile"]["name"]))
//            $message.='<span class="ok">File upload was a success !</span>';
//     }
//}
?> 