<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternshipCustomerbaseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternshipCustomerbaseTable Test Case
 */
class InternshipCustomerbaseTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternshipCustomerbaseTable
     */
    public $InternshipCustomerbase;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internship_customerbase',
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
        $config = TableRegistry::getTableLocator()->exists('InternshipCustomerbase') ? [] : ['className' => InternshipCustomerbaseTable::class];
        $this->InternshipCustomerbase = TableRegistry::getTableLocator()->get('InternshipCustomerbase', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternshipCustomerbase);

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
