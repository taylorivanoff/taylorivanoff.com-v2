#!/bin/bash

# Clear caches
#docker builder prune -f
#docker container prune -f

pwd
ls -la
docker build .
docker compose up -d
