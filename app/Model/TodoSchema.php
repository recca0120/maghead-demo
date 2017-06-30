<?php

namespace App\Model;

use Maghead\Schema\DeclareSchema;

class TodoSchema extends DeclareSchema
{
    public function schema()
    {
        $this->column('title')
            ->varchar(80)
            ->label('Todo');

        $this->column('done')
            ->boolean()
            ->label('Done')
            ->default(false);
    }
}
