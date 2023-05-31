#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

docker compose -f '../docker-compose.yml' stop
docker compose -f '../docker-compose.yml' up -d
