<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternshipsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Cake\Validation\Validator;

/**
 * App\Model\Table\InternshipsTable Test Case
 */
class InternshipsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternshipsTable
     */
    public $Internships;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internships',
        'app.companies',
        'app.types',
        'app.internships_customerbases',
        'app.internships_environments',
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
        $config = TableRegistry::getTableLocator()->exists('Internships') ? [] : ['className' => InternshipsTable::class];
        $this->Internships = TableRegistry::getTableLocator()->get('Internships', $config);
    }
    public function testFindActive()
    {
        $query = $this->Internships->find('active');
        $this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $query->hydrate(false)->toArray();
        $expected = [
            [
                'id' => 1,
                'period' => 'Hiver 2019',
                'date_start' => date('2018-09-24'),
                'date_end' => date('2018-09-24'),
                'hours' => 1,
                'title' => 'test1',
                'stage_details' => 'test1',
                'active' => 1,
                'company_id' => 1,
                'type_id' => 1
            ],
            [
                'id' => 2,
                'period' => 'Hiver 2019',
                'date_start' => date('2018-09-24'),
                'date_end' => date('2018-09-24'),
                'hours' => 2,
                'title' => 'test2',
                'stage_details' => 'test2',
                'active' => 1,
                'company_id' => 1,
                'type_id' => 1
            ]
        ];

        $this->assertEquals($expected, $result);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Internships);

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
