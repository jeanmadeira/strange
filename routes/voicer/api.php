<?php

Route::namespace('Respondent')->group(function () {
    Route::get('/nps/home', 'QuestionController@home_api');
    Route::get('/r/{hash}', 'QuestionController@question_api');
});
