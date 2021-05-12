FROM ubuntu:18.04

LABEL Author="Elayne Lemos elayne.lemos@sysvale.com"

# Image ENV variables
ENV PATH ${PATH}:/usr/local/bin:/usr/local/sbin:/usr/bin:/sbin:/bin:/usr/sbin
ENV TZ=America/Recife
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install basic packages
RUN apt-get update \
  && apt-get upgrade -y
RUN apt-get install -y --no-install-recommends apt-utils
RUN apt-get install -y --no-install-recommends wget \
  software-properties-common \
  unzip \
  curl \
  make \
  automake \
  git \
  gcc \
  g++ \
  libxrender1 \
  bison \
  flex \
  libboost-dev \
  libboost-all-dev \
  libboost-test-dev \
  libboost-program-options-dev \
  libboost-filesystem-dev \
  libboost-thread-dev \
  libevent-dev \
  libtool \
  pkg-config \
  libssl-dev

# Add PHP base repository
RUN apt-get install -y language-pack-en-base \
  && LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php

# Install php and its libraries
#Install PHP 7.4 and its extensions
RUN apt-get update && apt-get upgrade -y && \
  apt-get --no-install-recommends -y install php7.4 \
  php7.4-mbstring \
  php7.4-dom \
  php7.4-cli \
  php7.4-xml \
  php7.4-curl \
  php7.4-imagick \
  php7.4-zip \
  php7.4-gd \
  php7.4-bcmath \
  php7.4-json \
  php7.4-dev

#Install Composer
RUN cd /tmp && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && php -r "unlink('composer-setup.php');"

#Install Node e NPM
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get update && apt-get --no-install-recommends install -y nodejs \
  && npm install -g npm cross-env

RUN wget https://downloads.apache.org/thrift/0.14.1/thrift-0.14.1.tar.gz \
  && tar -xvf thrift-0.14.1.tar.gz && cd thrift-0.14.1 \
  && ./bootstrap.sh \
  && ./configure --bindir=/usr/local/bin \
  && make && make install  && cd /tmp \
  && thrift -version

# Cleanup
RUN apt-get autoremove -y \
  && apt-get clean \
  && apt-get autoclean \
  && rm -rf /var/lib/apt/lists/* \
  && rm -rf /tmp/*

WORKDIR /root
