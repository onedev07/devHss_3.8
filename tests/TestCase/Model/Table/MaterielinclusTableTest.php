<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterielinclusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterielinclusTable Test Case
 */
class MaterielinclusTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterielinclusTable
     */
    public $Materielinclus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Materielinclus',
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
        $config = TableRegistry::getTableLocator()->exists('Materielinclus') ? [] : ['className' => MaterielinclusTable::class];
        $this->Materielinclus = TableRegistry::getTableLocator()->get('Materielinclus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Materielinclus);

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
