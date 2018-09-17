<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternshipFixture
 *
 */
class InternshipFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'internship';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'period' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => 'Hiver 2019', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'date_start' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'date_end' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'hours' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'stage_details' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'company_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customerbase_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'environment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'company_id' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'company_id_2' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'company_id_3' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'environment_id' => ['type' => 'index', 'columns' => ['environment_id'], 'length' => []],
            'customerbase_id' => ['type' => 'index', 'columns' => ['customerbase_id'], 'length' => []],
            'type_id' => ['type' => 'index', 'columns' => ['type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'gdsgfsdg' => ['type' => 'foreign', 'columns' => ['company_id'], 'references' => ['Company', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'internship_ibfk_1' => ['type' => 'foreign', 'columns' => ['type_id'], 'references' => ['type', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'internship_ibfk_2' => ['type' => 'foreign', 'columns' => ['environment_id'], 'references' => ['environment', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'internship_ibfk_3' => ['type' => 'foreign', 'columns' => ['customerbase_id'], 'references' => ['customerbase', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'period' => 'Lorem ipsum dolor sit amet',
                'date_start' => '2018-09-17',
                'date_end' => '2018-09-17',
                'hours' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'stage_details' => 'Lorem ipsum dolor sit amet',
                'active' => 1,
                'company_id' => 1,
                'type_id' => 1,
                'customerbase_id' => 1,
                'environment_id' => 1
            ],
        ];
        parent::init();
    }
}
