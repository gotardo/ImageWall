<?php

namespace BluesBand\HttpBundle\Foundation\Response;

interface IResponse
{
    /**
     *
     */
    const DEFAULT_RESPONSE_CODE = 100;

    /**
     *
     */
    const DEFAULT_RESPONSE_MESSAGE = '¡Chachi!';

    /**
     * @return mixed
     */
    public function getResponseCode();
    /**
     * @return mixed
     */
    public function getResponseMessage();

    /**
     * @return mixed
     */
    public function getHttpCode();
    /**
     * KResponseInterface constructor.
     *
     * @param $content The data to send in the response. For example ['wall': [[..], [...]]]
     * @param $message The message to put in 'message' JSON response
     * @param $code This code has always the HTTP code in the first 3 digits
     */
    public function __construct(array $content, $responseCode, $responseMessage);
}
