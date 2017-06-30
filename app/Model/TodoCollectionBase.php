<?php

namespace App\Model;


use Maghead\Runtime\Collection;

class TodoCollectionBase
    extends Collection
{

    const SCHEMA_PROXY_CLASS = 'App\\Model\\TodoSchemaProxy';

    const MODEL_CLASS = 'App\\Model\\Todo';

    const TABLE = 'todos';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const PRIMARY_KEY = 'id';

    public static function createRepo($write, $read)
    {
        return new \App\Model\TodoRepoBase($write, $read);
    }

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \App\Model\TodoSchemaProxy;
    }
}
