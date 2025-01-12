<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Menu extends Model
{
    protected $guarded = ['id'];
    // protected $table = 'post_menus';
    // public static function all()
    // {
    //     return [
    //         [
    //             'id' => '1',
    //             'slug' => 'aaaa-aa',
    //             'title' => 'aaaaa',
    //             'author' => 'bbbbb',
    //             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus minima laborum architecto dolorem, rerum voluptatem similique reprehenderit saepe officiis. Atque illum ut, delectus magni facere tenetur similique quam pariatur.'
    //         ],
    //         [
    //             'id' => '2',
    //             'slug' => 'aaaa-aab',
    //             'title' => 'aaaaa2',
    //             'author' => 'bbbbb2',
    //             'body' => '2Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus minima laborum architecto dolorem, rerum voluptatem similique reprehenderit saepe officiis. Atque illum ut, delectus magni facere tenetur similique quam pariatur.'
    //         ]
    //     ];
    // }
    // public static function find($slug): array
    // {
    //     // return Arr::first(static::all(), function ($menu) use ($slug) {
    //     //     return $menu['slug'] == $slug;
    //     // });
    //     $menu = Arr::first(static::all(), fn($menu) => $menu['slug'] == $slug);

    //     if (!$menu) {
    //         \abort(404);
    //     }
    //     return $menu;
    // }
}
