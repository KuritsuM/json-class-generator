<?php

declare(strict_types=1);

namespace JsonClassGenerator\ClassGenerator\CamelCase;

use JsonClassGenerator\ClassGenerator\Contract\ClassFieldGeneratorInterface;

class CamelCaseClassFieldGenerator implements ClassFieldGeneratorInterface
{
    public function parse(array $json): array
    {
        return [];
    }
}
