<?php

use App\Models\Voicer\Question;
use App\Models\Voicer\Summary;
use App\Services\Voicer\PageService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class PageSeeder extends Seeder
{
    const DEFAULT_PAGES = [
        [
            'title' => 'Primeira pagina',
            'description' => null,
            'order' => 1,
            'is_random' => 0,
            'user_id' => 1,
            'questions' => [1, 2],
            'page_question' => ['order' => 1, 'has_conditional' => 0, 'user_id' => 1]
        ],
        [
            'title' => 'Segunda pagina',
            'description' => null,
            'order' => 2,
            'is_random' => 0,
            'user_id' => 1,
            'questions' => [3],
            'page_question' => ['order' => 2, 'has_conditional' => 0, 'user_id' => 1]
        ],
        [
            'title' => 'Terceira pagina',
            'description' => null,
            'order' => 3,
            'is_random' => 0,
            'user_id' => 1,
            'questions' => [8],
            'page_question' => ['order' => 3, 'has_conditional' => 0, 'user_id' => 1]
        ],
        [
            'title' => 'Quarta pagina',
            'description' => null,
            'order' => 4,
            'is_random' => 0,
            'user_id' => 1,
            'questions' => [13],
            'page_question' => ['order' => 4, 'has_conditional' => 0, 'user_id' => 1]
        ],
        [
            'title' => 'Quinta pagina',
            'description' => null,
            'order' => 5,
            'is_random' => 0,
            'user_id' => 1,
            'questions' => [20, 21, 22],
            'page_question' => ['order' => 5, 'has_conditional' => 0, 'user_id' => 1]
        ],
        [
            'title' => 'Sexta pagina',
            'description' => null,
            'order' => 6,
            'is_random' => 0,
            'user_id' => 1,
            'questions' => [23, 24, 25, 29, 40, 45],
            'page_question' => ['order' => 6, 'has_conditional' => 0, 'user_id' => 1]
        ]
    ];

    public function run()
    {
        $this->createPage();
    }

    private function createPage(): Collection
    {
        $pageService = new PageService();
        $summary = Summary::orderBy('created_at', 'desc')->first();

        return collect(array_map(function ($page) use ($pageService, $summary) {
            $question = Question::whereIn('id', $page['questions'])->get();
            return $pageService->updateOrCreate(array_except($page, ['questions', 'page_question']), $summary, $question, $page['page_question']);
        }, self::DEFAULT_PAGES));
    }
}
