<?php

$metadata['https://localhost/saml2/service-provider-metadata/samltestidp'] = array(
    'entityid' => 'https://localhost/saml2/service-provider-metadata/samltestidp',
    'contacts' =>
    array(),
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost/login/saml2/sso/samltestidp',
            'index' => 1,
        ),
    ),
    'SingleLogoutService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost/logout',
        ),
    ),
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'keys' =>
    array(
        0 =>
        array(
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIFZTCCA02gAwIBAgIUMA0ktIryTG8BHnzg0mF7VRG6sFkwDQYJKoZIhvcNAQELBQAwQjELMAkGA1UEBhMCWFgxFTATBgNVBAcMDERlZmF1bHQgQ2l0eTEcMBoGA1UECgwTRGVmYXVsdCBDb21wYW55IEx0ZDAeFw0yMDEwMjcwNDA5NDVaFw0zMDEwMjUwNDA5NDVaMEIxCzAJBgNVBAYTAlhYMRUwEwYDVQQHDAxEZWZhdWx0IENpdHkxHDAaBgNVBAoME0RlZmF1bHQgQ29tcGFueSBMdGQwggIiMA0GCSqGSIb3DQEBAQUAA4ICDwAwggIKAoICAQDBvLXPOT5arQRtVFDOgrGFm2eff3h8z3OTCrkc26Bdf1jWy46zpc6XnoMs3p5S/oxKfR/p4AMKGaFVRkuit8SsDcVIM4B9kZUUS6u4yUDYG5a8oViqGWFKH5DlXMUa6KdSgROJeqz/di3uFXg0vNIoUExFob2B2EHwAmZ44/GIawxyNwt0m6ylJbLsVearfpAdm0A31m5Xl5ceACzZDIaCsweblypVlOGdmFnoeP0JyRjyM+wofvdfN2j+vDYFb855iAeSazX0AmfFd9FW2K1YF0yZlIcSjszqkgb6EkWJ9p3rkcR4awm3VdErXOcH7A8E3tZr5tYypTabGsYbPns6+z0+3bc2nAy9NDeLmABkK2r2+q2K+AEkWKM0DMXI+P/CaukDOBJ2mY2ZcFVG+ATQ4+VT2LrRPwzKssx88D9qbwAe4X0Tvg72xKAIwhICqybPOVURTcpGCmdpwcrYUhXzztKAIW1uMQ6Yde1NOv0YNu8+ofBvCX3/+yiZXX32QctRXoK2YcZYhMRV/d7xIOqXPmLwo/6u+o6p14krNqXku7Qser1W45+pHDV+pzRucCYrfcYR6OQKmNsTnHAqR7fMfGCzlOfFxQPJoSVhvrvvBYGKk5NfD112PRkGFGWX9NqW7ZLTWj0nO+NEZLAVVf/JTHrBOUBKhw/T7JyMZYz7hQIDAQABo1MwUTAdBgNVHQ4EFgQUdYHPIgSzzP/hjgTD0EvWsEf7SRkwHwYDVR0jBBgwFoAUdYHPIgSzzP/hjgTD0EvWsEf7SRkwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAgEAfv4cqBQdypwFFaG82OX4I9bco0ucKcAQ2Mrtp7HwTEI2JAc+DMd7yHnUClsZk0qYuXjYxDvVsPsWSjW+qQKDHiTwGRLtOI+Q+aokHcUY2Yr0lXP4KhAd+FFEHvVVvOu23J/TzUqFe5IEk07kkPqqdJPrIXpJJtAEyX9YM4+GeXdkEcNo8lgJFzoArheKh5FdYvy2s+/rD27al0cfbsWiKBmQ5iTe9R6G/2Yf7i2OjlNupj1JFQgebX2O3tfSo3a+Oden4CWIclZh+RMB0/R9lbrTuTYTX816WzfU/7dwdEcMXOTVHgAQhTtVjOgUkdYbnXgCl08TP8cHE4qbHhUzlTIWXgbpZFrdZhI/A4EVAe0BatuPM15l/vyKD+MOW6Ad3Y0W0/gRM8a3VG3OaMjSsExiHZF97RVlAT2uituCYfPLCtD4QlqBDocY2rlvI6sJTa8V76OM5ORY2NCgvULzLls8iTAJROLO+lbGCpti1mMCU7X0Cejlfb/WiRKFPko9EEpKiHWNuKnVCrHp8VoCoFXQn1rQO7wSdYyoz6HDNc1Sn7ix2qBbRQHgiWDXAQUhLOz9mVWlpXhzqQSpXInvUj5Tz4lu6ce+fJeP0fxIJq/CxN/SXFkDYsOLhMZpxZoDbkg13mPQr7eQqQmHMBiO3kg21sFeS+PFfCx/ELISYiA=',
        ),
        1 =>
        array(
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIFZTCCA02gAwIBAgIUMA0ktIryTG8BHnzg0mF7VRG6sFkwDQYJKoZIhvcNAQELBQAwQjELMAkGA1UEBhMCWFgxFTATBgNVBAcMDERlZmF1bHQgQ2l0eTEcMBoGA1UECgwTRGVmYXVsdCBDb21wYW55IEx0ZDAeFw0yMDEwMjcwNDA5NDVaFw0zMDEwMjUwNDA5NDVaMEIxCzAJBgNVBAYTAlhYMRUwEwYDVQQHDAxEZWZhdWx0IENpdHkxHDAaBgNVBAoME0RlZmF1bHQgQ29tcGFueSBMdGQwggIiMA0GCSqGSIb3DQEBAQUAA4ICDwAwggIKAoICAQDBvLXPOT5arQRtVFDOgrGFm2eff3h8z3OTCrkc26Bdf1jWy46zpc6XnoMs3p5S/oxKfR/p4AMKGaFVRkuit8SsDcVIM4B9kZUUS6u4yUDYG5a8oViqGWFKH5DlXMUa6KdSgROJeqz/di3uFXg0vNIoUExFob2B2EHwAmZ44/GIawxyNwt0m6ylJbLsVearfpAdm0A31m5Xl5ceACzZDIaCsweblypVlOGdmFnoeP0JyRjyM+wofvdfN2j+vDYFb855iAeSazX0AmfFd9FW2K1YF0yZlIcSjszqkgb6EkWJ9p3rkcR4awm3VdErXOcH7A8E3tZr5tYypTabGsYbPns6+z0+3bc2nAy9NDeLmABkK2r2+q2K+AEkWKM0DMXI+P/CaukDOBJ2mY2ZcFVG+ATQ4+VT2LrRPwzKssx88D9qbwAe4X0Tvg72xKAIwhICqybPOVURTcpGCmdpwcrYUhXzztKAIW1uMQ6Yde1NOv0YNu8+ofBvCX3/+yiZXX32QctRXoK2YcZYhMRV/d7xIOqXPmLwo/6u+o6p14krNqXku7Qser1W45+pHDV+pzRucCYrfcYR6OQKmNsTnHAqR7fMfGCzlOfFxQPJoSVhvrvvBYGKk5NfD112PRkGFGWX9NqW7ZLTWj0nO+NEZLAVVf/JTHrBOUBKhw/T7JyMZYz7hQIDAQABo1MwUTAdBgNVHQ4EFgQUdYHPIgSzzP/hjgTD0EvWsEf7SRkwHwYDVR0jBBgwFoAUdYHPIgSzzP/hjgTD0EvWsEf7SRkwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAgEAfv4cqBQdypwFFaG82OX4I9bco0ucKcAQ2Mrtp7HwTEI2JAc+DMd7yHnUClsZk0qYuXjYxDvVsPsWSjW+qQKDHiTwGRLtOI+Q+aokHcUY2Yr0lXP4KhAd+FFEHvVVvOu23J/TzUqFe5IEk07kkPqqdJPrIXpJJtAEyX9YM4+GeXdkEcNo8lgJFzoArheKh5FdYvy2s+/rD27al0cfbsWiKBmQ5iTe9R6G/2Yf7i2OjlNupj1JFQgebX2O3tfSo3a+Oden4CWIclZh+RMB0/R9lbrTuTYTX816WzfU/7dwdEcMXOTVHgAQhTtVjOgUkdYbnXgCl08TP8cHE4qbHhUzlTIWXgbpZFrdZhI/A4EVAe0BatuPM15l/vyKD+MOW6Ad3Y0W0/gRM8a3VG3OaMjSsExiHZF97RVlAT2uituCYfPLCtD4QlqBDocY2rlvI6sJTa8V76OM5ORY2NCgvULzLls8iTAJROLO+lbGCpti1mMCU7X0Cejlfb/WiRKFPko9EEpKiHWNuKnVCrHp8VoCoFXQn1rQO7wSdYyoz6HDNc1Sn7ix2qBbRQHgiWDXAQUhLOz9mVWlpXhzqQSpXInvUj5Tz4lu6ce+fJeP0fxIJq/CxN/SXFkDYsOLhMZpxZoDbkg13mPQr7eQqQmHMBiO3kg21sFeS+PFfCx/ELISYiA=',
        ),
    ),
    'validate.authnrequest' => true,
    'saml20.sign.assertion' => true,
);

