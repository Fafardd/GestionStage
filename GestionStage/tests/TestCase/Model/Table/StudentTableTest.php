<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentTable Test Case
 */
class StudentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentTable
     */
    public $Student;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.student'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Student') ? [] : ['className' => StudentTable::class];
        $this->Student = TableRegistry::getTableLocator()->get('Student', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Student);

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
