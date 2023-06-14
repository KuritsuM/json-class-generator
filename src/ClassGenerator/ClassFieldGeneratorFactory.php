<?php

declare(strict_types=1);

namespace JsonClassGenerator\ClassGenerator;

use JsonClassGenerator\ClassGenerator\CamelCase\CamelCaseClassFieldGenerator;
use JsonClassGenerator\ClassGenerator\Contract\ClassFieldGeneratorInterface;

class ClassFieldGeneratorFactory
{
    public function create(string $case): ClassFieldGeneratorInterface
    {
        return new CamelCaseClassFieldGenerator();
    }
}
