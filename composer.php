{
  "name"        : "ubivar/ubivar-php"
, "description" : "Ubivar PHP Library"
, "keywords"    : ["ubivar", "risk", "api"]
, "homepage"    : "https://ubivar.com/"
, "license"     : "MIT"
, "authors"     : [{
    "name"      : "Ubivar and contributors"
  , "homepage"  : "https://github.com/ubivar/ubivar-php/contributors"
}],"require"    : {
    "php": ">=5.3.3"
  , "ext-curl"  : "*"
  , "ext-json"  : "*"
  , "ext-mbstring": "*"
},"require-dev" : {
    "phpunit/phpunit"           : "~4.0"
  , "satooshi/php-coveralls"    : "~0.6.1"
  , "squizlabs/php_codesniffer" : "~2.0"
},"autoload"    : {
  "psr-4"       : { "Ubivar\\" : "lib/" }
},"extra"       : {
  "branch-alias": {
    "dev-master": "2.0-dev"
    }
  }
}
