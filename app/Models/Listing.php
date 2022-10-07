<?php 
    namespace App\Models;

    class Listing{
        public static function all(){
            return  [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus iure quia, labore quisquam suscipit dolor rerum eveniet necessitatibus, laboriosam dolore cum laborum eius officiis dolorum reprehenderit vel nulla! Non, esse!'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing two',
                    'description' =>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus iure quia, labore quisquam suscipit dolor rerum eveniet necessitatibus, laboriosam dolore cum laborum eius officiis dolorum reprehenderit vel nulla! Non, esse!'
                ]
                ];
        }
    }