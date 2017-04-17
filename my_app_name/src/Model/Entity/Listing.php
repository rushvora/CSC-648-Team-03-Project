<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Listing Entity
 *
 * @property int $ListingsId
 * @property string $Name
 * @property float $Price
 * @property string $Seller
 * @property string|resource $Image
 * @property string $Category
 * @property string $Pick Up Location
 */
class Listing extends Entity
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
        'ListingsId' => false
    ];
}
