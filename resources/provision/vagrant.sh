#!/usr/bin/env bash

/usr/bin/mysql -uroot -p$1 -e "CREATE DATABASE IF NOT EXISTS spendee DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;"

cd /vagrant/

if [ -f ./bootstrap/cache/compiled.php ]; then
    rm ./bootstrap/cache/compiled.php
fi

if [ ! -f .env ]; then
    cp ./resources/provision/.env.vagrant .env
fi

# composer install --prefer-dist --profile -vvv
