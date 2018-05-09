<?php

namespace App\Services\Voicer\Question;

class NpsProductService implements QuestionInterface
{
    use QuestionComplexTrait {
        saveAnswer as public saveAnswerTrait;
    }
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

    public function defaultRelatedQuestion()
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

        $relatedQuestionModel = $this->relatedQuestionModel->relatedQuestion()->firstOrCreate($question);
        $relatedQuestionModel->answers()->updateOrCreate($answer);
    }

    public function setAnswer($label)
    {
        $order = isset($this->question['options']) ? (count($this->question['options']) + 1) : 1;

        $this->question['options'][] = [
            'type' => 'npsProduct',
            'is_required' => 1,
            'order' => $order,
            'label' => $label,
            'user_id' => 1,
            'answers' => $this->defaultOptionsAnswer()
        ];
    }

    public function saveAnswer($answer)
    {
        $this->saveAnswerTrait($answer);
        $this->defaultRelatedQuestion();
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
}
