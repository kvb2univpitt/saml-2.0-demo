# saml-idp-demo

A pre-configured SimpleSAMLphp identity provider (IdP) docker container for demonstrating federated login.  The IdP is pre-configured to work with the following service provider (SP) modules:

- [saml-sp-shibboleth_php-demo](../saml-sp-shibboleth_php-demo)
- [saml-sp-springboot-demo](../saml-sp-springboot-demo)

The following platforms are used:

- The official [PHP7 Apache](https://hub.docker.com/_/php/) docker image.
- [SimpleSAMLphp](https://simplesamlphp.org/)

### Prerequisites - You must have the following installed:
- Docker 19.x

Pleasefollow the [Docker installation guide](https://docs.docker.com/get-docker/).

## Run the Docker Image

A pre-built [Docker image](https://hub.docker.com/r/kvb2univpitt/saml-idp-demo) is provided on Docker Hub to get things up and running quickly.

### Usage

```
docker run -d --name=saml-idp-demo \
-p 8080:<http port> \
-p 8443:<SSL port> \
-e SIMPLESAMLPHP_ADMIN_PASSWORD=<admin password> \
-e SIMPLESAMLPHP_UID=<user's id> \
-e SIMPLESAMLPHP_USERNAME=<username> \
-e SIMPLESAMLPHP_PASSWORD=<user's password> \
-e SIMPLESAMLPHP_GROUP=<user's group> \
-e SIMPLESAMLPHP_EMAIL=<user's email> \
-e SIMPLESAMLPHP_FIRST_NAME=<user's first name> \
-e SIMPLESAMLPHP_LAST_NAME=<user's last name> \
-e SIMPLESAMLPHP_DISPLAY_NAME=<user's preferred name> \
kvb2univpitt/saml-idp-demo:v1.2021.4
```

### Input Environment Variables
Below is the table that describes all the required variable inputs.

| Variable | Type | Description | SAML Attribute |
|---|---|---|---|
| SIMPLESAMLPHP_ADMIN_PASSWORD | Admin Credential | Admin password ||
| SIMPLESAMLPHP_UID | User ID | User's network ID | uid |
| SIMPLESAMLPHP_USERNAME | User Credential | User's login username | eduPersonPrincipalName |
| SIMPLESAMLPHP_PASSWORD | User Credential | User's login password ||
| SIMPLESAMLPHP_GROUP | User Profile | User's group | eduPersonAffiliation |
| SIMPLESAMLPHP_EMAIL | User Profile | User's email | mail |
| SIMPLESAMLPHP_FIRST_NAME | User Profile | User's first name | givenName |
| SIMPLESAMLPHP_LAST_NAME | User Profile | User's last name | sn |
| SIMPLESAMLPHP_DISPLAY_NAME | User Profile | User's preferred name | displayName |

### Example
Assuming we want to run a SAML IdP with the admin password ***admin123*** and the following user credential and profile information:

| Username | Password | Group | Email | First Name | Last Name | Preferred Name |
|---|---|---|---|---|---|---|
| ckent | superman | Daily Planet | ckent@dailyplanet.com | Clark | Kent | Clark Kent (Kal-El) |

Open up a terminal and execute the following command:

```
docker run -d --name=saml-idp-demo \
-p 8080:8080 \
-p 8443:8443 \
-e SIMPLESAMLPHP_ADMIN_PASSWORD=admin123 \
-e SIMPLESAMLPHP_UID=1 \
-e SIMPLESAMLPHP_USERNAME=ckent \
-e SIMPLESAMLPHP_PASSWORD=superman \
-e SIMPLESAMLPHP_GROUP="Daily Planet" \
-e SIMPLESAMLPHP_EMAIL=ckent@dailyplanet.com \
-e SIMPLESAMLPHP_FIRST_NAME=Clark \
-e SIMPLESAMLPHP_LAST_NAME=Kent \
-e SIMPLESAMLPHP_DISPLAY_NAME="Clark Kent (Kal-El)" \
kvb2univpitt/saml-idp-demo:v1.2021.4
```

To check if docker is running, execute the following command:

```
docker ps -a
```
You should see output similar to this:
```
CONTAINER ID   IMAGE                                                COMMAND                  CREATED         STATUS         PORTS                                                    NAMES
4e44e26493ce   kvb2univpitt/saml-idp-demo:v1.2021.4   "docker-php-entrypoi…"   5 seconds ago   Up 4 seconds   0.0.0.0:8080->8080/tcp, 80/tcp, 0.0.0.0:8443->8443/tcp   saml-idp-demo
```

### Access the Identity Provider (IdP)
You can now access the SimpleSAMLphp web interface of the IdP at [http://localhost:8080/simplesaml](http://localhost:8080/simplesaml).  In this example, the admin password is ***admin123***.

### Stop the Docker
To stop docker, open up a terminal and execute the following command:

```
docker stop saml-idp-demo
docker rm saml-idp-demo
```

## Build the Docker Image

If you prefer to build the image, download the this project, go the folder **saml-idp-demo**, and type the following command:

```
docker build -t local/saml-idp-demo .
```

This will build the docker image **saml-idp-demo** in the local repository **local**.

## Customize Your Own IdP
If you would like to customize this application to use your own authentication and service provider, please see the [SimpleSAMLphp Identity Provider QuickStart](https://simplesamlphp.org/docs/stable/simplesamlphp-idp) guide.
