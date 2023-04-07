<?php

namespace App\Console\Commands;

use Illuminate\Foundation\Console\ModelMakeCommand as Command;

class ModelMakeCommand extends Command
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
  
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return "Models";
    }
  
    /**
     * Get the destination class path.
     *
     * @param  string  $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = $this->getNameInput();
        return $this->laravel->databasePath().'/models/'.$name.'.php';
    }
}