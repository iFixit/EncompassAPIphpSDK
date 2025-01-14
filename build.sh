#!/bin/bash

CODEGEN_VERSION="3.0.66"

rm -rf EncompassAPIphpSDK
wget "https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/$CODEGEN_VERSION/swagger-codegen-cli-$CODEGEN_VERSION.jar"
java -jar "swagger-codegen-cli-$CODEGEN_VERSION.jar" generate -i \
 "https://app.swaggerhub.com/apiproxy/registry/Encompass.com/RestfulServices/1?resolved=true&flatten=true&pretty=true" \
 -l php -c config.json \
 -o ./
rm -rf "swagger-codegen-cli-$CODEGEN_VERSION.jar"
