<?php
namespace RocketLabs\SellerCenterSdk\Core\Response;

/**
 * Class ErrorResponse
 */
class ErrorResponse extends AbstractResponse
{
    const KEY_ERROR_MESSAGE = 'ErrorMessage';
    const KEY_ERROR_CODE = 'ErrorCode';
    
    /**
     * @var string
     */
    protected $message;

    /**
     * @var int
     */
    protected $code;

    /**
     * ErrorResponse constructor.
     * @param array $responseData
     */
    public function __construct(array $responseData)
    {
        parent::__construct($responseData);

        $this->message = isset($responseData[static::KEY_HEAD][static::KEY_ERROR_MESSAGE]) ?
            $responseData[static::KEY_HEAD][static::KEY_ERROR_MESSAGE] : '';

        $this->code = isset($responseData[static::KEY_HEAD][static::KEY_ERROR_CODE]) ?
            $responseData[static::KEY_HEAD][static::KEY_ERROR_CODE] : '';
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return $this->getBody();
    }
}
