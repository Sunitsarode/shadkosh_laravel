<?php

namespace App\Repositories;

use App\Models\Word;
use App\Repositories\BaseRepository;

class WordRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'word',
        'gender',
        'plurals'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Word::class;
    }
}
