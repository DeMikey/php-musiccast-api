<?php
/**
 * @author Damien SUROT <damien@toxeek.com>
 */

namespace MusicCast\Tests\Api;

class DistributionTest extends TestCase
{
    /**
     * @test
     */
    public function testGetDistributionInfo()
    {
        self::assertArrayHasKey('group_id', $this->client->api('dist')->getDistributionInfo());
    }

    /**
     * @test
     */
    public function testStartDistribution()
    {
        //self::assertArrayHasKey('???', $this->client->api('dist')->startDistribution());
        $this->markTestSkipped('dist/startDistribution method not implemented');
    }

    /**
     * @test
     */
    public function testSetCientInfo()
    {
        //self::assertArrayHasKey('???', $this->client->api('dist')->setCientInfo());
        $this->markTestSkipped('dist/setCientInfo method not implemented');
    }

    /**
     * @test
     */
    public function testSetGroupName()
    {
        //self::assertArrayHasKey('???', $this->client->api('dist')->setGroupName());
        $this->markTestSkipped('dist/setGroupName method not implemented');
    }


    /**
     * @test
     */
    public function testSetServerInfo()
    {
        //self::assertArrayHasKey('group_id', $this->client->api('dist')->setServerInfo());
        $this->markTestSkipped('dist/setServerInfo method not implemented');
    }
}
