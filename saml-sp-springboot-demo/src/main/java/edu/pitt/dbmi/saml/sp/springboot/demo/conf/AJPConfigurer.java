/*
 * Copyright (C) 2020.
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 */
package edu.pitt.dbmi.saml.sp.springboot.demo.conf;

import org.apache.catalina.connector.Connector;
import org.apache.coyote.ajp.AjpNio2Protocol;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.boot.web.embedded.tomcat.TomcatServletWebServerFactory;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.context.annotation.Profile;

/**
 *
 * Dec 14, 2020 4:49:57 PM
 *
 * @author Kevin V. Bui (kvb2univpitt@gmail.com)
 */
@Profile("ajp")
@Configuration
public class AJPConfigurer {

    private static final String PROTOCOL = "org.apache.coyote.ajp.AjpNio2Protocol";

    @Bean
    public TomcatServletWebServerFactory tomcatServletWebServerFactory(
            @Value("${tomcat.ajp.port}") int ajpPort,
            @Value("${tomcat.ajp.port.redirect}") int redirectPort,
            @Value("${tomcat.ajp.secret}") String ajpSecret) {
        TomcatServletWebServerFactory serverFactory = new TomcatServletWebServerFactory();
        serverFactory.addAdditionalTomcatConnectors(getConnector(ajpPort, redirectPort, ajpSecret));

        return serverFactory;
    }

    private Connector getConnector(int port, int redirectPort, String secret) {
        Connector connector = new Connector(PROTOCOL);
        connector.setPort(port);
        connector.setRedirectPort(redirectPort);
        connector.setSecure(true);

        final AjpNio2Protocol protocol = (AjpNio2Protocol) connector.getProtocolHandler();
        protocol.setSecret(secret);

        return connector;
    }

}
