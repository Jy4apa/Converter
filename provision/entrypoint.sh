#!/usr/bin/env bash
set -e

if [[ -e "$PWD/composer.json" ]]; then
  echo "SUCCESS: Composer found in $PWD - update now..."

  composer install
  composer update

  echo "SUCCESS: Complete! Composer has been successfully updated in $PWD"
fi

exec "$@"
