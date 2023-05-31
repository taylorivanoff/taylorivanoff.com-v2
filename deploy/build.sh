#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

docker compose -f ../docker-compose.yml down -v
docker compose -f ../docker-compose.yml up -d --force-recreate --build
