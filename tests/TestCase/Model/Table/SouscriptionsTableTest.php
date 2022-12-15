<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SouscriptionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SouscriptionsTable Test Case
 */
class SouscriptionsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SouscriptionsTable
     */
    public $Souscriptions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Souscriptions',
        'app.Clients',
        'app.Offres',
        'app.Periodes',
        'app.Paiements',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Souscriptions') ? [] : ['className' => SouscriptionsTable::class];
        $this->Souscriptions = TableRegistry::getTableLocator()->get('Souscriptions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Souscriptions);

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
