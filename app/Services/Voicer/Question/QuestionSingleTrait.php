<?php

namespace App\Services\Voicer\Question;

use App\Models\Voicer\Question;

trait QuestionSingleTrait
{
    private $questionModel;

    public function __construct()
    {
        $this->questionModel = new Question();
    }

    public function save(): Question
    {
        $question = array_except($this->question, 'answers');
        $answers = array_only($this->question, 'answers')['answers'];
        $this->questionModel = $this->questionModel->firstOrCreate($question);
        $this->saveAnswer($answers);

        return $this->questionModel;
    }

    public function saveAnswer($answers)
    {
        if (!array_key_exists(0, $answers)) {
            $answers = [$answers];
        }

        foreach ($answers as $answer) {
            $this->questionModel->answers()->updateOrCreate($answer);
        }
    }
}
