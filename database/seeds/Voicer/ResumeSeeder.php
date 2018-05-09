<?php

use App\Models\Voicer\Survey;
use App\Services\Voicer\SummaryService;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    const DEFAULT_SURVEY = [
        'name' => 'Pesquisa NPS (Nova)',
        'title' => 'Pesquisa NPS',
        'user_id' => 1
    ];
    private $survey;

    /**
     * @throws Throwable
     */
    public function run()
    {
        $this->createSurvey();
        $this->createSummary();
    }

    private function createSurvey()
    {
        $this->survey = Survey::firstOrCreate(self::DEFAULT_SURVEY);
    }

    /**
     * @throws Throwable
     */
    private function createSummary()
    {
        new SummaryService([], $this->survey);
    }
}
