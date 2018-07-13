<?php

App::uses('HttpSocket', 'Network/Http');

class GridtablesController extends AppController {

    public function callCurl($url){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');        
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);        
                return $response;
            }
  
     public function index() {
       
            // $inspectionsUrl = 'https://demo6741172.mockable.io/';
            $inspectionsUrl = 'http://www.json-generator.com/api/json/get/ceQKvKAnEy?indent=2';
            $allInspections = $this->callCurl($inspectionsUrl);                    
            $inspections = json_decode($allInspections, true);
            $headersUrl = 'http://www.json-generator.com/api/json/get/ceflUGMbDm?indent=2';
            $allheaders = $this->callCurl($headersUrl);                    
            $headers = json_decode($allheaders, true);   
                $this->set('headers', $headers);
                $this->set('inspectors', $inspections);
                
    }
}
