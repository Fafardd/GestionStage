<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternshipStudentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternshipStudentTable Test Case
 */
class InternshipStudentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternshipStudentTable
     */
    public $InternshipStudent;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internship_student',
        'app.internships',
        'app.students'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InternshipStudent') ? [] : ['className' => InternshipStudentTable::class];
        $this->InternshipStudent = TableRegistry::getTableLocator()->get('InternshipStudent', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternshipStudent);

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
