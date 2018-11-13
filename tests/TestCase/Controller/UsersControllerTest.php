<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    public $Users;
    

    public function setUp()
    {
        parent::setUp();
        $this->Users = TableRegistry::get('Users');
    }
    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.companies',
        'app.coordonators',
        'app.students'
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
        //$this->markTestIncomplete('Not implemented yet.');
        $this->get('/users/add');

        //$this->assertReponseOk();

        $data = [
            'id' => 5,
            'email' => 'email@email.com',
            'password' => 'password',
            'category' => 1
        ];

        $this->enableCsrfToken();
        $this->enableSecurityToken();
        $this->post('/users/add', $data);

        $this->assertResponseSuccess();
        $query = $this->Users->find('all', ['conditions' => ['Users.id' => $data['id']]]);
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
