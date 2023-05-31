#!/bin/bash

docker builder prune -f # don't add -a here, it will destroy build cache
docker container prune -f
docker compose -f docker-compose.yml up -d --build --remove-orphans
