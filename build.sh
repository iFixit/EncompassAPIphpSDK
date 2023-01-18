#!/bin/bash

rm -rf EncompassAPI
wget https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/3.0.20/swagger-codegen-cli-3.0.20.jar
java -jar swagger-codegen-cli-3.0.20.jar generate -i \
 "https://app.swaggerhub.com/apiproxy/registry/Encompass.com/RestfulServices/1?resolved=true&flatten=true&pretty=true" \
 -l php -c EncompassAPIphpSDK/config.json \
 -o EncompassAPIphpSDK/
