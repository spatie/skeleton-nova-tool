<?php

namespace Spatie\TailTool\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\TailTool\File;
use Illuminate\Support\Facades\File as IlluminateFile;
use Symfony\Component\Finder\SplFileInfo;
use Illuminate\Routing\Controller;

class ToolController extends Controller
{
    public function index()
    {
        return 'Hello world!';
    }
}
