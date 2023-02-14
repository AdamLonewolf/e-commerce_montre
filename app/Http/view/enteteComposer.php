<?php

namespace App\Http\view;
use App\Models\Category;
use Illuminate\View\View;

Class enteteComposer{

    public function compose(View $view){

        $categoryall = Category::where('isActivate',1)->get();
        // $categoryall = Category::where('isActivate', 1)->where('pere_category_id')->get();
        // $categoryall = Category::where('isActivate', 1)->whereNull('pere_category_id')->get();
        // $tableau = ['isActivate' => 1, 'pere_category_id', null];
        // $categoryall = Category::where($tableau)->get();
        $view->with("categoryall", $categoryall);
    }

}


?>