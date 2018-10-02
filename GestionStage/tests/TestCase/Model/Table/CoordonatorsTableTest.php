<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordonatorsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordonatorsTable Test Case
 */
class CoordonatorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordonatorsTable
     */
    public $Coordonators;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coordonators',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Coordonators') ? [] : ['className' => CoordonatorsTable::class];
        $this->Coordonators = TableRegistry::getTableLocator()->get('Coordonators', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coordonators);

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
