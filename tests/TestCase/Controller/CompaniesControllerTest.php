<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CompaniesController;
use Cake\TestSuite\IntegrationTestCase;

use Cake\ORM\TableRegistry;
/**
 * App\Controller\CompaniesController Test Case
 */
class CompaniesControllerTest extends IntegrationTestCase
{
    public $Companies;

    public function setUp()
    {
        parent::setUp();
        $this->Companies = TableRegistry::get('Companies');
    }
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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->get('/companies/add');

        //$this->assertReponseOk();

        $data = [
            'id' => 1,
            'name' => 'test',
            'address' => 'test',
            'city' => 'test',
            'province' => 'test',
            'postal_code' => 'test',
            'administrative_region' => 'test',
            'active' => 1,
            'phone' => '1234567890',
            'email' => 'email@email.com',
            'user_id' => 1
        ];

        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/companies/add', $data);

        $this->assertResponseSuccess();
        $query = $this->Companies->find('all', ['conditions' => ['Companies.id' => $data['id']]]);
        $this->assertNotEmpty($query);
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
