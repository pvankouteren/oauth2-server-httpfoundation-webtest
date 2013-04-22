<?php
namespace OAuth2\HttpFoundationWebTest\Symfony;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;
use OAuth2\HttpFoundationWebTest\Client;

abstract class WebTestCase extends BaseWebTestCase
{
    /**
     * @param array $server
     * @return null
     */
    public function createClient(array $server = array())
    {
        return new Client($this->app, $server);
    }
}
