<?php
/*
 * This file is part of the FourCms Admin package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FourCms\Admin\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;
use Longman\LaravelMultiLang\Models\Localizable;
use Longman\Platfourm\Category\Models\Eloquent\Category as BaseCategory;
use Longman\Platfourm\Database\Eloquent\ActionLog\ActionLogTrait;
use Longman\Platfourm\Database\Eloquent\EntityLock\EntityLockTrait;
use Longman\Platfourm\Database\Eloquent\Traits\ArrayAsPrimary;
use Longman\Platfourm\Database\Eloquent\Traits\UuidForPrimary;

class Category extends BaseCategory
{
    use ActionLogTrait, SoftDeletes, Localizable, EntityLockTrait,
        UuidForPrimary, ArrayAsPrimary, NodeTrait;

    protected $fillable = ['title', 'lang', 'parent_id'];

    protected $searchableFields = ['title'];

    protected $sortableFields = ['title'];

    public $incrementing = false;

    protected $primaryKey = ['id', 'lang'];

}
