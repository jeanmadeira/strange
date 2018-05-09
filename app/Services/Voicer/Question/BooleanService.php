<?php

namespace App\Services\Voicer\Question;

class BooleanService implements QuestionInterface
{
    use QuestionSingleTrait;
    private $question;

    public function mainQuestion($label)
    {
        $this->question = [
            'type' => 'boolean',
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
        return [
            [
                'type' => 'boolean',
                'label' => 'Sim',
                'value' => 1,
                'user_id' => 1
            ],
            [
                'type' => 'boolean',
                'label' => 'Não',
                'value' => 0,
                'user_id' => 1
            ]
        ];
    }
}
