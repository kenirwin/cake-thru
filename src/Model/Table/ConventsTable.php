<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Convents Model
 *
 * @property \Cake\ORM\Association\HasMany $Roles
 *
 * @method \App\Model\Entity\Convent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Convent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Convent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Convent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Convent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Convent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Convent findOrCreate($search, callable $callback = null, $options = [])
 */
class ConventsTable extends Table
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

        $this->setTable('convents');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Roles', [
            'foreignKey' => 'convent_id'
        ]);

        $this->belongsToMany('Women', [
            'through' => 'Roles'
        ]);

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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('viaf_url');

        return $validator;
    }
}
