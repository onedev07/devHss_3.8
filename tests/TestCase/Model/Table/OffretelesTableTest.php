<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OffretelesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OffretelesTable Test Case
 */
class OffretelesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OffretelesTable
     */
    public $Offreteles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Offreteles',
        'app.Elementteles',
        'app.Souscriptionteles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Offreteles') ? [] : ['className' => OffretelesTable::class];
        $this->Offreteles = TableRegistry::getTableLocator()->get('Offreteles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Offreteles);

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
