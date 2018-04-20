<?php
namespace League\OAuth2\Client\Provider;

class Tabs2ResourceOwner implements ResourceOwnerInterface
{
    /**
     * Raw response.
     *
     * @var array
     */
    protected $response;

    /**
     * Creates new resource owner.
     *
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * Returns the identifier of the authorized resource owner.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->response['id'] ?: null;
    }

    /**
     * Returns resource owner email.
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->response['type'] ?: null;
    }


    /**
     * Returns all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
