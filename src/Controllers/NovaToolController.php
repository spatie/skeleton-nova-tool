<?php

namespace Spatie\:tool_name\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Spatie\Backup\BackupDestination\Backup;
use Spatie\Backup\BackupDestination\BackupDestination;
use Spatie\Backup\Helpers\Format;
use Spatie\NovaTool\File;
use Spatie\NovaTool\Jobs\CreateBackupJob;
use Spatie\NovaTool\Rules\BackupDisk;
use Spatie\NovaTool\Rules\PathToZip;

class NovaToolController extends ApiController
{
    public function index(Request $request)
    {
        return $this->respondSuccess();
    }
}