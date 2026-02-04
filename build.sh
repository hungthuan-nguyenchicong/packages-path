#!/bin/bash
DEPLOY_DIR=~/deploy_final
rm -rf $DEPLOY_DIR && mkdir -p $DEPLOY_DIR

# 1. Copy code sạch
rsync -av --exclude={'vendor','node_modules','.git','.env'} $HOME/git/packages-app/laravel-app/ $DEPLOY_DIR/app
cp -r $HOME/git/packages-app/packages-path $DEPLOY_DIR/packages-path

# 2. Xử lý Composer
cd $DEPLOY_DIR/app
# Dùng sed để sửa nhanh symlink từ true sang false trong file composer.json
sed -i 's/"symlink": true/"symlink": false/g' composer.json
composer install --no-dev --optimize-autoloader

# 3. Build Assets
npm install && npm run build
rm -rf node_modules # Xóa luôn node_modules sau khi build xong cho nhẹ

echo "Đã chuẩn bị xong tại $DEPLOY_DIR. Giờ bạn chỉ cần nén folder app này lại và upload!"