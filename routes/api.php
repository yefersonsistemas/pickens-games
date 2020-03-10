<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('question', 'QuestionController@question'); //lista de las preguntas para la trivia
Route::post('register/quizz', 'ParticipantQuizzController@participant'); //registro del usurio en la trivia
Route::post('register/memory', 'ParticipantMemoryController@participant'); //registro del usurio en memoria
Route::post('register/hangman', 'ParticipantHangmanController@participant'); //registro del usurio en el ahorcado
Route::post('register/tictactoe', 'ParticipantQTictactoeController@participant'); //registro del usurio en la vieja