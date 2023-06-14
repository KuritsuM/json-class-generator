<?php

declare(strict_types=1);

namespace JsonClassGenerator\ClassGenerator\CamelCase;

use JsonClassGenerator\ClassGenerator\Contract\JsonSerializableGeneratorInterface;

class CamelCaseJsonSerializableGenerator implements JsonSerializableGeneratorInterface
{
    public function parse(array $json): array
    {
        return [];
    }
}
