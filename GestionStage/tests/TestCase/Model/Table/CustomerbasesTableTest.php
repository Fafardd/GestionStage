<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerbasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerbasesTable Test Case
 */
class CustomerbasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerbasesTable
     */
    public $Customerbases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customerbases',
        'app.internship_customerbase'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Customerbases') ? [] : ['className' => CustomerbasesTable::class];
        $this->Customerbases = TableRegistry::getTableLocator()->get('Customerbases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Customerbases);

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
