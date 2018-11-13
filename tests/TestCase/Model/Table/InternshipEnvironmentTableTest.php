<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternshipEnvironmentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternshipEnvironmentTable Test Case
 */
class InternshipEnvironmentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternshipEnvironmentTable
     */
    public $InternshipEnvironment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internship_environment',
        'app.internships',
        'app.environments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InternshipEnvironment') ? [] : ['className' => InternshipEnvironmentTable::class];
        $this->InternshipEnvironment = TableRegistry::getTableLocator()->get('InternshipEnvironment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternshipEnvironment);

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
