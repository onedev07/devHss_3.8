<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CommentairesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CommentairesTable Test Case
 */
class CommentairesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CommentairesTable
     */
    public $Commentaires;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Commentaires',
        'app.Articles',
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
        $config = TableRegistry::getTableLocator()->exists('Commentaires') ? [] : ['className' => CommentairesTable::class];
        $this->Commentaires = TableRegistry::getTableLocator()->get('Commentaires', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Commentaires);

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
