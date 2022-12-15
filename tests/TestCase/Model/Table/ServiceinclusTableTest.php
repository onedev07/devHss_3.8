<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceinclusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceinclusTable Test Case
 */
class ServiceinclusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceinclusTable
     */
    public $Serviceinclus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Serviceinclus',
        'app.Offres',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Serviceinclus') ? [] : ['className' => ServiceinclusTable::class];
        $this->Serviceinclus = TableRegistry::getTableLocator()->get('Serviceinclus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Serviceinclus);

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
