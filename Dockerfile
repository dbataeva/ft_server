# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cchromos <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/23 18:30:25 by cchromos          #+#    #+#              #
#    Updated: 2021/03/23 18:30:38 by cchromos         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster
RUN apt-get update \
    && apt-get -y install mariadb-server \
	nginx \
	openssl \
	php7.3 php-mysql php-fpm \
	wget \
	&& rm -rf /var/lib/apt/lists/*
COPY ./srcs/default  /etc/nginx/sites-available/default
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.tar.gz \
    && tar -xf phpMyAdmin-5.0.1-all-languages.tar.gz \
    && rm -rf phpMyAdmin-5.0.1-all-languages.tar.gz \
    && mv phpMyAdmin-5.0.1-all-languages /var/www/html/phpmyadmin
COPY ./srcs/config.inc.php phpmyadmin
RUN wget https://wordpress.org/latest.tar.gz \
    && tar -xvzf latest.tar.gz && rm -rf latest.tar.gz \
	&& mv wordpress /var/www/html/
COPY ./srcs/wp-config.php /var/www/html/wordpress
RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Moscow/L=Moscow/O=21shcool/CN=localhost" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt
COPY ./srcs/script.sh ./scripts/script.sh
COPY ./srcs/autoindex_off ./scripts//autoindex_off
COPY ./srcs/autoindex_on ./scripts/autoindex_on
ENTRYPOINT [ "bash", "./scripts/script.sh" ]
