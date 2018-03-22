<?php
if ($_POST)
{
       if(!isset($_FILES) && isset($HTTP_POST_FILES))
       {
           $_FILES = $HTTP_POST_FILES;

       }
       
       if ($_FILES['file']['error'] === UPLOAD_ERR_OK)
       {
           if ($_FILES['file']['name'] !== "")
           {
               if ($_FILES['file']['type'] === 'text/xml')
               {
                   move_uploaded_file($_FILES['file']['tmp_name'], "./logs/".$_FILES['file']['name']);
               }
           }
       }
}
?>
