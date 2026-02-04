#!bin/bash
SOURCE_FILE="$ROOT_PATH/setup/laravel-app/providers.php"
TARGET_FILE="$ROOT_LARAVEL_APP/laravel-app/bootstrap/providers.php"

# copy composer.json
cp "$SOURCE_FILE" "$TARGET_FILE"