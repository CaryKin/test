<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Log;
use Symfony\Component\Console\Output\ConsoleOutput;

trait OutPut
{

    private $section = false;

    protected function output ($message)
    {

        if (!$this->section) {
            $output = new ConsoleOutput();
            $this->section = $output->section();
        }

        $this->section->writeln($message);
        Log::info("----------{$message}---------------");
    }
}
