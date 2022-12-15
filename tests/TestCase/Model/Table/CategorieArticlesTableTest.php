<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategorieArticlesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategorieArticlesTable Test Case
 */
class CategorieArticlesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategorieArticlesTable
     */
    public $CategorieArticles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategorieArticles',
        'app.Articles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategorieArticles') ? [] : ['className' => CategorieArticlesTable::class];
        $this->CategorieArticles = TableRegistry::getTableLocator()->get('CategorieArticles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategorieArticles);

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
