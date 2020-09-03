<?php
class Credentials {
    public $mid;
    public $salt_key;
    public $salt_index;
    public $s_mid;
    public $client_id;

    function __construct($mid, $salt_key, $salt_index = 1, $s_mid = null, $client_id= null)
    {
        $this->mid = $mid;
        $this->salt_key = $salt_key;
        $this->salt_index = 1;
        $this->s_mid = $s_mid;
        if($client_id == null){
            $this->client_id = $mid;
        }else {
            $this->client_id = $client_id;
        }
    }

}