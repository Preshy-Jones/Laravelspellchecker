<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class spellcontroller extends Controller
{
    public function check(Request $request){
        $data = $request->json()->all()['Content'];
//        print_r($data);

  //      $pre = 'candace wole joe is how toye return';
        $input = preg_replace('/[^a-z0-9]/i', ' ', $data);
        //print_r($input);
        $file = '../resources/views/pages/users.txt';
        $data = json_decode(file_get_contents($file));
        $words = array_keys((get_object_vars($data)));
    
        $test = [];
        $str_arr = explode(" ", $input);  
    //    print_r(json_encode ($str_arr));
         for($i=0; $i < count($str_arr); $i++){
            if (!in_array($str_arr[$i], $words)){
                //array_push($test, $str_arr[$i]);
                $similar = [];
                for ($j = 0; $j < count($words); $j++) {
                    $dist = levenshtein($str_arr[$i],$words[$j]);
                    if($dist <=2){
                    array_push($similar, $words[$j]);
                    }
                };
                if(count($similar) > 0){
                    $finSimilar = [];
                    while(count($finSimilar) < 3){
                        $pusha = $similar[rand(0,count($similar)-1)];                        
                        if(!in_array($pusha, $finSimilar)){
                            array_push($finSimilar, $pusha);
                        } else{
                        break;
                        }
                    }    
                } else{
                    $finSimilar = "word unknown";
                }
                $content = array("index of word"=>$i,"wrong spelling"=>$str_arr[$i], "possible correction"=>$finSimilar);
                array_push($test,$content);
            }     
        }
        print_r(json_encode ($test));
        

    }
}
