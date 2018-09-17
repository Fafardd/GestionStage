<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeTable Test Case
 */
class TypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeTable
     */
    public $Type;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type',
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
        $config = TableRegistry::getTableLocator()->exists('Type') ? [] : ['className' => TypeTable::class];
        $this->Type = TableRegistry::getTableLocator()->get('Type', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Type);

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