$metadata['https://localhost:6443/saml2/service-provider-metadata/samltestidp'] = array(
    'entityid' => 'https://localhost:6443/saml2/service-provider-metadata/samltestidp',
    'contacts' =>
    array(),
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost:6443/login/saml2/sso/samltestidp',
            'index' => 1,
        ),
    ),
    'SingleLogoutService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost:6443/logout',
        ),
    ),
    'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
    'keys' =>
    array(
        0 =>
        array(
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIFZTCCA02gAwIBAgIUMA0ktIryTG8BHnzg0mF7VRG6sFkwDQYJKoZIhvcNAQELBQAwQjELMAkGA1UEBhMCWFgxFTATBgNVBAcMDERlZmF1bHQgQ2l0eTEcMBoGA1UECgwTRGVmYXVsdCBDb21wYW55IEx0ZDAeFw0yMDEwMjcwNDA5NDVaFw0zMDEwMjUwNDA5NDVaMEIxCzAJBgNVBAYTAlhYMRUwEwYDVQQHDAxEZWZhdWx0IENpdHkxHDAaBgNVBAoME0RlZmF1bHQgQ29tcGFueSBMdGQwggIiMA0GCSqGSIb3DQEBAQUAA4ICDwAwggIKAoICAQDBvLXPOT5arQRtVFDOgrGFm2eff3h8z3OTCrkc26Bdf1jWy46zpc6XnoMs3p5S/oxKfR/p4AMKGaFVRkuit8SsDcVIM4B9kZUUS6u4yUDYG5a8oViqGWFKH5DlXMUa6KdSgROJeqz/di3uFXg0vNIoUExFob2B2EHwAmZ44/GIawxyNwt0m6ylJbLsVearfpAdm0A31m5Xl5ceACzZDIaCsweblypVlOGdmFnoeP0JyRjyM+wofvdfN2j+vDYFb855iAeSazX0AmfFd9FW2K1YF0yZlIcSjszqkgb6EkWJ9p3rkcR4awm3VdErXOcH7A8E3tZr5tYypTabGsYbPns6+z0+3bc2nAy9NDeLmABkK2r2+q2K+AEkWKM0DMXI+P/CaukDOBJ2mY2ZcFVG+ATQ4+VT2LrRPwzKssx88D9qbwAe4X0Tvg72xKAIwhICqybPOVURTcpGCmdpwcrYUhXzztKAIW1uMQ6Yde1NOv0YNu8+ofBvCX3/+yiZXX32QctRXoK2YcZYhMRV/d7xIOqXPmLwo/6u+o6p14krNqXku7Qser1W45+pHDV+pzRucCYrfcYR6OQKmNsTnHAqR7fMfGCzlOfFxQPJoSVhvrvvBYGKk5NfD112PRkGFGWX9NqW7ZLTWj0nO+NEZLAVVf/JTHrBOUBKhw/T7JyMZYz7hQIDAQABo1MwUTAdBgNVHQ4EFgQUdYHPIgSzzP/hjgTD0EvWsEf7SRkwHwYDVR0jBBgwFoAUdYHPIgSzzP/hjgTD0EvWsEf7SRkwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAgEAfv4cqBQdypwFFaG82OX4I9bco0ucKcAQ2Mrtp7HwTEI2JAc+DMd7yHnUClsZk0qYuXjYxDvVsPsWSjW+qQKDHiTwGRLtOI+Q+aokHcUY2Yr0lXP4KhAd+FFEHvVVvOu23J/TzUqFe5IEk07kkPqqdJPrIXpJJtAEyX9YM4+GeXdkEcNo8lgJFzoArheKh5FdYvy2s+/rD27al0cfbsWiKBmQ5iTe9R6G/2Yf7i2OjlNupj1JFQgebX2O3tfSo3a+Oden4CWIclZh+RMB0/R9lbrTuTYTX816WzfU/7dwdEcMXOTVHgAQhTtVjOgUkdYbnXgCl08TP8cHE4qbHhUzlTIWXgbpZFrdZhI/A4EVAe0BatuPM15l/vyKD+MOW6Ad3Y0W0/gRM8a3VG3OaMjSsExiHZF97RVlAT2uituCYfPLCtD4QlqBDocY2rlvI6sJTa8V76OM5ORY2NCgvULzLls8iTAJROLO+lbGCpti1mMCU7X0Cejlfb/WiRKFPko9EEpKiHWNuKnVCrHp8VoCoFXQn1rQO7wSdYyoz6HDNc1Sn7ix2qBbRQHgiWDXAQUhLOz9mVWlpXhzqQSpXInvUj5Tz4lu6ce+fJeP0fxIJq/CxN/SXFkDYsOLhMZpxZoDbkg13mPQr7eQqQmHMBiO3kg21sFeS+PFfCx/ELISYiA=',
        ),
        1 =>
        array(
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIIFZTCCA02gAwIBAgIUMA0ktIryTG8BHnzg0mF7VRG6sFkwDQYJKoZIhvcNAQELBQAwQjELMAkGA1UEBhMCWFgxFTATBgNVBAcMDERlZmF1bHQgQ2l0eTEcMBoGA1UECgwTRGVmYXVsdCBDb21wYW55IEx0ZDAeFw0yMDEwMjcwNDA5NDVaFw0zMDEwMjUwNDA5NDVaMEIxCzAJBgNVBAYTAlhYMRUwEwYDVQQHDAxEZWZhdWx0IENpdHkxHDAaBgNVBAoME0RlZmF1bHQgQ29tcGFueSBMdGQwggIiMA0GCSqGSIb3DQEBAQUAA4ICDwAwggIKAoICAQDBvLXPOT5arQRtVFDOgrGFm2eff3h8z3OTCrkc26Bdf1jWy46zpc6XnoMs3p5S/oxKfR/p4AMKGaFVRkuit8SsDcVIM4B9kZUUS6u4yUDYG5a8oViqGWFKH5DlXMUa6KdSgROJeqz/di3uFXg0vNIoUExFob2B2EHwAmZ44/GIawxyNwt0m6ylJbLsVearfpAdm0A31m5Xl5ceACzZDIaCsweblypVlOGdmFnoeP0JyRjyM+wofvdfN2j+vDYFb855iAeSazX0AmfFd9FW2K1YF0yZlIcSjszqkgb6EkWJ9p3rkcR4awm3VdErXOcH7A8E3tZr5tYypTabGsYbPns6+z0+3bc2nAy9NDeLmABkK2r2+q2K+AEkWKM0DMXI+P/CaukDOBJ2mY2ZcFVG+ATQ4+VT2LrRPwzKssx88D9qbwAe4X0Tvg72xKAIwhICqybPOVURTcpGCmdpwcrYUhXzztKAIW1uMQ6Yde1NOv0YNu8+ofBvCX3/+yiZXX32QctRXoK2YcZYhMRV/d7xIOqXPmLwo/6u+o6p14krNqXku7Qser1W45+pHDV+pzRucCYrfcYR6OQKmNsTnHAqR7fMfGCzlOfFxQPJoSVhvrvvBYGKk5NfD112PRkGFGWX9NqW7ZLTWj0nO+NEZLAVVf/JTHrBOUBKhw/T7JyMZYz7hQIDAQABo1MwUTAdBgNVHQ4EFgQUdYHPIgSzzP/hjgTD0EvWsEf7SRkwHwYDVR0jBBgwFoAUdYHPIgSzzP/hjgTD0EvWsEf7SRkwDwYDVR0TAQH/BAUwAwEB/zANBgkqhkiG9w0BAQsFAAOCAgEAfv4cqBQdypwFFaG82OX4I9bco0ucKcAQ2Mrtp7HwTEI2JAc+DMd7yHnUClsZk0qYuXjYxDvVsPsWSjW+qQKDHiTwGRLtOI+Q+aokHcUY2Yr0lXP4KhAd+FFEHvVVvOu23J/TzUqFe5IEk07kkPqqdJPrIXpJJtAEyX9YM4+GeXdkEcNo8lgJFzoArheKh5FdYvy2s+/rD27al0cfbsWiKBmQ5iTe9R6G/2Yf7i2OjlNupj1JFQgebX2O3tfSo3a+Oden4CWIclZh+RMB0/R9lbrTuTYTX816WzfU/7dwdEcMXOTVHgAQhTtVjOgUkdYbnXgCl08TP8cHE4qbHhUzlTIWXgbpZFrdZhI/A4EVAe0BatuPM15l/vyKD+MOW6Ad3Y0W0/gRM8a3VG3OaMjSsExiHZF97RVlAT2uituCYfPLCtD4QlqBDocY2rlvI6sJTa8V76OM5ORY2NCgvULzLls8iTAJROLO+lbGCpti1mMCU7X0Cejlfb/WiRKFPko9EEpKiHWNuKnVCrHp8VoCoFXQn1rQO7wSdYyoz6HDNc1Sn7ix2qBbRQHgiWDXAQUhLOz9mVWlpXhzqQSpXInvUj5Tz4lu6ce+fJeP0fxIJq/CxN/SXFkDYsOLhMZpxZoDbkg13mPQr7eQqQmHMBiO3kg21sFeS+PFfCx/ELISYiA=',
        ),
    ),
    'validate.authnrequest' => true,
    'saml20.sign.assertion' => true,
);

