#!/usr/bin/env bash

HEADER=$'/**\n * Generated stub declarations for Gravity Forms\n * @see https://www.gravityforms.com/\n * @see https://github.com/php-stubs/gravity-forms-stubs\n */'

FILE="gravity-forms-stubs.php"

set -e

test -f "$FILE"
test -d "source/gravityforms"

# Download dependencies
if [ ! -d vendor ]; then
    composer update
fi

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --force \
    --finder=finder.php \
    --header="$HEADER" \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --out="$FILE"