<?php

namespace App\Http\Controllers\Respondent;

use App\Http\Controllers\Controller;
use App\Models\Voicer\Page;

class QuestionController extends Controller
{
    private function query()
    {
        return Page::query()->with(['questions.answers', 'questions.relatedQuestion.answers'])->join('voicer_summary', 'voicer_page.summary_id', '=', 'voicer_summary.id')->join('voicer_collectors', 'voicer_summary.id', '=', 'voicer_collectors.summary_id')->where('voicer_collectors.hash', '=', '99d0e45f-1b53-46d6-bafb-8687a441be0e')->get()->toArray();
    }

    public function home_web()
    {
        return view('main', [
            'state' => [
                'path' => '/nps/home',
                'page' => $this->query()
            ]
        ]);
    }

    public function home_api()
    {
        return response()->json([
            'state' => [
                'path' => '/nps/home',
                'page' => $this->query()
            ]
        ]);

    }

    public function question_web()
    {
        return view('main', [
            'state' => [
                'path' => '/r/99d0e45f-1b53-46d6-bafb-8687a441be0e',
                'page' => $this->query()
            ]
        ]);
    }

    public function question_api()
    {
        return response()->json([
            'path' => '/r/99d0e45f-1b53-46d6-bafb-8687a441be0e',
            'page' => $this->query()
        ]);
    }
}
