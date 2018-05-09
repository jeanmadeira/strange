<?php

namespace App\Services\Voicer;

use App\Models\Voicer\Summary;
use App\Models\Voicer\Survey;
use Illuminate\Support\Collection;

class SummaryService
{
    /**
     * SummaryService constructor.
     * @param array $data
     * @param Survey|null $survey
     * @throws \Throwable
     */
    public function __construct(array $data = [], Survey $survey = null)
    {
        if (!empty($data) || !is_null($survey)) {
            $this->updateOrCreate($data, $survey);
        }
    }

    /**
     * @param array $data
     * @param Survey|null $survey
     * @return Collection of Summary
     * @throws \Throwable
     */
    public function updateOrCreate(array $data = [], Survey $survey = null): Collection
    {
        throw_if(empty($data) && is_null($survey), new \Exception('Parâmetros inválidos'));

        if (!$data) {
            $data = array_only($survey->toArray(), ['name', 'title', 'user_id']);
            $data['survey_id'] = $survey->id;
        }

        if (count($data) > 1) {
            $data = [$data];
        }

        return collect(array_map(function ($data) use ($survey) {
            return Summary::updateOrCreate($data);
        }, $data));
    }
}
