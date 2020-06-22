<?php

use Illuminate\Support\Facades\Route;

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

// global $userData;
// $jsonurl = "https://raw.githubusercontent.com/dwyl/english-words/master/words_dictionary.json"; 
// $json = file_get_contents($jsonurl);

// $userData =$json;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/check', 'spellcontroller@check');

// Route::get('/check', function () {

//     $input = 'hdkcig3yru2y uigqeiuyrqeu yhwquiybkg';
//     //$input = preg_replace('/[^a-z0-9]/i', ' ', $pre);
//     //print_r($input);
//     $file = '../resources/views/pages/users.txt';
//     $data = json_decode(file_get_contents($file));
//     $words = array_keys((get_object_vars($data)));

//     $test = [];
//     $str_arr = explode(" ", $input);  
// //    print_r(json_encode ($str_arr));
//      for($i=0; $i < count($str_arr); $i++){
//         if (!in_array($str_arr[$i], $words)){
//             //array_push($test, $str_arr[$i]);
//             $similar = [];
//             for ($j = 0; $j < count($words); $j++) {
//                 $dist = levenshtein($str_arr[$i],$words[$j]);
//                 if($dist <=2){
//                 array_push($similar, $words[$j]);
//                 }
//             };
//             if(count($similar) > 0){
//                 $finSimilar =[];
//                 while(count($finSimilar) < 3){
//                     array_push($finSimilar, $similar[rand(0,count($similar)-1)]);
//                 }    
//             } else{
//                 $finSimilar = "word unknown";
//             }
//             $content = array("index of word"=>$i,"wrong spelling"=>$str_arr[$i], "possible correction"=>$finSimilar);
//             array_push($test,$content);

//         }     
        
//     }
//     print_r(json_encode ($test));

// //     print_r(json_encode($test));

// //    print_r( json_encode($str_arr));
// //    print_r(levenshtein(' ', 'dfvef'));

//     //print_r(json_encode($test));
   
//     //print_r(count($words));
// //    echo levenshtein('bar','ghr' );
// });


// Route::get('/fill', function(){

//     global $userData;
//     $file = '../resources/views/pages/users.txt';
// //    $userDataDec = json_decode($userData);
//     file_put_contents($file, $userData);
//     print_r('Users added successfully');
//   });