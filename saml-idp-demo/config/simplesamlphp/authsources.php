<?php

$uid = getenv('SIMPLESAMLPHP_UID');
$usr = getenv('SIMPLESAMLPHP_USERNAME');
$pwd = getenv('SIMPLESAMLPHP_PASSWORD');
$group = getenv('SIMPLESAMLPHP_GROUP');
$email = getenv('SIMPLESAMLPHP_EMAIL');
$firstName = getenv('SIMPLESAMLPHP_FIRST_NAME');
$lastName = getenv('SIMPLESAMLPHP_LAST_NAME');
$displayName = getenv('SIMPLESAMLPHP_DISPLAY_NAME');

$account = $usr . ':' . $pwd;

$config = array(
    'admin' => array(
        'core:AdminPassword',
    ),
    'example-userpass' => array(
        'exampleauth:UserPass',
        $account => array(
            'uid' => array($uid),
            'eduPersonPrincipalName' => $usr,
            'eduPersonAffiliation' => array($group),
            'mail' => $email,
            'givenName' => $firstName,
            'sn' => $lastName,
            'displayName' => $displayName
        ),
    ),
);
