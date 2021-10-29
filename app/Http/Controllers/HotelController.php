<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelCreateRequest;
use App\Http\Requests\HotelUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Hotel;

class HotelController extends Controller
{
    public  function index(){
        $hotel = new Hotel();
        $datas = $hotel->getDataIndex();
        return view('admin.hotel.index',compact('datas'));
    }
    public  function create(){
        $destination = new Destination();
        $destinations = $destination->all();
        if($destinations->count()==0){
            return redirect()->route('destination.create')->with('no','Hiện tại chưa có điểm đến nào! Vui lòng thêm một điểm đến');
        }
        return view('admin.hotel.create',compact('destinations'));
    }
    public  function store(HotelCreateRequest $req){

        $hotel = new Hotel();

//        $destination = new Destination();
        if($hotel->create($req->all())){
            return redirect()->route('hotel.index')->with('yes','Thêm mới Khách sạn thành công');
        }
        return redirect()->back()->with('no','Đã có lỗi xảy ra');
    }
    public  function edit($id){
        $hotel = new Hotel();
        $destination = new Destination();
        $data = $hotel->find($id);
        $destinations = $destination->all();
        return view('admin.hotel.edit',compact('data','destinations'));
    }
    public  function update(HotelUpdateRequest $req,$id){
        $hotel = new Hotel();
        $hotel = $hotel->find($id);

//        $destination = new Destination();
//        $destination = $destination->find($id);
//        $data = $req->only('name','category_id','status');
        if($hotel->update($req->all(0))){
            return redirect()->route('hotel.index')->with('yes','Chỉnh sửa Khách sạn thành công');
        }
        return redirect()->back()->with('no','Đã có lỗi xảy ra');
    }
    public function delete($id){
//        $destination = new Destination();
//        $destination = $destination->find($id);
//        if($destination->delete()){
//            return redirect() -> route('destination.index')->with('yes','Xóa Điểm đến thành công');
//        }else{
//            return redirect()->back()->with('no','Xóa Điểm đến thất bại');
//        }
    }
    public function deleteAll(Request $req){
//        $destination = new Destination();
//        $ids = $req->id;
//        $success = 0;
//        $error = 0;
//
//        foreach($ids as $id){
//            $destination = $destination->find($id);
//            if($destination->delete()){
//                $success +=1;
//            }else{
//                $error +=1;
//            }
//        }
//        if($error == 0){
//            return redirect()->back()->with('yes','Xóa nhiều Điểm đến thành công');
//        }
//        return redirect()->back()->with('no','Có '.$error.' Điểm đến lỗi trong quá trình xóa');
    }

}
