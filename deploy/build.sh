#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

docker compose down
docker compose rm -f

docker compose up -d --build --force-recreate
