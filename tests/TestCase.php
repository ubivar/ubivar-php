<?php

namespace Ubivar;

/**
 * Base class for Ubivar test cases, provides some utility methods for creating
 * objects.
 */
class TestCase extends \PHPUnit_Framework_TestCase
{
    public $tx = array(
        "user_id"         => "test_phahr3Eit3_123"          // your client's id
      , "user_email"      => "test_phahr3Eit3@gmail-123.com"// your client email
      , "gender"          => "M"                            // your client's gender
      , "first_name"      => "John"                         // your client's first name
      , "last_name"       => "Doe"                          // your client's last name
      , "type"            => "sale"                         // the transaction type
      , "status"          => "success"                      // the transaction status 
      , "order_id"        => "test_iiquoozeiroogi_123"      // the shopping cart id
      , "tx_id"           => "client_tx_id_123"             // the transaction id 
      , "tx_timestamp"    => "2015-04-13 13:36:41"          // the timestamp of this transaction
      , "amount"          => "43210"                        // the amount in cents

      , "payment_method"  => array(
          "bin"           => "123456"                       // the BIN of the card
        , "brand"         => "Mastercard"                   // the brand of the card
        , "funding"       => "credit"                       // the type of card
        , "country"       => "US"                           // the card country code
        , "name"          => "M John Doe"                   // the card holder's name
        , "cvc_check"     => "pass"                         // the cvc check result

      ),"billing_address" => array(
          "line1"         => "123 Market Street"            // the billing address
        , "line2"         => "4th Floor"                       
        , "city"          => "San Francisco"
        , "state"         => "California"
        , "zip"           => "94102"
        , "country"       => "US"

      ),"ip_address"      => "1.2.3.4"                      // your client ip address
      , "user_agent"      => "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36"// your client's user agent
    );

    public $login      = array(
        "session_id"      => "abc"
      , "user_id"         => "def"
    );

    public $logout        = array(
        "user_id"         => "def"  
    );

    protected static function authorizeFromEnv()
    {
        $apiKey = getenv('UBIVAR_TEST_TOKEN');
        Ubivar::setApiKey($apiKey);
    }

    /**
     * Genereate a semi-random string
     */
    protected static function generateRandomString($length = 24)
    {
      $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTU';
      $charactersLength = strlen($characters);
      $randomString     = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }

    protected function log($context, $message){
        fwrite(STDOUT, "\n".$context."\t| ".$message);
    }
}
