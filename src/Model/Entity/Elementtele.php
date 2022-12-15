<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Elementtele Entity
 *
 * @property int $id
 * @property string|null $name
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $offretele_id
 *
 * @property \App\Model\Entity\Offretele $offretele
 */
class Elementtele extends Entity
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
        'created' => true,
        'modified' => true,
        'offretele_id' => true,
        'offretele' => true,
    ];
}
