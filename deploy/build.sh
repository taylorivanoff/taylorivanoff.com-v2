#!/bin/bash

# Clear caches
docker builder prune -f
docker container prune -f

# Run container
docker compose -f ../docker-compose.yml up -d --build --remove-orphans
