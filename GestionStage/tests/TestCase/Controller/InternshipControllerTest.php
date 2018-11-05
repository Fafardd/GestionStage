<?php
namespace App\Test\TestCase\Controller;

use App\Controller\InternshipController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\InternshipController Test Case
 */
class InternshipControllerTest extends IntegrationTestCase
{

    public $Internships;
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
        $this->markTestIncomplete('Not implemented yet.');
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
