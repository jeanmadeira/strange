<?php

namespace App\Services\Voicer\Question;

use App\Models\Voicer\Question;

trait QuestionComplexTrait
{
    private $questionModel;
    private $relatedQuestionModel;

    public function __construct()
    {
        $this->questionModel = new Question();
    }

    public function save()
    {
        $question = array_except($this->question, ['answers', 'options']);
        $this->questionModel = $this->questionModel->firstOrCreate($question);
        $this->saveRelatedQuestion();
    }

    private function saveRelatedQuestion()
    {
        $questionRelated = array_only($this->question, 'options')['options'];

        foreach ($questionRelated as $question) {
            $answers = array_only($question, 'answers')['answers'];
            $question = array_except($question, ['answers']);
            $this->relatedQuestionModel = $this->questionModel->relatedQuestion()->firstOrCreate($question);
            $this->saveAnswer($answers);
        }
    }

    public function saveAnswer($answers)
    {
        if (!array_key_exists(0, $answers)) {
            $answers = [$answers];
        }

        foreach ($answers as $answer) {
            $this->relatedQuestionModel->answers()->updateOrCreate($answer);
        }
    }
}
