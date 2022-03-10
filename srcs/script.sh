# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    script.sh                                          :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: cchromos <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/03/23 18:31:21 by cchromos          #+#    #+#              #
#    Updated: 2021/03/23 18:31:23 by cchromos         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

service mysql start
service php7.3-fpm start

mysql -e "create database wordpress;"
mysql -e "create user cchromos;"
mysql -e "grant all on wordpress.* to 'cchromos'@'localhost' identified by 'cchromos';"
mysql -e "flush privileges;"

nginx -g "daemon off;"
