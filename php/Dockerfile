FROM ubuntu:latest

MAINTAINER mirko1593

RUN apt update \
    && apt install -y locales tzdata \
    && locale-gen en_US.UTF-8 \
    && echo "UTC" > /etc/timezone \
    && dpkg-reconfigure -f nointeractive tzdata

ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8

RUN apt install -y curl zip unzip git software-properties-common \
    && add-apt-repository -y ppa:ondrej/php \
    && apt install -y php7.3-fpm php7.3-cli php7.3-mysql php7.3-sqlite3 php7.3-gd php7.3-imap php7.3-mbstring php7.3-xml php7.3-curl php7.3-bcmath \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir /run/php \
    && apt remove -y --purge software-properties-common \
    && apt clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*


ADD php-fpm.conf /etc/php/7.3/fpm/php-fpm.conf
ADD www.conf /etc/php/7.3/fpm/pool.d/www.conf

EXPOSE 9000
CMD ["php-fpm7.3"]
