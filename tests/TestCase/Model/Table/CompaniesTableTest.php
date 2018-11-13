<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompaniesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cake\Validation\Validator;

/**
 * App\Model\Table\CompaniesTable Test Case
 */
class CompaniesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompaniesTable
     */
    public $Companies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.companies',
        'app.users',
        'app.internships'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Companies') ? [] : ['className' => CompaniesTable::class];
        $this->Companies = TableRegistry::getTableLocator()->get('Companies', $config);
    }
    public function testValidateEmailFail () {
        $company = $this->Companies->find('all')->first()->toArray();
        $company['email'] = 'email.ca';
        $errors = $this->Companies->validationDefault(new Validator())->errors($company);
        $this->assertTrue(!empty($errors['email']));
    }

    public function testValidatePostalCodeFail () {
        $company = $this->Companies->find('all')->first()->toArray();
        $company['postal_code'] = '12345678';
        $errors = $this->Companies->validationDefault(new Validator())->errors($company);
        $this->assertTrue(!empty($errors['postal_code']));
    }

    public function testFindActive()
    {
        $query = $this->Companies->find('active');
        $this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $query->hydrate(false)->toArray();
        $expected = [
            [
                'id' => 1,
                'name' => 'test1',
                'address' => 'test1',
                'city' => 'test1',
                'province' => 'test1',
                'postal_code' => 'test1',
                'administrative_region' => 'test1',
                'active' => 1,
                'phone' => '1234567890',
                'email' => 'test1@test1.com',
                'user_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'test2',
                'address' => 'test2',
                'city' => 'test2',
                'province' => 'test2',
                'postal_code' => 'test2',
                'administrative_region' => 'test2',
                'active' => 1,
                'phone' => '9876543210',
                'email' => 'test2@test2.com',
                'user_id' => 1
            ]
        ];

        $this->assertEquals($expected, $result);
    }
    public function testValidatePhoneFail(){
        $company = $this->Companies->find('all')->first()->toArray();
        $company['phone'] = '12345678910';
        $errors = $this->Companies->validationDefault(new Validator())->errors($company);
        $this->assertTrue(!empty($errors['phone']));
    }

    

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Companies);

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
