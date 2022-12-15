<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EtatpaiementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EtatpaiementsTable Test Case
 */
class EtatpaiementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EtatpaiementsTable
     */
    public $Etatpaiements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Etatpaiements',
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
        $config = TableRegistry::getTableLocator()->exists('Etatpaiements') ? [] : ['className' => EtatpaiementsTable::class];
        $this->Etatpaiements = TableRegistry::getTableLocator()->get('Etatpaiements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Etatpaiements);

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
