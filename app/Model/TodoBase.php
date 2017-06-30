<?php

namespace App\Model;


use Maghead\Runtime\Model;
use Maghead\Schema\SchemaLoader;
use Maghead\Runtime\Result;
use Maghead\Runtime\Inflator;
use Magsql\Bind;
use Magsql\ArgumentArray;
use DateTime;

class TodoBase
    extends Model
{

    const SCHEMA_PROXY_CLASS = 'App\\Model\\TodoSchemaProxy';

    const READ_SOURCE_ID = 'master';

    const WRITE_SOURCE_ID = 'master';

    const TABLE_ALIAS = 'm';

    const SCHEMA_CLASS = 'App\\Model\\TodoSchema';

    const LABEL = 'Todo';

    const MODEL_NAME = 'Todo';

    const MODEL_NAMESPACE = 'App\\Model';

    const MODEL_CLASS = 'App\\Model\\Todo';

    const REPO_CLASS = 'App\\Model\\TodoRepoBase';

    const COLLECTION_CLASS = 'App\\Model\\TodoCollection';

    const TABLE = 'todos';

    const PRIMARY_KEY = 'id';

    const GLOBAL_PRIMARY_KEY = NULL;

    const LOCAL_PRIMARY_KEY = 'id';

    public static $column_names = array (
      0 => 'id',
      1 => 'title',
      2 => 'done',
    );

    public static $mixin_classes = array (
    );

    protected $table = 'todos';

    public $id;

    public $title;

    public $done;

    public static function getSchema()
    {
        static $schema;
        if ($schema) {
           return $schema;
        }
        return $schema = new \App\Model\TodoSchemaProxy;
    }

    public static function createRepo($write, $read)
    {
        return new \App\Model\TodoRepoBase($write, $read);
    }

    public function getKeyName()
    {
        return 'id';
    }

    public function getKey()
    {
        return $this->id;
    }

    public function hasKey()
    {
        return isset($this->id);
    }

    public function setKey($key)
    {
        return $this->id = $key;
    }

    public function removeLocalPrimaryKey()
    {
        $this->id = null;
    }

    public function getId()
    {
        return intval($this->id);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function isDone()
    {
        $value = $this->done;
        if ($value === '' || $value === null) {
           return null;
        }
        return boolval($value);
    }

    public function getAlterableData()
    {
        return ["id" => $this->id, "title" => $this->title, "done" => $this->done];
    }

    public function getData()
    {
        return ["id" => $this->id, "title" => $this->title, "done" => $this->done];
    }

    public function setData(array $data)
    {
        if (array_key_exists("id", $data)) { $this->id = $data["id"]; }
        if (array_key_exists("title", $data)) { $this->title = $data["title"]; }
        if (array_key_exists("done", $data)) { $this->done = $data["done"]; }
    }

    public function clear()
    {
        $this->id = NULL;
        $this->title = NULL;
        $this->done = NULL;
    }
}
