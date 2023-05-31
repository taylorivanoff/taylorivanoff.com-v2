#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

docker compose ps
docker compose stop
docker compose -f ../docker-compose.yml up -d --build --remove-orphans