$metadata['https://localhost/shibboleth'] = array(
    'entityid' => 'https://localhost/shibboleth',
    'contacts' =>
    array(),
    'metadata-set' => 'saml20-sp-remote',
    'AssertionConsumerService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost/Shibboleth.sso/SAML2/POST',
            'index' => 1,
        ),
        1 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
            'Location' => 'https://localhost/Shibboleth.sso/SAML2/POST-SimpleSign',
            'index' => 2,
        ),
        2 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://localhost/Shibboleth.sso/SAML2/Artifact',
            'index' => 3,
        ),
        3 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:PAOS',
            'Location' => 'https://localhost/Shibboleth.sso/SAML2/ECP',
            'index' => 4,
        ),
    ),
    'SingleLogoutService' =>
    array(
        0 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
            'Location' => 'https://localhost/Shibboleth.sso/SLO/SOAP',
        ),
        1 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://localhost/Shibboleth.sso/SLO/Redirect',
        ),
        2 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://localhost/Shibboleth.sso/SLO/POST',
        ),
        3 =>
        array(
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => 'https://localhost/Shibboleth.sso/SLO/Artifact',
        ),
    ),
    'keys' =>
    array(
        0 =>
        array(
            'encryption' => false,
            'signing' => true,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIID6zCCAlOgAwIBAgIJAOkKsfFlVBzsMA0GCSqGSIb3DQEBCwUAMBcxFTATBgNV
BAMTDGVjYWE2ZDg0MWY5ZDAeFw0yMTA0MDkwMjQ1MjNaFw0zMTA0MDcwMjQ1MjNa
MBcxFTATBgNVBAMTDGVjYWE2ZDg0MWY5ZDCCAaIwDQYJKoZIhvcNAQEBBQADggGP
ADCCAYoCggGBAK8PNhhSvx9UkwSZRX9aEAkVSlJJ2q1cVc4Lu7RzgxErs4x3jFmb
sCdHhWIrL7Tcpfd/+O0UUpzy1Z1M3MmvWXIyWSD3WvQMy/z6He0JLMKgmT2mDHgS
8eGxAGdc5xmfxpKk4BM3I9FZha95G3gc67CbgDiLfoVLQ5EVRr6WzveY51BgMxec
ljPoa/nVQfcTS/TKRjDpM2kSw3usZ6KjJOtY1eHeT+JcmoDMSFZ/QVXPk/4dHnTP
oLwxhDSNoFbmsZyX16gHS0jgRBgOvnJoJl2v96JheexI8h8wIFOqDeyXZP9Z+KlC
OuUKUB0d3CsynOvT6X7GuneXxDCBkt7W1qDsPN2SlGq4rlxWhPp1trfEzxWezAHG
uFgbVxoy9H5c9IQBq6OERaPM5EKVYsNntf6N7alZRrj4imIAriGJlccJAgVEdDDq
T4YJJO1/0soizFyVFzpB9wtEGNY+1UdJR37ZnVfSOjQMTzG50oEOVZjaDp73ge0t
9DItB0U50GcUWwIDAQABozowODAXBgNVHREEEDAOggxlY2FhNmQ4NDFmOWQwHQYD
VR0OBBYEFH8hc/2NcaxhLuCMFndTFr1DNmbsMA0GCSqGSIb3DQEBCwUAA4IBgQBg
T7aEZxEd9ryfl/i9G9dGoh7YMeTdHygxqnXS9jgEV9LZRwzyM+GCEN3miBZqP/EC
POdx3lS5grQOM+6REpxg2P/hFgcjNViXR+UXRF0X78BO/hETmj3+k44MqAwVYYhI
LuVQF5wsPPTtqDPcsqJHsyPoZlmMBdRHU1FH9I/OyZN4pNUDrsYDcSP4toJ5X874
+0vbBP7RyDMyn+1MEtHSkoHrJ4r5Z/OTydefGfEJZxYAUgruovFqregTvdxDqwRF
EfM+12J430oFKMgGb+5wPo97jJURE902o8uEfMS9+kHYY+L9ZtXDp78+H5Ic6Io0
37b/vLvE8AKhGj1K3N7rxAfrCgn55XnmBacpbzxiGgGA/dJQz6FFXJv+pdi1gcIk
VLn+u67hYLjN4BhsFcsC6E372gdEaJa9BtuhTzrCAPvzAMkJeHrPEYWJ9ZoDuxbA
DaEO2RWwV03BPDzip1eDmQMsi595cCp20mUY3Z0/L8RwiC4Nb4GkU5cG/47Rj7E=
',
        ),
        1 =>
        array(
            'encryption' => true,
            'signing' => false,
            'type' => 'X509Certificate',
            'X509Certificate' => 'MIID6zCCAlOgAwIBAgIJAPfAt9JKISkVMA0GCSqGSIb3DQEBCwUAMBcxFTATBgNV
BAMTDGVjYWE2ZDg0MWY5ZDAeFw0yMTA0MDkwMjQ1MjNaFw0zMTA0MDcwMjQ1MjNa
MBcxFTATBgNVBAMTDGVjYWE2ZDg0MWY5ZDCCAaIwDQYJKoZIhvcNAQEBBQADggGP
ADCCAYoCggGBAMBTHc9EYoT6+OYDOHAaobRegT09kiwmJbRhvHYUPr5Q6I8PTBYG
/gUZDyrmvl5wx3cOQlu//oEpt48f4YogD3ORoLrCwv+ZIahcRh3vcjMz1Wa/1l+w
Aku1cj6SjyKNh5v5GfGk65FCqPm8z2x5zzKyOrvnmUcQ5o8y845YPqlAmx9cZmLC
9LwUGZ3gC7S1cCwxteALAxYXLvJeE5DnGqnBgRncU1dTr9/hqFhus+npB7/f5WmW
uYUJpsYEhEnQ1c0nUdQtfPazEs1hUTrm4EofhOaUYLZUEeKDbPo3RbrsfEvUBBGF
fe5jd93nFP1fKX+wYKdQOHZCVvpygMvKApIDBo8dHYjdJYMVbm1VhWdmgv/1w8r3
hMgn+cJNjsDW5jf+hV73ZCDtJnGqdJTdVIvvFYjjeOwUSKrb8v4tOH3YR3/Eq5t3
geu6nAA+iYLpTJ3x5nTgqVzLDkxc0ngEhyWW/deurNaPD5ECtbBVWIT4plbFJ8U+
asY4XtXEhEys6QIDAQABozowODAXBgNVHREEEDAOggxlY2FhNmQ4NDFmOWQwHQYD
VR0OBBYEFPqw1qJvHCAyoHMCHlbgNkwZfaA1MA0GCSqGSIb3DQEBCwUAA4IBgQAU
6vq6IB58NBGltaA8a5JAlVj9GlRIYupFS9RwciD+65kockppX0jIynGlx8q77pLB
lmiKQ7Vf7IzAdzn0i8AEjrvNTEt+Nq92ZZlhf92ILWeSGD7wKFGoSmgpKqn2Menn
P4JTaLDuAIZjkntfphJZrEWy8CEmQXoYx+0QNYMk9VcScqCx80wZuk7VWm+T2w9H
9J+O9LENOkQt5NrQqX70c4/sNORcbuHJHudi0DOELBK+Od4kNPGFXd99eVgvgiJ+
jV++qgeX/YeORRo9I27cOCUi9cNDiqLE3icckqfIsWVOjoiYvNuJxqdiLGdqQuHv
67hdim9vrB83z+jHx1y2kx4ljiItvl/PRn0NBtS6X1EMqckO+xftuSD5iozf+vHx
aikHXvUQ03AlApVF8OzrU5px7cz7Ba2QFTqz6x5irExQdF6Rh7V03P3kg9aesu/J
q95vIqdnlUQOu7EKbKMVWzLbhP4dK6TU5sTkVFNTwOohnWu+uUCOo8RwPaglL+E=
',
        ),
    ),
    'validate.authnrequest' => true,
    'validate.logout' => true,
    'sign.logout' => true,
    'redirect.sign' => true,
    'redirect.validate' => true,
);
