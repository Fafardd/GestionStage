<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $postal_code
 * @property string $administrative_region
 * @property int $active
 * @property string $phone
 * @property string $email
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Internship[] $internships
 */
class Company extends Entity
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
        'address' => true,
        'city' => true,
        'province' => true,
        'postal_code' => true,
        'administrative_region' => true,
        'active' => true,
        'phone' => true,
        'email' => true,
        'user_id' => true,
        'user' => true,
        'internships' => true
    ];
}
