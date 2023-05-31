#!/bin/bash

pwd
cd /woodpecker/src/github.com/taylorivanoff/taylorivanoff.com || return

# Clear caches
docker builder prune -f
docker container prune -f

docker compose down
docker compose rm -f

docker compose up -d --build --force-recreate

pwd
cd deploy || return
composer install
#      - cp .env.example .env
