<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SouscriptiontelesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SouscriptiontelesTable Test Case
 */
class SouscriptiontelesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SouscriptiontelesTable
     */
    public $Souscriptionteles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Souscriptionteles',
        'app.Offreteles',
        'app.Clients',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Souscriptionteles') ? [] : ['className' => SouscriptiontelesTable::class];
        $this->Souscriptionteles = TableRegistry::getTableLocator()->get('Souscriptionteles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Souscriptionteles);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
