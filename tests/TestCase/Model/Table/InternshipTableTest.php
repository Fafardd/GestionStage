<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternshipTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternshipTable Test Case
 */
class InternshipTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternshipTable
     */
    public $Internship;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internship',
        'app.companies',
        'app.types',
        'app.internship_customerbase',
        'app.internship_environment',
        'app.internship_student'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Internship') ? [] : ['className' => InternshipTable::class];
        $this->Internship = TableRegistry::getTableLocator()->get('Internship', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Internship);

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
