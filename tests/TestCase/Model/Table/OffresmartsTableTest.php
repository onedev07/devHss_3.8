<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OffresmartsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OffresmartsTable Test Case
 */
class OffresmartsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OffresmartsTable
     */
    public $Offresmarts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Offresmarts',
        'app.Elementsmarts',
        'app.Souscriptionsmarts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Offresmarts') ? [] : ['className' => OffresmartsTable::class];
        $this->Offresmarts = TableRegistry::getTableLocator()->get('Offresmarts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Offresmarts);

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
