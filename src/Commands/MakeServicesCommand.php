<?php

namespace RannieOllit\OtherClasses\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeServicesCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a Laravel Service Class.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Service';

    /**
      * Get the stub file for the generator.
      *
      * @return string
      */
      protected function getStub()
      {
          return __DIR__.'/stubs/service.stub';
      }

      /**
       * Get the default namespace for the class.
       *
       * @param  string  $rootNamespace
       * @return string
       */
      protected function getDefaultNamespace($rootNamespace)
      {
        return $rootNamespace.'\\'.config('other-classes.services', 'Services');
      }
}
