<?php
class DeleteConter extends Delete{

    private $Uid;
    
    public function __construct($Uid){

        $this->Uid = $Uid;
    }
    public function DeleteU(){
        
        $this->DelUser($this->Uid);
    }

}
?>