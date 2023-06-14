<?php

declare(strict_types=1);

namespace JsonClassGenerator\ClassGenerator;

use JsonClassGenerator\ClassGenerator\CamelCase\CamelCaseJsonSerializableGenerator;
use JsonClassGenerator\ClassGenerator\Contract\JsonSerializableGeneratorInterface;

class JsonSerializableGeneratorFactory
{
    public function create(string $case): JsonSerializableGeneratorInterface
    {
        return new CamelCaseJsonSerializableGenerator();
    }
}
