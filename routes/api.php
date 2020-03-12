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
//--------------------------todos los get--------------------------//
Route::get('question', 'QuestionController@question');        //lista de las preguntas para la trivia
Route::get('ranking/quizz', 'QuizzController@index');         //lista de las preguntas para la trivia
Route::get('ranking/memory', 'MemoryController@index');       //lista de las preguntas para la trivia
Route::get('ranking/hangman', 'HangmanController@index');     //lista de las preguntas para la trivia
Route::get('ranking/tictactoe', 'TictactoeController@index'); //lista de las preguntas para la trivia

//--------------------------todos los post--------------------------//
Route::post('answers', 'QuestionController@answers');                   //post para enviar la respuestas de la trivia
Route::post('register/quizz', 'QuizzController@participant');           //registro del usurio en la trivia
Route::post('register/memory', 'MemoryController@participant');         //registro del usurio en memoria
Route::post('register/hangman', 'HangmanController@participant');       //registro del usurio en el ahorcado
Route::post('register/tictactoe', 'TictactoeController@participant');   //registro del usurio en la vieja