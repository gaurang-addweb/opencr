<?php 
namespace OpenCr;
class InitiateReports
{
    public static function eventsReport($parameters)
    {
       // $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}";
        
      $parameters['from_curl'] = 'curl';
      $data = $parameters;
      // $username = "dev";
      // $password = "dev2018";
       
      // create a new cURL resource
      //$url = "http://laravel.open.cr/eng/api/v1/report/get_param_to_url_redirect?token=".$parameters['token'];    
      $url = "https://opencr.addwebprojects.com/eng/api/v1/report/get_param_to_url_redirect?token=".$parameters['token'];
      $ch = curl_init();
      // set URL and other appropriate options
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      // receive server response ...
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
          // curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
      // grab URL and pass it to the browser  
      $server_output = curl_exec ($ch);
      // close cURL resource, and free up system resources
      curl_close($ch);
       
      
      return $server_output;
    }

}
