#!/bin/bash
echo "Building..."
echo "The current branch is ${CI_COMMIT_BRANCH}"
echo "The current commit hash is ${CI_COMMIT_SHA}"
echo "Building done."

#
#docker compose -f docker-compose.yml up -d --build --remove-orphans
