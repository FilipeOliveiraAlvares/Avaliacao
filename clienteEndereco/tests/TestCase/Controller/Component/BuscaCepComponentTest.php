<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\BuscaCepComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\BuscaCepComponent Test Case
 */
class BuscaCepComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\BuscaCepComponent
     */
    public $BuscaCep;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->BuscaCep = new BuscaCepComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BuscaCep);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
