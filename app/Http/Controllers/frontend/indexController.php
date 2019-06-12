<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class IndexController extends Controller
{
    public function index(){
    	// $url='https://vsbg.vip/feed/';
        // $lines_array=file($url);

        // $lines_string=implode('',$lines_array);
         
        // $xml = simplexml_load_string($lines_string);
        // $data=$xml->xpath('//channel/item');
        // $data=array_shift($data);
     //    return view('master',['data' => $data]);
        include 'public/simple_html_dom.php';
        $html = file_get_html('http://www.vsbg.vip/');
        // Find all images 
        $data=array();
        $url='https://vsbg.vip/feed/';
        $lines_array=file($url);

        $lines_string=implode('',$lines_array);
         
        $xml = simplexml_load_string($lines_string);
        $content=$xml->xpath('//channel/item');
        //get Image
        foreach($html->find('img') as $element) 
        {
            array_push($data,$element->{'data-src'});
        }
        foreach ($data as $key => $value) {
            if(empty($value)){
                unset($data[$key]);
            }
        }
        $slide=['https://tienich.xyz/files/images/blog/5c72b68e11418-33359188_2120238024932523_8022265070815805440_o.jpg','https://vngirlplus.jweb.vn/uploads/vngirlplus/images/Untitled-1-02.jpg'];
      //  unset($student['08T1015']);
        return view('master',['data' => $data,'content' => $content,'slide' => $slide]);
    }
}
