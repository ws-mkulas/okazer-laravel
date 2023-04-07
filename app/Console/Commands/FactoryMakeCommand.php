<?php

namespace App\Console\Commands;

use Illuminate\Database\Console\Factories\FactoryMakeCommand as Command;

class FactoryMakeCommand extends Command
{
    /**
     * Get the root namespace for the class.
     *
     * @return string
     */
    protected function rootNamespace()
    {
        return "Models";
    }
}

