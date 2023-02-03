<?php

namespace App\Http\view;
use App\Models\Category;
use Illuminate\View\View;

Class enteteComposer{

    public function compose(View $view){

        $categoryall = Category::where('isActivate',1)->get();
        $view->with("categoryall", $categoryall);
    }

}


?>