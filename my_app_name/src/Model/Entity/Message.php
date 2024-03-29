<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $MESSAGEID
 * @property int $SENDERID
 * @property int $RECIPIENTID
 * @property string $SUBJECT
 * @property string $BODY
 * @property \Cake\I18n\Time $DATESENT
 * @property int $READSTATUS
 */
class Message extends Entity
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
        'MESSAGEID' => false
    ];
}
