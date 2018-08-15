<?php

namespace App\Controller;

use App\Log;
use App\Model\Brand;

class StatsController extends AbstractController
{
    function getName()
    {
        return 'stats';
    }

    function getData()
    {
        $brandModel = new Brand();

        Log::info(sprintf('Rendering stats action.'), $_GET);

        return [
            'title' => 'Stats',
            'brands' => $brandModel->getStats(),
        ];
    }
}
