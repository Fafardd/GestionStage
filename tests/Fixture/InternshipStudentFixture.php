<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InternshipStudentFixture
 *
 */
class InternshipStudentFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'internship_student';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'internship_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'student_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'internship_id' => ['type' => 'index', 'columns' => ['internship_id', 'student_id'], 'length' => []],
            'student_id' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'internship_student_ibfk_1' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['Students', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'internship_student_ibfk_2' => ['type' => 'foreign', 'columns' => ['internship_id'], 'references' => ['Internships', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'student_id' => 1
            ],
        ];
        parent::init();
    }
}
