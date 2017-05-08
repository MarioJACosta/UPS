<?php

namespace UPS;

/**
 * Description of socket
 *
 * @author Mario Costa <mario@computech-it.co.uk>
 */
class Curl {

    /**
     *
     * @var string
     */
    protected $curl;
    
    /**
     *
     * @var string
     */
    protected $address = 'https://wwwcie.ups.com/ups.app/xml/QVEvents';

    /**
     * Initialize curl
     */
    public function __construct() {
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->address);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->curl, CURLOPT_VERBOSE, true);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array('Content-Type: application/xml'));
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
    }

    /**
     * Destroy Curl
     */
    public function __destruct() {
        curl_close($this->curl);
    }

    /**
     * Perform curl
     * @param string $request
     * @return string
     */
    public function exequteRequest($request) {
        curl_setopt($this->curl, CURLOPT_POST, count($request));
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($request));

        $response = curl_exec($this->curl);

        return $response;
    }

}
