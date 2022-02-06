<?php


namespace App\classes;


class Blog
{
    protected $blog;
    public function getAllBlog(){
        return [
          0=>[
              'title' =>'A new Blog',
              'description'=>'Blog Description',
              'author' =>'tarok',
              'image' =>'a2.jpg'
          ],
            1=>[
                'title' =>'Another Blog',
                'description'=>'Blog Description',
                'author' =>'Rubel Khan',
                'image' =>'a3.jpg'
            ],
            2=>[
                'title' =>'About bangladesh',
                'description'=>'Blog Description',
                'author' =>'Abul',
                'image' =>'a4.jpg'
            ]
        ];
    }

}