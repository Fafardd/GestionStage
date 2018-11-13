<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnvironmentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnvironmentTable Test Case
 */
class EnvironmentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EnvironmentTable
     */
    public $Environment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.environment',
        'app.internship'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Environment') ? [] : ['className' => EnvironmentTable::class];
        $this->Environment = TableRegistry::getTableLocator()->get('Environment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Environment);

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
}
