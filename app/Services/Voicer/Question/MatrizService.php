<?php

namespace App\Services\Voicer\Question;

class MatrizService implements QuestionInterface
{
    use QuestionComplexTrait;
    private $question;

    public function mainQuestion($label)
    {
        $this->question = [
            'type' => 'label',
            'is_required' => 1,
            'label' => $label,
            'order' => 1,
            'user_id' => 1,
            'answers' => [],
        ];
    }

    public function setAnswer($label)
    {
        $order = isset($this->question['options']) ? (count($this->question['options']) + 1) : 1;

        $this->question['options'][] = [
            'type' => 'matriz',
            'is_required' => 1,
            'order' => $order,
            'label' => $label,
            'user_id' => 1,
            'answers' => $this->defaultOptionsAnswer()
        ];
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
