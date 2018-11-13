<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternshipsCustomerbasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternshipsCustomerbasesTable Test Case
 */
class InternshipsCustomerbasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternshipsCustomerbasesTable
     */
    public $InternshipsCustomerbases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internships_customerbases',
        'app.internships',
        'app.customerbases'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InternshipsCustomerbases') ? [] : ['className' => InternshipsCustomerbasesTable::class];
        $this->InternshipsCustomerbases = TableRegistry::getTableLocator()->get('InternshipsCustomerbases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternshipsCustomerbases);

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
