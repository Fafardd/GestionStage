<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cake\Validation\Validator;

/**
 * App\Model\Table\StudentsTable Test Case
 */
class StudentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentsTable
     */
    public $Students;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.students',
        'app.users',
        'app.internships_students'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Students') ? [] : ['className' => StudentsTable::class];
        $this->Students = TableRegistry::getTableLocator()->get('Students', $config);
    }

    public function testValidateEmailFail () {
        $student = $this->Students->find('all')->first()->toArray();
        $student['email'] = 'email.ca';
        $errors = $this->Students->validationDefault(new Validator())->errors($student);
        $this->assertTrue(!empty($errors['email']));
    }

    public function testValidatePhoneFail(){
        $student = $this->Students->find('all')->first()->toArray();
        $student['phone'] = '12345678910';
        $errors = $this->Students->validationDefault(new Validator())->errors($student);
        $this->assertTrue(!empty($errors['phone']));
    }


    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Students);

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
