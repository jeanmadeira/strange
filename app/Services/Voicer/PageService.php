<?php

namespace App\Services\Voicer;

use App\Models\Voicer\Page;
use App\Models\Voicer\Summary;
use Illuminate\Database\Eloquent\Collection;

class PageService
{
    /**
     * @param array $data
     * @param Summary|null $summary
     * @param Collection| $questions
     * @param array $pageQuestion Usado na tabela relacional
     * @return Page
     * @throws \Throwable
     */
    public function updateOrCreate(array $data = [], Summary $summary = null, Collection $questions = null, array $pageQuestion = []): Page
    {
        throw_if(empty($data), new \Exception('Precisa do parametro: $data'));
        throw_if(is_null($summary), new \Exception('Precisa do parametro: $summary'));

        $page = $summary->pages()->updateOrCreate($data);

        if (!is_null($questions)) {
            throw_if(empty($pageQuestion), new \Exception('Precisa do parametro: $pageQuestion'));
            $page->questions()->attach($questions, $pageQuestion);
        }

        return $page;
    }
}
