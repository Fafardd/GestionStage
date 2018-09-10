<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordonatorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordonatorTable Test Case
 */
class CoordonatorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordonatorTable
     */
    public $Coordonator;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coordonator'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Coordonator') ? [] : ['className' => CoordonatorTable::class];
        $this->Coordonator = TableRegistry::getTableLocator()->get('Coordonator', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coordonator);

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
