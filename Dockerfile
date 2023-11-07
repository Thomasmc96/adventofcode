FROM php:8.2-cli-alpine

RUN apk add --update --no-cache bash
COPY --from=composer/composer:2-bin --chown=hiper:hiper /composer /usr/local/bin/composer
RUN adduser --disabled-password -u 1000 hiper

COPY --chown=hiper:hiper entrypoint.sh /usr/local/bin/entrypoint
RUN chmod u+x /usr/local/bin/entrypoint

WORKDIR /var/php-code-challenge
RUN chown hiper:hiper -R /var/php-code-challenge

USER hiper
ENTRYPOINT entrypoint
