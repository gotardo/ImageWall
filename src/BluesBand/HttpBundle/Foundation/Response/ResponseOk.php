<?php

namespace BluesBand\HttpBundle\Foundation\Response;
/**
 * Class ResponseOk.
 *
 * A response object with HTTP STATUS CODE 200 OK
 */
class ResponseOk extends ResponseAbstract
{
    /**
     *
     */
    const DEFAULT_RESPONSE_CODE = 0;

    /**
     *
     */
    const DEFAULT_RESPONSE_MESSAGE = 'Ok';

    public function __construct(
        array $content = [],
        $responseCode = self::DEFAULT_RESPONSE_CODE,
        $responseMessage = self::DEFAULT_RESPONSE_MESSAGE
    ) {
        parent::__construct($content, $responseCode, $responseMessage);
    }

    /**
     * Return the http code.
     *
     * @return int The http code for this reponse (200)
     */
    public function getHttpCode()
    {
        return self::HTTP_OK;
    }
}
