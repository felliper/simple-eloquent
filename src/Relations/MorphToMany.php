<?php

namespace Volosyuk\SimpleEloquent\Relations;

use Illuminate\Database\Eloquent\Relations\MorphToMany as BaseMorphToMany;

/**
 * Class MorphToManyWithSimple
 * @package Volosyuk\SimpleEloquent
 */
class MorphToMany extends BaseMorphToMany
{
    use Relation, Pivot;

    /**
     * Set the constraints for an eager load of the relation.
     *
     * @param  array  $models
     * @return void
     */
    public function addEagerConstraintsSimple(array $models)
    {
        parent::addEagerConstraints($models);
    }
}
