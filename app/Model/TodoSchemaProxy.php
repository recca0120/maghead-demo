<?php

namespace App\Model;


use Maghead\Schema\RuntimeSchema;
use Maghead\Schema\RuntimeColumn;
use Maghead\Schema\Relationship\Relationship;
use Maghead\Schema\Relationship\HasOne;
use Maghead\Schema\Relationship\HasMany;
use Maghead\Schema\Relationship\BelongsTo;
use Maghead\Schema\Relationship\ManyToMany;

class TodoSchemaProxy
    extends RuntimeSchema
{

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

    public static $column_hash = array (
      'id' => 1,
      'title' => 1,
      'done' => 1,
    );

    public static $mixin_classes = array (
    );

    public $columnNames = array (
      0 => 'id',
      1 => 'title',
      2 => 'done',
    );

    public $primaryKey = 'id';

    public $columnNamesIncludeVirtual = array (
      0 => 'id',
      1 => 'title',
      2 => 'done',
    );

    public $label = 'Todo';

    public $readSourceId = 'master';

    public $writeSourceId = 'master';

    public $relations;

    public function __construct()
    {
        $this->columns[ 'id' ] = new RuntimeColumn('id',array( 
      'locales' => NULL,
      'attributes' => array( 
          'autoIncrement' => true,
          'renderAs' => 'HiddenInput',
          'widgetAttributes' => array( 
            ),
        ),
      'name' => 'id',
      'primary' => true,
      'unsigned' => true,
      'type' => 'int',
      'isa' => 'int',
      'notNull' => true,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'autoIncrement' => true,
      'renderAs' => 'HiddenInput',
      'widgetAttributes' => array( 
        ),
    ));
        $this->columns[ 'title' ] = new RuntimeColumn('title',array( 
      'locales' => NULL,
      'attributes' => array( 
          'length' => 80,
          'label' => 'Todo',
        ),
      'name' => 'title',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'varchar',
      'isa' => 'str',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'length' => 80,
      'label' => 'Todo',
    ));
        $this->columns[ 'done' ] = new RuntimeColumn('done',array( 
      'locales' => NULL,
      'attributes' => array( 
          'label' => 'Done',
          'default' => false,
        ),
      'name' => 'done',
      'primary' => NULL,
      'unsigned' => NULL,
      'type' => 'boolean',
      'isa' => 'bool',
      'notNull' => NULL,
      'enum' => NULL,
      'set' => NULL,
      'onUpdate' => NULL,
      'label' => 'Done',
      'default' => false,
    ));
    }
}
