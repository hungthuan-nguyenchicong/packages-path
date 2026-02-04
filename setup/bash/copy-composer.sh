#!bin/bash
# branch
CURRENT_BRANCH=$(cd "$ROOT_PATH" && git rev-parse --abbrev-ref HEAD)
echo "Đang ở nhánh: $CURRENT_BRANCH. Tự động cấu hình Composer..."
# sed -i "s#dev-*#dev-$CURRENT_BRANCH#g" "$DEST_FILE"

SOURCE_FILE="$ROOT_PATH/setup/laravel-app/composer.json"
TARGET_FILE="$ROOT_LARAVEL_APP/laravel-app/composer.json"

# copy composer.json
cp "$SOURCE_FILE" "$TARGET_FILE"

# run
(
    
    # cd laravel-app
    cd "$RUN_LARAVEL" || exit
    composer update vendor-path/packages-path --prefer-source
)
echo "Copy:: $SOURCE_FILE -> $TARGET_FILE"