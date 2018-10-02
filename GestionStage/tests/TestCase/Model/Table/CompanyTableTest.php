<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanyTable Test Case
 */
class CompanyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanyTable
     */
    public $Company;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.company',
        'app.users',
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
        $config = TableRegistry::getTableLocator()->exists('Company') ? [] : ['className' => CompanyTable::class];
        $this->Company = TableRegistry::getTableLocator()->get('Company', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Company);

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
