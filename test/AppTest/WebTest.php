<?php
namespace AppTest;

use GuzzleHttp\Client;

class WebTest extends \PHPUnit_Framework_TestCase
{
    protected $client;

    public function setUp()
    {
        $this->client = new Client([
            'base_uri' => 'http://' . WEB_SERVER_HOST . ':' . WEB_SERVER_PORT,
            'timeout'  => 5,
        ]);
    }

    public function getUrlToTest()
    {
        return [
            [ '/' ],
            [ '/about' ],
            [ '/about/faq' ],
            [ '/license' ],
            [ '/long-term-support' ],
            [ '/changelog' ],
            [ '/issues' ],
            [ '/issues/ZF2' ],
            [ '/issues/ZF1' ],
            [ '/security' ],
            [ '/security/feed' ],
            [ '/security/advisories' ],
            [ '/downloads' ],
            [ '/downloads/skeleton-app' ],
            [ '/downloads/expressive' ],
            [ '/downloads/archives' ],
            [ '/learn' ],
            [ '/learn/training-and-certifiation' ],
            [ '/learn/support-and-consulting' ],
            [ '/docs/api/zf2' ],
            [ '/docs/api/zf1' ],
            [ '/blog' ],
            [ '/participate' ],
            [ '/participate/contributor-guide' ],
            [ '/participate/code-manifesto' ],
            [ '/participate/contributors' ],
            [ '/participate/logos' ],
            [ '/status' ],
            [ '/stats' ]
        ];
    }

    /**
     * @dataProvider getUrlToTest
     */
    public function testHomePage($url)
    {
        $response = $this->client->request('GET', $url);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getBody()->getContents());
    }
}