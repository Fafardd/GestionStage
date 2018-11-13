<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternshipsFixture
 *
 */
class InternshipsFixture extends TestFixture
{

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
        '_indexes' => [
            'company_id' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'company_id_2' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'company_id_3' => ['type' => 'index', 'columns' => ['company_id'], 'length' => []],
            'type_id' => ['type' => 'index', 'columns' => ['type_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            ],
            [
                'id' => 3,
                'period' => 'Hiver 2019',
                'date_start' => date('2018-09-24'),
                'date_end' => date('2018-09-24'),
                'hours' => 3,
                'title' => 'test3',
                'stage_details' => 'test3',
                'active' => 0,
                'company_id' => 1,
                'type_id' => 1
            ]
        ];
        parent::init();
    }
}
