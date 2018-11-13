<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternshipsEnvironmentsFixture
 *
 */
class InternshipsEnvironmentsFixture extends TestFixture
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
        'environment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'internship_id' => ['type' => 'index', 'columns' => ['internship_id', 'environment_id'], 'length' => []],
            'environment_id' => ['type' => 'index', 'columns' => ['environment_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'internships_environments_ibfk_1' => ['type' => 'foreign', 'columns' => ['internship_id'], 'references' => ['Internships', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'internships_environments_ibfk_2' => ['type' => 'foreign', 'columns' => ['environment_id'], 'references' => ['environments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'environment_id' => 1
            ],
        ];
        parent::init();
    }
}
