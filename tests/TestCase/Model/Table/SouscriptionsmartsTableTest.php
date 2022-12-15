<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SouscriptionsmartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SouscriptionsmartsTable Test Case
 */
class SouscriptionsmartsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SouscriptionsmartsTable
     */
    public $Souscriptionsmarts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Souscriptionsmarts',
        'app.Offresmarts',
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
        $config = TableRegistry::getTableLocator()->exists('Souscriptionsmarts') ? [] : ['className' => SouscriptionsmartsTable::class];
        $this->Souscriptionsmarts = TableRegistry::getTableLocator()->get('Souscriptionsmarts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Souscriptionsmarts);

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
