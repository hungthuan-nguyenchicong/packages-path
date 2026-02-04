#!bin/bash

SCRIPT_DIR=$(dirname -- $BASH_SOURCE)

# setup/setup.sh
export ROOT_PATH=$(cd -- "$SCRIPT_DIR/.." && pwd)
# $HOME/git/packages-app/laravel-app
export ROOT_LARAVEL_APP=$(cd -- "$HOME/git/packages-app" && pwd)
# cd run laravel
export RUN_LARAVEL=$(cd -- "$ROOT_LARAVEL_APP/laravel-app" && pwd)

# run bash

# copy composer.js
bash "$ROOT_PATH/setup/bash/copy-composer.sh"
# copy providers
bash "$ROOT_PATH/setup/bash/copy-providers.sh"


echo "ROOT_PATH: $ROOT_PATH"
echo "ROOT_LARAVEL_APP: $ROOT_LARAVEL_APP"