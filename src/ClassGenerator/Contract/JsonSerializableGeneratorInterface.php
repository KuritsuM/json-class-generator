<?php

declare(strict_types=1);

namespace JsonClassGenerator\ClassGenerator\Contract;

interface JsonSerializableGeneratorInterface
{
    /**
     * @param array $json
     * @return array abstract syntax tree as array
     */
    public function parse(array $json): array;
}
