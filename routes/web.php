<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return '<a href="/1"><button type="submit"><h1>Somar números</h1></button></form></a>   <a href="/3"><button type="submit"><h1>Calcular Imc</h1></button></a>  <a href="/2"><button type="submit"><h1>Quadrado do número</h1></button></a> </form>';
});


Route::get('/1', function () {
    return '<h1>Somar números</h1> <form action="numero" method="get"><input type="number" name="numero1"/> <b>+</b> <input type="number" name="numero2"/> <button type="submit">Salvar texto</button></form>   <a href="/3"><button type="submit">Calcular Imc</button></a>  <a href="/2"><button type="submit">Quadrado do número</button></a> </form>';
});

Route::get('numero', 'Controller@numero');



Route::get('/2', function () {
    return '<h1>O quadrado do número:</h1><form action="quadrado" method="get"><input type="number" name="numero"/>  <button type="submit">Salvar texto</button> </form>';
});

Route::get('quadrado', 'Controller@quadrado');



Route::get('/3', function () {
    return '<h1>Calcular IMC</h1><form action="imc" method="get"><label>Nome:</label><input type="text" name="nome"/>  <label>Peso:</label><input type="number" name="peso"/>  <label>Altura(cm):</label><input type="number" name="altura"/>  <label> Idade:</label><input type="number" name="idade"/>  <label>Sexo:</label><input type="text" name="sexo"/>  <button type="submit">Salvar texto</button></form>';
});

Route::get('imc', 'Controller@imc');