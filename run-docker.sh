#!/bin/bash
docker compose --project-name kirby --file docker/docker-compose.yml up --build --no-log-prefix --attach php
