#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

docker compose down
docker compose build
docker compose up -d
