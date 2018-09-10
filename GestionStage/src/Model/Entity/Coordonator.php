<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coordonator Entity
 *
 * @property int $id
 * @property string $name
 * @property string $first_name
 * @property string $title
 * @property string $place
 * @property string $city
 * @property string $province
 * @property string $email
 * @property string $phone
 * @property string $job
 * @property string $fax
 */
class Coordonator extends Entity
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
        'title' => true,
        'place' => true,
        'city' => true,
        'province' => true,
        'email' => true,
        'phone' => true,
        'job' => true,
        'fax' => true
    ];
}
