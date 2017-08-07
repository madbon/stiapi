<?php
class File{
    
    private $_suportedFormats = ['image/png','image/jpeg','image/jpg','image/gif'];
    
    public function uploadFile($file){
        if(is_array($file)){
            //continue
            
            if(in_array($file['type'],$this->_suportedFormats)){
                move_uploaded_file($file['tmp_name'],'../img/'.$file['name']);
                echo 'File has been uploaded';
                
                echo '../img/'.$file['name'];
                
            }else{
                die('File format is not supported');
            }
        }else{
            die('No File was uploaded');
        }
    }

}
?>

