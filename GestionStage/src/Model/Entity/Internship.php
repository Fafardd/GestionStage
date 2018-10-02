<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Internship Entity
 *
 * @property int $id
 * @property string $period
 * @property \Cake\I18n\FrozenDate $date_start
 * @property \Cake\I18n\FrozenDate $date_end
 * @property int $hours
 * @property string $title
 * @property string $stage_details
 * @property int $active
 * @property int $company_id
 * @property int $type_id
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\InternshipsCustomerbase[] $internships_customerbases
 * @property \App\Model\Entity\InternshipsEnvironment[] $internships_environments
 * @property \App\Model\Entity\InternshipsStudent[] $internships_students
 */
class Internship extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'period' => true,
        'date_start' => true,
        'date_end' => true,
        'hours' => true,
        'title' => true,
        'stage_details' => true,
        'active' => true,
        'company_id' => true,
        'type_id' => true,
        'company' => true,
        'type' => true,
        'internships_customerbases' => true,
        'internships_environments' => true,
        'internships_students' => true
    ];
}
