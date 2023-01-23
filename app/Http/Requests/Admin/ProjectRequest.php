<?php

namespace App\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class ProjectRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'url' => 'url'
        ];
    }

    public function rulesForUpdate()
    {
        return [
            'url' => 'url'
        ];
    }
}
