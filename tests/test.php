<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use OpenCr\InitiateReports;

$parameters = array();
$parameters['artistID'] = '1';
$parameters['edit_mode'] = 'edit_mode';
$parameters['thumbs'] = 'on';
$parameters['lang'] = 'eng';
$parameters['output_type'] = 'json';//generateHtml, xml or json
$parameters['evtype'] = 'col';
$parameters['sort'] = 'loc';
$parameters['token'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjY1LCJpc3MiOiJodHRwOi8vbGFyYXZlbC5vcGVuLmNyL2VuZy9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTU2MjU3ODg2NiwiZXhwIjoxNTYyNTgyNDY2LCJuYmYiOjE1NjI1Nzg4NjYsImp0aSI6IkhGZ1pTRE9KVnI0MWFQbGoifQ.ofhlVe4Qzl6hhMIDgpDOdVICE0T4o8OvGIR6WU01CyE';
$parameters['page_name'] = 'artist_main_pro_events';
$parameters['public'] = 'public';
echo InitiateReports::eventsReport($parameters);
