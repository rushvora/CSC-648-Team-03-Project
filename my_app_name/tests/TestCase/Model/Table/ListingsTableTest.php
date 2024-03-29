<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListingsTable Test Case
 */
class ListingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ListingsTable
     */
    public $Listings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.listings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Listings') ? [] : ['className' => 'App\Model\Table\ListingsTable'];
        $this->Listings = TableRegistry::get('Listings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Listings);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
