<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompaniesFixture
 *
 */
class CompaniesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'address' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'city' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'province' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'postal_code' => ['type' => 'string', 'length' => 6, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'administrative_region' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'phone' => ['type' => 'string', 'length' => 11, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'companies_ibfk_1' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['Users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'name' => 'test1',
                'address' => 'test1',
                'city' => 'test1',
                'province' => 'test1',
                'postal_code' => 'test1',
                'administrative_region' => 'test1',
                'active' => 1,
                'phone' => '1234567890',
                'email' => 'test1@test1.com',
                'user_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'test2',
                'address' => 'test2',
                'city' => 'test2',
                'province' => 'test2',
                'postal_code' => 'test2',
                'administrative_region' => 'test2',
                'active' => 1,
                'phone' => '9876543210',
                'email' => 'test2@test2.com',
                'user_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'test3',
                'address' => 'test3',
                'city' => 'test3',
                'province' => 'test3',
                'postal_code' => 'test3',
                'administrative_region' => 'test3',
                'active' => 0,
                'phone' => '9876543210',
                'email' => 'test3@test3.com',
                'user_id' => 1
            ]
        ];
        parent::init();
    }
}
