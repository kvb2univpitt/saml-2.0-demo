#!/bin/bash

# Start httpd
java -jar /usr/local/bin/saml-sp-springboot-demo-0.1.0.jar &
exec httpd -DFOREGROUND
