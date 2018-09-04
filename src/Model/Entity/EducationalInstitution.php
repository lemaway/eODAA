<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EducationalInstitution Entity
 *
 * @property int $id
 * @property int $address_id
 * @property string $name
 *
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\Course[] $courses
 * @property \App\Model\Entity\User[] $users
 */
class EducationalInstitution extends Entity
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
        'address_id' => true,
        'name' => true,
        'address' => true,
        'courses' => true,
        'users' => true
    ];
}
