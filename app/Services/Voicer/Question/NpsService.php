<?php

namespace App\Services\Voicer\Question;

use App\Models\Voicer\Question;

class NpsService implements QuestionInterface
{
    use QuestionSingleTrait {
        saveAnswer as public saveAnswerTrait;
    }
    private $question;
    private $questionModel;

    public function __construct()
    {
        $this->questionModel = new Question();
    }

    public function mainQuestion($label)
    {
        $this->question = [
            'type' => 'nps',
            'is_required' => 1,
            'label' => $label,
            'order' => 1,
            'user_id' => 1,
            'answers' => $this->defaultOptionsAnswer()
        ];
    }

    public function setAnswer($label)
    {
    }

    public function defaultOptionsAnswer()
    {
        $values = array_fill(1, 10, '');

        return array_map(function ($value, $key) {
            return [
                'type' => 'radio',
                'label' => $key,
                'value' => $key,
                'user_id' => 1
            ];
        }, $values, array_keys($values));
    }

    public function saveAnswer($answer)
    {
        $this->saveAnswerTrait($answer);
        $this->defaultRelatedQuestion();
    }

    private function defaultRelatedQuestion()
    {
        $question = [
            'type' => 'text',
            'is_required' => 1,
            'label' => 'Qual o principal motivo por você ter dado essa nota? Assim, você nos ajuda a continuar melhorando.',
            'order' => 1,
            'user_id' => 1
        ];

        $answer = [
            'type' => 'text',
            'label' => '',
            'user_id' => 1
        ];

        $relatedQuestionModel = $this->questionModel->relatedQuestion()->firstOrCreate($question);
        $relatedQuestionModel->answers()->updateOrCreate($answer);
    }
}
