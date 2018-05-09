<?php

namespace App\Services\Voicer\Question;

class FeelingService implements QuestionInterface
{
    use QuestionSingleTrait;
    private $question;

    public function mainQuestion($label)
    {
        $this->question = [
            'type' => 'feeling',
            'is_required' => 1,
            'label' => $label,
            'order' => 1,
            'user_id' => 1,
            'answers' => $this->defaultOptionsAnswer(),
        ];
    }

    public function setAnswer($label)
    {
    }

    public function defaultOptionsAnswer()
    {
        return [
            [
                'type' => 'radio',
                'label' => 'Muito Insatisfeito',
                'value' => 'Muito Insatisfeito',
                'user_id' => 1
            ],
            [
                'type' => 'radio',
                'label' => 'Insatisfeito',
                'value' => 'Insatisfeito',
                'user_id' => 1
            ],
            [
                'type' => 'radio',
                'label' => 'Satisfeito',
                'value' => 'Satisfeito',
                'user_id' => 1
            ],
            [
                'type' => 'radio',
                'label' => 'Muito Satisfeito',
                'value' => 'Muito Satisfeito',
                'user_id' => 1
            ]
        ];
    }
}
