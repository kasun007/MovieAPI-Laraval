<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieAPIController extends Controller
{

    public function movieInfo()
    {

 // Hardcoded JSON string
$json_string ='[    {       "weight":{          "imperial":"7  -  10",          "metric":"3 - 5"       },       "id":"abys",       "name":"The Shawshank Redemption",       "genere":"Horror",       "story":"Over the course of several years, two convicts form a friendship, seeking consolation and, eventually, redemption through basic compassion..",       "rating":5,       "experimental":0,       "isBoxOffice":0,       "image":{          "id":"0XYvRd7oD",          "width":1204,          "height":1445,          "url":"https://www.myapifilms.com/imdb/image/poster/g9seio9edd9p7nm76ntimguch1.jpg"       }    },    {       "weight":{          "imperial":"7  -  10",          "metric":"3 - 5"       },       "id":"aqua",       "name":"Aqua Man",       "genere":"Horror",       "story":"Arthur Curry, the human-born heir to the underwater kingdom of Atlantis, goes on a quest to prevent a war between the worlds of ocean and land.",       "rating":5,       "isBoxOffice":0,       "image":{          "id":"0XYvRd7oD",          "width":1204,          "height":1445,          "url":"https://m.media-amazon.com/images/M/MV5BOTk5ODg0OTU5M15BMl5BanBnXkFtZTgwMDQ3MDY3NjM@._V1_UY209_CR0,0,140,209_AL_.jpg"       }    } ]';

    // Remove whitespaces and slashes from the JSON string
    $json_string = str_replace(['\\', '  ', '    '], ['', '', ''], $json_string);
    
    // Return the JSON response
    return response()->json(json_decode($json_string));
    }
}    
