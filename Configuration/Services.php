<?php

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Translation\Command\XliffLintCommand;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();

        $services->set(XliffLintCommand::class)
            ->public()
            ->tag('console.command', [
                'command' => 'xliff:lint',
            ]);

};