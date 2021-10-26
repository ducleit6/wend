<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tours;
use App\Models\Destination;

use App\Http\Requests\TourCreateRequest;
use App\Http\Requests\TourUpdateRequest;
use Str;
class TourController extends Controller
{
    public  function index(){
        $tour = new Tours();
        $datas = $tour->getDataIndex(); 
        return view('admin.tour.index',compact('datas'));
    }
    public  function create(){ 
        $tour = new Tours();
        $destination = new Destination();
        $destinations = $destination->all();
        if($destination->count()==0){
            return redirect()->route('destination.create')->with('no','Hiện tại chưa có Điểm đến nào! Vui lòng thêm một Điểm đến');
        }
        return view('admin.tour.create',compact('destinations'));
    }
    public  function store(TourCreateRequest $req){
        $tour = new Tours();
        if($req->has('myfile')){
            $local = public_path("uploads");
            $file = $req->myfile;
            $ext = $req->myfile->extension();
            $file_name = 'Tour-'.time().'-'.strtoupper(Str::random(10)).'.'.$ext;
            $file->move($local,$file_name);
            $req->merge(['image'=>$file_name]);
        } 
        
        if($tour->create($req->all())){
            return redirect()->route('tour.index')->with('yes','Thêm mới chuyến du lịch thành công');
        }
        return redirect()->back()->with('no','Đã có lỗi xảy ra');  
        // $destination = new Destination();
        // if($destination->addData($req)){
        //     return redirect()->route('destination.index')->with('yes','Thêm mới Điểm đến thành công');
        // }
        // return redirect()->back()->with('no','Đã có lỗi xảy ra');       
    }
    public  function edit($id){
        $destination = new Destination();
        $tour = new Tours();
        $data = $tour->find($id);
        $destinations = $destination->all();
        return view('admin.tour.edit',compact('data','destinations'));
    }
    public  function update(TourUpdateRequest $req,$id){
        $tour = new Tours();
        $tour = $tour->find($id);
        if($req->has('myfile')){
            $local = public_path("uploads");
            $file = $req->myfile;
            $ext = $req->myfile->extension();
            $file_name = 'Tour-'.time().'-'.strtoupper(Str::random(10)).'.'.$ext;
            $file->move($local,$file_name);
            $req->merge(['image'=>$file_name]);
        } 
        
        if($tour->update($req->all())){
            return redirect()->route('tour.index')->with('yes','Chỉnh sửa chuyến du lịch thành công');
        }
        return redirect()->back()->with('no','Đã có lỗi xảy ra');  
        // $destination = new Destination();
        // $destination = $destination->find($id);
        // $data = $req->only('name','category_id','status'); 
        // if($destination->update($data)){
        //     return redirect()->route('destination.index')->with('yes','Chỉnh sửa Điểm đến thành công');
        // }
        // return redirect()->back()->with('no','Đã có lỗi xảy ra');
    }
    public function delete($id){
        $tour = new Tours();
        $tour = $tour->find($id);
        if($tour->delete()){
            return redirect() -> route('tour.index')->with('yes','Xóa Chuyến du lịch thành công');
        }else{
            return redirect()->back()->with('no','Xóa Chuyến du lịch thất bại');
        }
    }
    public function deleteAll(Request $req){
        $tour = new Tours();
        $ids = $req->id;
        $success = 0;
        $error = 0;
        
        foreach($ids as $id){
            $tour = $tour->find($id);
            if($tour->delete()){
                $success +=1;
            }else{
                $error +=1;
            }
        }
        if($error == 0){
            return redirect()->back()->with('yes','Xóa nhiều Chuyến du lịch thành công');
        }
        return redirect()->back()->with('no','Có '.$error.' Chuyến du lịch lỗi trong quá trình xóa');
    }
    // public function trashed(){
    //     $tour = new Tours();
    //     $datas = $tour->getDataTrashed();
    //     return view('admin.tour.trashed',compact('datas'));
    // }
    // public function restore($id){
    //     $destination = new Destination();
    //     $destination = $destination->withTrashed()->find($id);
    //     if($destination->restore()){
    //         return redirect()->route('destination.index')->with('yes','Khôi phục Điểm đến thành công');
    //     }
    //     return redirect()->back()->with('no','Khôi phục Điểm đến thất bại');

    // }
    // public function restoreAll(Request $req){
    //     $destination = new Destination();
    //     $ids = $req->id;
    //     $success = 0;
    //     $error = 0;
    //     foreach($ids as $id){
    //         $destination = $destination->withTrashed()->find($id);
    //         if($destination->restore()){
    //             $success +=1;

    //         }else{
    //             $error +=1;

    //         }
    //     }
    //     if($error == 0){
    //         return redirect()->route('destination.index')->with('yes','Khôi phục nhiều Điểm đến thành công');
    //     }
    //     return redirect()->back()->with('no','Có '.$error.' Điểm đến lỗi trong quá trình khôi phục');
    // }
    // public function forceDelete($id){
    //     $destination = new Destination();
    //     $destination = $destination->withTrashed()->find($id);
    //     if($destination->forceDelete()){
    //         return redirect()->back()->with('yes','Xóa vĩnh viễn Điểm đến thành công');
    //     }
    //     return redirect()->back()->with('no','Điểm đến đang có địa điểm tham chiếu, không thể xóa');
    // }
    // public function forcedeleteAll(Request $req){
    //     $destination = new Destination();
    //     $ids = $req->id;
    //     $success = 0;
    //     $error = 0;
    //     foreach($ids as $id){
    //         $destination = $destination->withTrashed()->find($id);         
             
    //         if($destination->forceDelete()){
    //             $success +=1;
    //         }else{
    //             $error +=1;
    //         }                    
    //     }
    //     if($error == 0){
    //         return redirect()->back()->with('yes','Xóa vĩnh viễn nhiều Điểm đến thành công');
    //     }
    //     return redirect()->back()->with('no','Có '.$error.' Điểm đến lỗi trong quá trình xóa vĩnh viễn');
    // }
}
