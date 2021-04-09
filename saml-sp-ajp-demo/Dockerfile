FROM kvb2univpitt/centos7-php-openjdk8:v1.2021.4

LABEL maintainer="Kevin Bui"

COPY resources/bin/startup.sh /usr/local/bin/
RUN curl -s -L -o /usr/local/bin/saml-sp-springboot-demo-0.1.0.jar "https://www.dropbox.com/s/op7negmtwrixi4p/saml-sp-springboot-demo-0.1.0.jar?dl=0"

COPY resources/httpd/conf.d/ /etc/httpd/conf.d/
COPY resources/www/ /var/www/html/

EXPOSE 80 443

CMD ["/usr/local/bin/startup.sh"]
