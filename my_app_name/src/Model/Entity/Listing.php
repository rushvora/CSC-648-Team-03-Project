<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Listing Entity
 *
 * @property int $LISTINGSID
 * @property string $TITLE
 * @property float $PRICE
 * @property string $SELLER
 * @property string $PICTURE
 * @property string $CATEGORY
 * @property string $PICKUPLOCATION
 * @property string $DESCRIPTION
 * @property string $SHORTDESCRIPTION
 * @property \Cake\I18n\Time $DATEPOSTED
 * @property string $PICTUREDIR
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
        'LISTINGSID' => false
    ];
}
