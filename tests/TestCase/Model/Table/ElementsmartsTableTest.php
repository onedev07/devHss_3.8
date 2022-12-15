<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ElementsmartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ElementsmartsTable Test Case
 */
class ElementsmartsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ElementsmartsTable
     */
    public $Elementsmarts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Elementsmarts',
        'app.Offresmarts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Elementsmarts') ? [] : ['className' => ElementsmartsTable::class];
        $this->Elementsmarts = TableRegistry::getTableLocator()->get('Elementsmarts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Elementsmarts);

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
