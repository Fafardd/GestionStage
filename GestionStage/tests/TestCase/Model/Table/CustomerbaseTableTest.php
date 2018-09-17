<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CustomerbaseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CustomerbaseTable Test Case
 */
class CustomerbaseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CustomerbaseTable
     */
    public $Customerbase;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.customerbase',
        'app.internship'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Customerbase') ? [] : ['className' => CustomerbaseTable::class];
        $this->Customerbase = TableRegistry::getTableLocator()->get('Customerbase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Customerbase);

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
