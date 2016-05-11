<?php
namespace RocketLabs\SellerCenterSdk\Core;

/**
 * Class Configuration
 * Value object to keep valid configuration for Seller center api
 */
class Configuration
{
    /** @var string[] */
    private $validSchemas = ['http', 'https'];

    /** @var string */
    protected $url;

    /** @var string */
    protected $user;

    /** @var string */
    protected $key;

    /**
     * @param string $url http: or https: valid URL of SellerCenter API
     * @param string $user e-mail of SellerCenter user
     * @param string $key API key of SellerCenter user
     */
    public function __construct($url, $user, $key)
    {
        $filteredUrl = $this->validateUrl($url);
        $this->validateUrlSchema($filteredUrl);

        $filteredUser = $this->validateUser($user);

        $this->url = $filteredUrl;
        $this->user = $filteredUser;
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $url
     * @return string
     * @throws \InvalidArgumentException
     */
    protected function validateUrl($url)
    {
        $filteredUrl = filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED | FILTER_FLAG_SCHEME_REQUIRED);

        if (false === $filteredUrl) {
            throw new \InvalidArgumentException(
                sprintf('Provided url for Seller Center Api "%s" is invalid', $url)
            );
        }

        return $filteredUrl;
    }

    /**
     * @param string $url
     * @return void
     * @throws \InvalidArgumentException
     */
    protected function validateUrlSchema($url)
    {
        $parsedUrl = parse_url($url);

        $validSchemes = $this->validSchemas;
        if (false === isset($parsedUrl['scheme']) || false === in_array($parsedUrl['scheme'], $validSchemes)) {
            throw new \InvalidArgumentException(
                sprintf(
                    'The scheme of provided url "%s" is invalid, please use one of following schemas "%s"',
                    $url,
                    implode('", "', $validSchemes)
                )
            );
        }
    }

    /**
     * @param string $user
     * @return string
     * @throws \InvalidArgumentException
     */
    protected function validateUser($user)
    {
        $filteredUser = filter_var($user, FILTER_VALIDATE_EMAIL);

        if (false === $filteredUser) {
            throw new \InvalidArgumentException(
                sprintf('Provided user for Seller Center Api "%s" is invalid', $user)
            );
        }

        return $filteredUser;
    }
}
