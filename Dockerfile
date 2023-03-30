FROM wordpress:latest

WORKDIR /var/www/html

# Installing wp-cli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

# Installing Subversion
RUN apt-get update
RUN apt-get install subversion -y

EXPOSE 80