<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $phone
 * @property string $email
 * @property string $other_details
 * @property string $notes
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\InternshipStudent[] $internship_student
 */
class Student extends Entity
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
        'name' => true,
        'first_name' => true,
        'phone' => true,
        'email' => true,
        'other_details' => true,
        'notes' => true,
        'user_id' => true,
        'user' => true,
        'internship_student' => true
    ];
}
