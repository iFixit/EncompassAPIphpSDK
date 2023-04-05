#!/bin/bash

rm -rf EncompassAPIphpSDK
wget https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/3.0.41/swagger-codegen-cli-3.0.41.jar
java -jar swagger-codegen-cli-3.0.41.jar generate -i \
 "https://app.swaggerhub.com/apiproxy/registry/Encompass.com/RestfulServices/1?resolved=true&flatten=true&pretty=true" \
 -l php -c config.json \
 -o ./
rm -rf swagger-codegen-cli-3.0.41.jar
