#!/bin/bash

echo "The current branch is ${CI_COMMIT_BRANCH}"
echo "The current commit hash is ${CI_COMMIT_SHA}"
echo "Building..."
docker builder prune -f # don't add -a here, it will destroy build cache
docker container prune -f
docker compose -f docker-compose.yml up -d --build --remove-orphans
echo "Building done."
