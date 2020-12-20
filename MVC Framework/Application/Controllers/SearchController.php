<?php

namespace Application\Controllers;

use Application\Models\PostGroupModel;
use Application\Models\PostModel;
use Application\Models\UserProfileModel;
use Core\BaseController;

class SearchController extends BaseController
{
    public function search(){
        
        $this->render(DS . "Searchs" . DS . "search");
    }
}
