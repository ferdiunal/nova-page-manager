<?php

namespace OptimistDigital\NovaPageManager;

use Illuminate\Http\Request;
use OptimistDigital\NovaPageManager\Core\TemplateTypes;

class Template
{
    public static $id = '';
    public static $name = '';
    public static $type = TemplateTypes::PAGE;

    protected $resource = null;

    public function __construct($resource = null)
    {
        $this->resource = $resource;
    }

    public function fields(Request $request)
    {
        return [];
    }

    public function seoFields(Request $request)
    {
        return true;
    }
}
