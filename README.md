Opencr Reports
===============

This package use for getting response from opencr reports in form of json, xml and html.

Requires PHP 5.3 and a pulse. Abstraction is for opencr reports.

[![Packagist](https://img.shields.io/packagist/dt/drewm/mailchimp-api.svg?maxAge=2592000)](https://packagist.org/packages/reports/opencr)

Installation
------------

You can install opencr-reports using Composer:

```
composer require reports/opencr
```


Example
--------

Start by `use`-ing the class and creating an instance.

```php
use OpenCr\InitiateReports;
```
Token generate from  below api url and pass correct credentials for login in body part(i.e email, password)

(http://laravel.open.cr/eng/api/v1/auth/login)


Please use instance in particular function and pass some mandatory parameters.

```
$parameters = array();

$parameters['token'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjY1LCJpc3MiOiJodHRwOi8vbGFyYXZlbC5vcGVuLmNyL2VuZy9hcGkvdjEvYXV0aC9sb2dpbiIsImlhdCI6MTU2MjY1NTM4NCwiZXhwIjoxNTYyNjU4OTg0LCJuYmYiOjE1NjI2NTUzODQsImp0aSI6IlVKSlBmamR4Zm1qdUtSMHcifQ.xFLzAQeSuE2QRwEUjNFrRVuuG9RzOlYKK0wxAhrCz6w'; // pass token which is getting from login.



$parameters['artistID'] = '1';//pass correct artis id
$parameters['edit_mode'] = 'edit_mode';
$parameters['thumbs'] = 'on';//thubs like on and off.
$parameters['lang'] = 'eng'; //you can pass lang like eng, spa or deu.
$parameters['output_type'] = 'json';//Output type like generateHtml, xml or json
$parameters['evtype'] = 'col';//evtype like bio, ind, col, exp, pr, evwob.
$parameters['sort'] = 'loc';

$parameters['page_name'] = 'artist_main_pro_events';
$parameters['public'] = 'public';
echo InitiateReports::eventsReport($parameters);

```

