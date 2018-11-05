<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternshipsCustomerbasesFixture
 *
 */
class InternshipsCustomerbasesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'internship_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customerbase_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'internship_id' => ['type' => 'index', 'columns' => ['internship_id', 'customerbase_id'], 'length' => []],
            'customerbase_id' => ['type' => 'index', 'columns' => ['customerbase_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'internships_customerbases_ibfk_1' => ['type' => 'foreign', 'columns' => ['internship_id'], 'references' => ['Internships', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'internships_customerbases_ibfk_2' => ['type' => 'foreign', 'columns' => ['customerbase_id'], 'references' => ['customerbases', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'internship_id' => 1,
                'customerbase_id' => 1
            ],
        ];
        parent::init();
    }
}
