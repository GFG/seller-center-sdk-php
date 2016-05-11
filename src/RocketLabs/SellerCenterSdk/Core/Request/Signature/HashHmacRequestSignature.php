<?php
namespace RocketLabs\SellerCenterSdk\Core\Request\Signature;

/**
 * Class HashHmacRequestSignature
 */
class HashHmacRequestSignature implements RequestSignatureProviderInterface
{
    /**
     * @var string
     */
    protected $hashingAlgorithm;

    /**
     * @var string
     */
    protected $hashingSalt;

    /**
     * @param string $hashingAlgorithm For example sha256 - Handled by hash_hmac()
     * @param string $hashingSalt
     */
    public function __construct($hashingAlgorithm, $hashingSalt)
    {
        $this->setHashingAlgorithm($hashingAlgorithm);
        $this->hashingSalt = $hashingSalt;
    }

    /**
     * @inheritdoc
     */
    public function sign($requestAsString)
    {
        if (!is_string($requestAsString)) {
            throw new \InvalidArgumentException('String expected');
        }

        return hash_hmac($this->hashingAlgorithm, $requestAsString, $this->hashingSalt);
    }

    /**
     * @param string $algorithm
     */
    protected function setHashingAlgorithm($algorithm)
    {
        if (in_array($algorithm, hash_algos())) {
            $this->hashingAlgorithm = $algorithm;
        } else {
            throw new \InvalidArgumentException(sprintf(
                'Unsupported hashing algorithm "%s". HashHmac supports "%s"',
                $algorithm,
                implode(', ', hash_algos())
            ));
        }
    }
}
