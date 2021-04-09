FROM kvb2univpitt/centos7-shibboleth-php:v1.2021.4

LABEL maintainer="Kevin Bui"

COPY resources/bin/startup.sh /usr/local/bin/

COPY resources/httpd/ssl/localhost.key /etc/pki/tls/private/
COPY resources/httpd/ssl/localhost.crt /etc/pki/tls/certs/

COPY resources/shibboleth/ /etc/shibboleth/

RUN test -d /var/run/lock || mkdir -p /var/run/lock \
    && test -d /var/lock/subsys/ || mkdir -p /var/lock/subsys/ \
    && chmod +x /etc/shibboleth/shibd-redhat \
    && echo $'export LD_LIBRARY_PATH=/opt/shibboleth/lib64:$LD_LIBRARY_PATH\n' > /etc/sysconfig/shibd \
    && chmod +x /etc/sysconfig/shibd /etc/shibboleth/shibd-redhat /usr/local/bin/startup.sh

# error log configuration
# RUN sed -i 's/ErrorLog "logs\/error_log"/ErrorLog \/dev\/stdout/g' /etc/httpd/conf/httpd.conf \
#     && echo -e "\nErrorLogFormat \"httpd-error [%{u}t] [%-m:%l] [pid %P:tid %T] %7F: %E: [client\ %a] %M% ,\ referer\ %{Referer}i\"" >> /etc/httpd/conf/httpd.conf \
#     && sed -i 's/CustomLog "logs\/access_log" combined/CustomLog \/dev\/stdout \"httpd-combined %h %l %u %t \\\"%r\\\" %>s %b \\\"%{Referer}i\\\" \\\"%{User-Agent}i\\\"\"/g' /etc/httpd/conf/httpd.conf \
#     && sed -i 's/ErrorLog logs\/ssl_error_log/ErrorLog \/dev\/stdout/g' /etc/httpd/conf.d/ssl.conf \
#     && sed -i 's/<\/VirtualHost>/ErrorLogFormat \"httpd-ssl-error [%{u}t] [%-m:%l] [pid %P:tid %T] %7F: %E: [client\\ %a] %M% ,\\ referer\\ %{Referer}i\"\n<\/VirtualHost>/g' /etc/httpd/conf.d/ssl.conf \
#     && sed -i 's/CustomLog logs\/ssl_request_log/CustomLog \/dev\/stdout/g' /etc/httpd/conf.d/ssl.conf \
#     && sed -i 's/TransferLog logs\/ssl_access_log/TransferLog \/dev\/stdout/g' /etc/httpd/conf.d/ssl.conf

COPY resources/httpd/conf/httpd.conf /etc/httpd/conf/
COPY resources/httpd/conf.d/ssl.conf /etc/httpd/conf.d/

RUN rm /etc/httpd/conf.d/welcome.conf
COPY resources/www/ /var/www/html/

HEALTHCHECK --interval=1m --timeout=30s \
    CMD curl -k -f https://127.0.0.1/Shibboleth.sso/Status || exit 1

EXPOSE 80 443

CMD ["/usr/local/bin/startup.sh"]
