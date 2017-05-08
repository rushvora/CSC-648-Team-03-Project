<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Listings Model
 *
 * @method \App\Model\Entity\Listing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Listing newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Listing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Listing|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Listing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Listing[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Listing findOrCreate($search, callable $callback = null, $options = [])
 */
class ListingsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('listings');
        $this->setDisplayField('ListingsId');
        $this->setPrimaryKey('ListingsId');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('LISTINGSID')
            ->allowEmpty('LISTINGSID', 'create');

        $validator
            ->requirePresence('TITLE', 'create')
            ->notEmpty('TITLE');

        $validator
            ->decimal('PRICE')
            ->allowEmpty('PRICE');

        $validator
            ->allowEmpty('SELLER');

        $validator
            ->allowEmpty('PICTURE');

        $validator
            ->allowEmpty('CATEGORY');

        $validator
            ->allowEmpty('PICKUPLOCATION');

        $validator
            ->allowEmpty('THUMBNAILS');

        $validator
            ->allowEmpty('DESCRIPTION');

        $validator
            ->allowEmpty('SHORTDESCRIPTION');

        return $validator;
    }
}
