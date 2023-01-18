## Run the following commands to generate the php client:

- First get the jar file using
   - `wget https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/3.0.20/swagger-codegen-cli-3.0.20.jar`

- The using the jar file, generate the php client using
   - `java -jar swagger-codegen-cli-3.0.20.jar generate -i "https://app.swaggerhub.com/apiproxy/registry/Encompass.com/RestfulServices/1?resolved=true&flatten=true&pretty=true" -l php -c EncompassAPIphpSDK/config.json -o EncompassAPIphpSDK/`
