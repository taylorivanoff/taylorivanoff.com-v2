#!/bin/bash

docker compose build
docker -f docker-compose.yml -f deploy/production.yml compose up --no-deps -d
