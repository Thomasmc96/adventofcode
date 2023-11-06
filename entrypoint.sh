#!/bin/bash
set -ex

export PS1="[php-code-challenge] \u@\h:\w $ "

composer install --classmap-authoritative --no-progress
exec bash
