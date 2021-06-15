<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    // ten bang
    protected $table = "classroom";
    
    // cac cot duoc gan hang loat
    // gia su them mot lop vao table -> dung create method de them 1 ban ghi vao table
    // create method co doi so la mot mang chua cac gia tri voi cac key la ten cac cot
    // neu cac cot duoc liet ke trong thuoc tinh fillable thi no se duoc gan hang loat
    // neu khong phai gan thu cong : a->x = x
    // doi lap voi fillable la guarded
    // neu 1 cot duoc liet ke trong guarded no se khong duoc gan tu dong
    // neu guarded = [] tat ca cac cot se duoc gan tu dong
    // neu fillable = [] tat ca cac cot phai gan thu cong
    protected $guarded = ["class_id"];

    //neu cot khoa chinh co ten khac 'id' -> cac method: find, whereId... khong su dung duoc vi ten mac dinh cua cot la 'id'
    // => chi dinh ten cot khoa chinh bang thuoc tinh primaryKey
    protected $primaryKey = "class_id";

    // neu thuoc tinh nay = true => no se luu 2 cot create_at va update_at vao table => can tao 2 cot create_at va update_at
    public $timestamps = false;

}
