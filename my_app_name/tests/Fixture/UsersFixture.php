<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'USERID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'USERNAME' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'PASSWORD' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ROLE' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => 'user', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GROUPID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CREATED' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'MODIFIED' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'EMAIL' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ACTIVE' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['USERID'], 'length' => []],
            'USERID_UNIQUE' => ['type' => 'unique', 'columns' => ['USERID'], 'length' => []],
            'USERNAME_UNIQUE' => ['type' => 'unique', 'columns' => ['USERNAME'], 'length' => []],
            'EMAIL_UNIQUE' => ['type' => 'unique', 'columns' => ['EMAIL'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'USERID' => 1,
            'USERNAME' => 'Lorem ipsum dolor sit amet',
            'PASSWORD' => 'Lorem ipsum dolor sit amet',
            'ROLE' => 'Lorem ipsum dolor sit amet',
            'GROUPID' => 1,
            'CREATED' => '2017-05-20 22:42:21',
            'MODIFIED' => '2017-05-20 22:42:21',
            'EMAIL' => 'Lorem ipsum dolor sit amet',
            'ACTIVE' => 1
        ],
    ];
}
