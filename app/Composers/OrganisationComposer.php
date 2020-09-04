<?php

namespace App\Composers;

use \App\Organisation;
use Illuminate\View\View;

class OrganisationComposer
{
        public function compose(View $view){
                $view->with('org', Organisation::orderBy('name')->get());
        }
}