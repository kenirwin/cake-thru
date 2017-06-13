<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Woman Entity
 *
 * @property int $id
 * @property string $name
 * @property string $viaf_url
 *
 * @property \App\Model\Entity\Portrait[] $portraits
 * @property \App\Model\Entity\Role[] $roles
 */
class Woman extends Entity
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
        '*' => true,
        'id' => false
    ];
}
