#!bin/bash
SOURCE_FILE="$ROOT_PATH/setup/laravel-app/.env"
TARGET_FILE="$ROOT_LARAVEL_APP/laravel-app/.env"

# copy .env
cp $SOURCE_FILE $TARGET_FILE