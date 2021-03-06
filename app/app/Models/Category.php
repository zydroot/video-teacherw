<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Houdunwang\Arr\Arr;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree, AdminBuilder;

    protected $fillable = ['parent_id', 'title', 'order'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        /*$this->setParentColumn('pid');
        $this->setOrderColumn('sort');
        $this->setTitleColumn('name');*/
    }


}
