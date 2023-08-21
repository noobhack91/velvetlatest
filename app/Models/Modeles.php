<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
class Modeles extends Model
{
    use HasFactory;
    protected $table="models";

    public function get_location($street_address){

        if($street_address){

        $page = Page::where('page_name',$street_address)->first();
        if(isset($page) && !empty($page)){
            return $page->location;
        }
            return"";
        }
        return"";
    }

}
