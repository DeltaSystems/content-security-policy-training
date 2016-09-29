<?php

namespace App\View\Helper;

use Dewdrop\View\Helper\AbstractHelper;

class JsonData extends AbstractHelper
{
    public function direct($id, $data)
    {
        return $this->view->partial(
            'json-data.phtml',
            ['id' => $id, 'jsonData' => $data],
            __DIR__ . '/partials'
        );
    }
}
