<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function add(Request $request) { // Добавить героя

        $name_hero = $request->input('name_hero');
        $age = $request->input('age');
        $universe = $request->input('universe');
        $ability = $request->input('ability');
        $main_villain = $request->input('main_villain');

        $hero = new Hero();
        $hero->name_hero = $name_hero;
        $hero->age = $age;
        $hero->universe = $universe;
        $hero->ability = $ability;
        $hero->main_villain = $main_villain;
        $hero->save();

        return response()->json($hero, 201);
    }

    public function get($hero_id) { // Посмотреть героя по id

        $hero = Hero::find($hero_id);

        return response()->json($hero, 200);
    }

    public function edit(Request $request, $hero_id) { // Отредактировать героя по id

        $name_hero = $request->input('name_hero');
        $age = $request->input('age');
        $universe = $request->input('universe');
        $ability = $request->input('ability');
        $main_villain = $request->input('main_villain');

        $hero = Hero::find($hero_id);
        $hero->name_hero = $name_hero;
        $hero->age = $age;
        $hero->universe = $universe;
        $hero->ability = $ability;
        $hero->main_villain = $main_villain;
        $hero->save();

        return response()->json($hero, 200);
    }

    public function delete($hero_id) { // Удалить героя по id

        $hero = Hero::find($hero_id);
        $hero->delete();

        return response()->json("Удалена задача с id " . $hero_id, 200);
    }

    public function showAll() { // Посмотреть всех героев

        $hero = Hero::all();

        return response()->json($hero, 200);
    }
}
