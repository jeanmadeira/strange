<?php

Route::namespace('Respondent')->group(function () {
    Route::get('/nps/home', 'QuestionController@home_web');
    Route::get('/r/{hash}', 'QuestionController@question_web');
});
