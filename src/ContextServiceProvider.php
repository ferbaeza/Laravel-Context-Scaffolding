<?php

namespace Baezeta\Console;

use Illuminate\Support\ServiceProvider;
use Baezeta\Console\Scaffolding\Traits\ScaffoldingTrait;
use Baezeta\Console\Scaffolding\Context\CreateScaffoldind;
use Baezeta\Console\Scaffolding\Context\Commands\CreateFolderContext;
use Baezeta\Console\Scaffolding\Context\Commands\SeleccionarContextos;

class ContextServiceProvider extends ServiceProvider
{
    use ScaffoldingTrait;
    /**
     * Registrar los servicios de la aplicación
     * @return void
     */
    protected function registerServices()
    {
        $this->registerCommands();
    }
 
    /**
     * Registrar los comandos de la aplicación
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateScaffoldind::class,
                CreateFolderContext::class,
                SeleccionarContextos::class,
            ]);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerServices();
        if($this->isFolder(base_path() . "/src") == false){
            $this->crearDirectorio(base_path() . "/src");
        }
    }

}
