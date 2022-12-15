<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Devi Entity
 *
 * @property int $id
 * @property string $codedevis
 * @property string|null $user_id
 * @property string|null $client_id
 * @property string|null $offre_id
 * @property string|null $materielinclus_id
 * @property string|null $serviceinclus_id
 * @property string|null $periode_id
 * @property string|null $montanttotal
 * @property \Cake\I18n\FrozenTime|null $datedebut
 * @property \Cake\I18n\FrozenTime|null $datefin
 * @property string|null $etat_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Offre $offre
 * @property \App\Model\Entity\Materielinclus $materielinclus
 * @property \App\Model\Entity\Serviceinclus $serviceinclus
 * @property \App\Model\Entity\Periode $periode
 * @property \App\Model\Entity\Etat $etat
 */
class Devi extends Entity
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
        'user_id' => true,
        'client_id' => true,
        'offre_id' => true,
        'materielinclus_id' => true,
        'serviceinclus_id' => true,
        'periode_id' => true,
        'montanttotal' => true,
        'datedebut' => true,
        'datefin' => true,
        'etat_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'client' => true,
        'offre' => true,
        'materielinclus' => true,
        'serviceinclus' => true,
        'periode' => true,
        'etat' => true,
    ];
}
