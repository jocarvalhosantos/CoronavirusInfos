<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoronaVirusDataController extends Controller
{
    /** @var array */
    public $data;

    public function __construct()
    {
        $stats = file_get_contents("https://www.worldometers.info/coronavirus/");
        $stats = explode('<table', $stats);
        $stats = explode("</table>", $stats[1]);
        $str = "<html lang='en'><body><table". $stats[0]."</table></body></html>";
        $str = str_replace("style=", "class=", $str); // fix can't be loaded when DOMDocument->loadHTML();
        $str = str_replace(",", "", $str);
        $str = str_replace("+", "", $str);
        $dom = new \DOMDocument;
        @$dom->loadHTML($str);
        $x = new \DOMXpath($dom);
        $a = 0;
        $array = [];
        $i = 0;
        foreach($x->query('//td') as $td){
            $str = $td->textContent;
            if($str == "Total:") break;
            if ($str == ' ') break;
            $array[$i][] = $str;
            $a++;
            if($a === 9) {
                $a = 0;
                $i++;
            }
        }
        $this->data = [];
        foreach($array as $val) {
            if(strlen($val[3]) == 0) $val[3] = 0; // fix 0 is ""
            if(strlen($val[5]) == 0) $val[5] = 0;
            
            $val[1] = str_replace(" ", "", $val[1]); // fix non numeric integer
            $val[3] = str_replace(" ", "", $val[3]);
            $val[5] = str_replace(" ", "", $val[5]);
            $val[2] = str_replace(" ", "", $val[2]);
            $val[4] = str_replace(" ", "", $val[4]);
            $this->data[strtolower($val[0])] = [$val[1], $val[3], $val[5], $val[2], $val[4]];
        }
    }

   

    public function getCases(Request $country) : int {
        return $this->data[strtolower($country)][0];
    }

    public function getDeaths(Request $country) : int {
        return $this->data[strtolower($country)][1];
    }

    public function getRecovered(Request $country) : int {
        return $this->data[strtolower($country)][2];
    }

    public function getTodayCases(Request $country) : int {
        return $this->data[strtolower($country)][3];
    }

    public function getTodayDeaths(Request $country) : int {
        return $this->data[strtolower($country)][4];
    }

    public function getAllCases() : int {
        $cases = 0;
        foreach($this->data as $val) {
            $cases += $val[0];
        }
        return $cases;
    }

    public function getAllTodayCases() : int {
        $todayCases = 0;
        foreach($this->data as $val) {
            if (!is_numeric($val[3])) {
                continue;
            }
            else{
                $todayCases += $val[3];
            }
        }
        return $todayCases;
    }

    public function getAllTodayDeaths() : int {
        $todayDeaths = 0;
        foreach($this->data as $val) {
            if (!is_numeric($val[4])) {
                continue;
            }
            else{
                $todayDeaths += $val[4];
            }
        }
        return $todayDeaths;
    }

    public function getAllDeaths() : int {
        $deaths = 0;
        foreach($this->data as $val) {
            if (!is_numeric($val[1])) {
                continue;
            }
            else{
                $deaths += $val[1];
            }
        }
        return $deaths;
    }

    public function getAllRecovered() : int {
        $recovered = 0;
        foreach($this->data as $val) {
            $recovered += $val[2];
        }
        return $recovered;
    }

    public function getAll(Request $country) : array {
        $country = strtolower($country);
        $a = [];
        $a[] = $this->getCases($country);
        $a[] = $this->getDeaths($country);
        $a[] = $this->getRecovered($country);
        return $a;
    }

    public function getCountryCases() : array {
        $a = [];
        foreach($this->data as $key => $val) {
            $a[] = $key;
        }
        return $a;
    }


    public function getAllDataFromCountry(Request $country){
        $dados['allCases'] = $this->data[strtolower($country->country)][0];
        $dados['allDeaths'] = $this->data[strtolower($country->country)][1];
        $dados['allRecovered'] = $this->data[strtolower($country->country)][2];
        $dados['todayCases'] = $this->data[strtolower($country->country)][3];
        $dados['todayDeaths'] = $this->data[strtolower($country->country)][4];
        return $dados;
    }

    public function getAllDataFromWorld(){
        $dados['allCases'] = $this->getAllCases();
        $dados['allTodayCases'] = $this->getAllTodayCases();
        $dados['allTodayDeaths'] = $this->getAllTodayDeaths();
        $dados['allDeaths'] = $this->getAllDeaths();
        $dados['allRecovered'] = $this->getAllRecovered();
        $dados['all'] = $this->getAll();
        return $dados;
    }
}


// <?php
// require_once "CoronavirusDataAPI.php";

// $covid = new CoronavirusDataAPI;

// // echo $covid->getCases("Brazil");

// echo $covid->getCases('Brazil');
// echo '<br>';
// echo $covid->getDeaths('Brazil');

// // echo $covid->getDeaths("Italy");

// // echo $covid->getRecovered("Spain");

// // echo $covid->getTodayCases("Singapore");

// // echo $covid->getTodayDeaths("China");

// // echo $covid->getAllCases();

// // echo $covid->getAllDeaths();

// // echo $covid->getAllRecovered();

// // echo $covid->getAllTodayCases();

// // echo $covid->getAllTodayDeaths();

// // var_dump($covid->getAll("Malaysia"));

// // var_dump($covid->getCountryCases());

