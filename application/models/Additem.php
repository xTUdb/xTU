<?php
$storeData = array(
    'name'	=>  $_POST['storename'] , 
    'description'=>  $_POST['description'], 
    'phone'	=>  $_POST['phone'],
    'facebook' => $_POST['facebook'],
    'line' => $_POST['line'],
    'site' => $_POST['site']
);

class Additem extends CI_Model {


    public function addStore(){
            
        
    }
}