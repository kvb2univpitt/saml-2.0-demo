# saml-sp-shibboleth-demo
A pre-configured SAML 2.0 service provider (SP) for demonstration purposes.

This docker image pre-configured to work with the SAML 2.0 IdP module [saml-idp-simplesamlphp-demo](../saml-idp-simplesamlphp-demo).

The following platforms are used:
- CentOS 7 (2009)
- Apache 2.4.6
- PHP 5.4.16
- Shibboleth-3.1.0-3.1

### Prerequisites - You must have the following installed:
- Docker 19.x

Please follow the [Docker installation guide](https://docs.docker.com/get-docker/).

## Run the Docker Image

A pre-built [Docker image](https://hub.docker.com/r/kvb2univpitt/saml-sp-shibboleth-demo) is provided on Docker Hub to get things up and running quickly.

### Usage
```
docker run -d --name=saml-sp-shibboleth-demo \
-p 80:<http port> \
-p 443:<SSL port> \
kvb2univpitt/saml-sp-shibboleth-demo:v1.2021.4
```

### Example
Assuming we want to run the web server on port 80 with secured http on port 443, execute the following command:

```
docker run -d --name=saml-sp-shibboleth-demo \
-p 80:80 \
-p 443:443 \
kvb2univpitt/saml-sp-shibboleth-demo:v1.2021.4
```

To check if docker is running, execute the following command:

```
docker ps -a
```

You should see output similar to this:

```
CONTAINER ID        IMAGE                                         COMMAND                  CREATED             STATUS                             PORTS                                                    NAMES
44233f8d2ce3        kvb2univpitt/saml-sp-shibboleth-demo             "/usr/local/bin/star…"   13 seconds ago      Up 12 seconds (health: starting)   0.0.0.0:80->80/tcp, 0.0.0.0:443->443/tcp                 saml-sp-shibboleth-demo
```


### Access the Service Provider
The "PHP SAML SP Demo" service provider is at [https://localhost/](https://localhost/).

### Stop the Docker
To stop docker, open up a terminal and execute the following command:

```
docker stop saml-idp-simplesamlphp-demo
docker rm saml-idp-simplesamlphp-demo
```

## Build the Docker Image

If you prefer to build the image, download the this project, go the folder **saml-idp-simplesamlphp-demo**, and type the following command:

```
docker build -t local/saml-idp-simplesamlphp-demo .
```
The docker image saml-idp-simplesamlphp-demo is now in your local repository.  To run it, execute the following command:

```
docker run -d --name=saml-sp-shibboleth-demo \
-p 80:80 \
-p 443:443 \
local/saml-sp-shibboleth-demo
```
