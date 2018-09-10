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
 *
 * @property \App\Model\Entity\Internship[] $internship
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
        'internship' => true
    ];
}
