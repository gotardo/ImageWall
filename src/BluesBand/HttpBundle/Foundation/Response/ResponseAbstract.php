<?php

namespace BluesBand\HttpBundle\Foundation\Response;

use Symfony\Component\HttpFoundation\JsonResponse;

abstract class ResponseAbstract extends JsonResponse implements IResponse
{
    /**
     * @var int The response code
     */
    private $responseCode;
    /**
     * @var int    The response code
     * @var string
     */
    private $responseMessage;

    /**
     * ResponseAbstract constructor.
     *
     * @param array  $content         The content you want to add to the response.
     * @param int    $responseCode    The Response code.
     * @param string $responseMessage The response message
     */
    public function __construct(array $content, $responseCode = 0, $responseMessage = 'default')
    {
        parent::__construct(
            array_merge(
                $content,
                [
                    '_responseCode' => $responseCode,
                    '_responseMessage' => $responseMessage,
                ]
            )
        );

        $this->responseCode = $responseCode;
        $this->responseMessage = $responseMessage;

        $this->setStatusCode($this->getHttpCode());
    }

    /**
     * Return the response code for this Response.
     *
     * @return int The response code
     */
    public function getKResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * Return the response message for this Response.
     *
     * @return string the response message
     */
    public function getKResponseMessage()
    {
        return $this->responseMessage;
    }
}
