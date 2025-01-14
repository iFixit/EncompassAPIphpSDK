#!/bin/bash

GENERATOR_VERSION="7.9.0"

rm -rf EncompassAPI

wget "https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/$GENERATOR_VERSION/openapi-generator-cli-$GENERATOR_VERSION.jar"

java -jar "openapi-generator-cli-$GENERATOR_VERSION.jar" generate \
 -i "https://api.swaggerhub.com/apis/Encompass.com/RestfulServices/1/swagger.yaml" \
 -g php \
 -c config.json \
 -o ./

rm -rf "openapi-generator-cli-$GENERATOR_VERSION.jar"
