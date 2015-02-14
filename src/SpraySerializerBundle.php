<?php

namespace Spray\SerializerBundle;

use Spray\SerializerBundle\DependencyInjection\CompilerPass\TaggedSerializerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SpraySerializerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TaggedSerializerCompilerPass());
    }
}
