<?php

namespace App\Http\Utilities;

class Category
{

    public static function main() {
        return \App\Models\Category::main()->get();
    }

    public static function main_id() {
        return \App\Models\Category::main()->get(['id']);
    }

    public static function sub_categories(\App\Models\Category $category) {
        return $category->children()->get();
    }

}