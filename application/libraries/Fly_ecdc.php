<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fly_ecdc
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }


    public function efly($data)
    {
        $key = 'Neis-Fyvly@99';
        $ivlen = openssl_cipher_iv_length($cipher = "AES-256-CBC");
        $iv = openssl_random_pseudo_bytes($ivlen);
        $ciphertext_raw = openssl_encrypt($data, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
        $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
        $ciphertext = bin2hex($iv . $hmac . $ciphertext_raw);
        return $ciphertext;
    }


    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function dfly($data)
    {
        $key = 'Neis-Fyvly@99';
        $ciphertext = hex2bin($data);
        $ivlen = openssl_cipher_iv_length($cipher = "AES-256-CBC");
        $iv = substr($ciphertext, 0, $ivlen);
        $hmac = substr($ciphertext, $ivlen, $sha2len = 32);
        $ciphertext_raw = substr($ciphertext, $ivlen + $sha2len);
        $plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
        $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
        if (hash_equals($hmac, $calcmac)) {
            return $plaintext;
        } else {
            return false;
        }
    }


    public function ecdc($data, $action)
    {

        $key = 'Neis-Fyvly@99';

        switch ($action) {
            case "efly":
                $ivlen = openssl_cipher_iv_length($cipher = "AES-256-CBC");
                $iv = openssl_random_pseudo_bytes($ivlen);
                $ciphertext_raw = openssl_encrypt($data, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
                $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
                $ciphertext = bin2hex($iv . $hmac . $ciphertext_raw);
                return $ciphertext;
                break;
            case "dfly":
                $ciphertext = hex2bin($data);
                $ivlen = openssl_cipher_iv_length($cipher = "AES-256-CBC");
                $iv = substr($ciphertext, 0, $ivlen);
                $hmac = substr($ciphertext, $ivlen, $sha2len = 32);
                $ciphertext_raw = substr($ciphertext, $ivlen + $sha2len);
                $plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
                $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
                if (hash_equals($hmac, $calcmac)) {
                    return $plaintext;
                } else {
                    return false;
                }
                break;
        }
    }
}

/* End of file Simple_login.php */
/* Location: ./application/libraries/Simple_login.php */