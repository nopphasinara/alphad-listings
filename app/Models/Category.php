<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

class Category extends Model
{
    protected $guarded=[];

    // category parent
    public function parent()
    {
        return Category::find($this->parent_id);
    }

    // category children
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // category listings
    public function listings()
    {
        if ($this->isLeaf()) {
            return $this->hasMany(Listing::class, 'category_id');
        }
        return $this->children()->with('listings')->get();
    }

    // category root
    public function root()
    {
        $root= collect();
        $node = $this;
        while ( ! $node->isMain()) {
            $node = $node->parent();
            $root->prepend($node);
        }
        return $root;
     }

    // category depth
    public function depth()
    {
        return $this->root()->count();
    }

    // main category
    public static function main()
    {
        return Category::where('parent_id', 0);
    }

    // isMain category
    public function isMain()
    {
        return $this->parent_id == 0;
    }

    // isLeaf category
    public function isLeaf()
    {
        return (boolean) ! $this->children()->exists();
    }

}
