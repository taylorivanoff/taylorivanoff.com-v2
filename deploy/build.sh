#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

docker compose -f '../docker-compose.yml' rm
docker compose -f '../docker-compose.yml' up -d
