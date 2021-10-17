<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Category;

use App\Http\Requests\DestinationCreateRequest;
use App\Http\Requests\DestinationUpdateRequest;

class DestinationController extends Controller
{
    public  function index(){
        $destination = new Destination();
        $datas = $destination->getDataIndex(); 
        return view('admin.destination.index',compact('datas'));
    }
    public  function create(){ 
        $category = new Category();
        $categories = $category->all();
        if($categories->count()==0){
            return redirect()->route('category.create')->with('no','Hiện tại chưa có danh mục nào! Vui lòng thêm một danh mục');
        }
        return view('admin.destination.create',compact('categories'));
    }
    public  function store(DestinationCreateRequest $req){
        $destination = new Destination();
        if($destination->addData($req)){
            return redirect()->route('destination.index')->with('yes','Thêm mới Điểm đến thành công');
        }
        return redirect()->back()->with('no','Đã có lỗi xảy ra');       
    }
    public  function edit($id){
        $destination = new Destination();
        $category = new Category();
        $data = $destination->find($id);
        $categories = $category->all();
        return view('admin.destination.edit',compact('data','categories'));
    }
    public  function update(DestinationUpdateRequest $req,$id){
        $destination = new Destination();
        $data = $req->only('name','category_id','status');
        dd($data);
        if($destination->update($data)){
            return redirect()->route('destination.index')->with('yes','Chỉnh sửa Điểm đến thành công');
        }
        return redirect()->back()->with('no','Đã có lỗi xảy ra');
    }
    public function delete($id){
        $destination = new Destination();
        $destination = $destination->find($id);
        if($destination->delete()){
            return redirect() -> route('destination.index')->with('yes','Xóa Điểm đến thành công');
        }else{
            return redirect()->back()->with('no','Xóa Điểm đến thất bại');
        }
    }
    public function deleteAll(Request $req){
        $destination = new Destination();
        $ids = $req->id;
        $success = 0;
        $error = 0;
        
        foreach($ids as $id){
            $destination = $destination->find($id);
            if($destination->delete()){
                $success +=1;
            }else{
                $error +=1;
            }
        }
        if($error == 0){
            return redirect()->back()->with('yes','Xóa nhiều Điểm đến thành công');
        }
        return redirect()->back()->with('no','Có '.$error.' Điểm đến lỗi trong quá trình xóa');
    }
    public function trashed(){
        // $destination = new Destination();
        // $datas = $category->getDataTrashed();
        // return view('admin.category.trashed',compact('datas'));
    }
    public function restore($id){
        // $category = new Category();
        // $category = $category->withTrashed()->find($id);
        // if($category->restore()){
        //     return redirect()->route('category.index')->with('yes','Khôi phục danh mục thành công');
        // }
        // return redirect()->back()->with('no','Khôi phục danh mục thất bại');

    }
    public function restoreAll(Request $req){
        // $category = new Category();
        // $ids = $req->id;
        // $success = 0;
        // $error = 0;
        // foreach($ids as $id){
        //     $category = $category->withTrashed()->find($id);
        //     if($category->restore()){
        //         $success +=1;

        //     }else{
        //         $error +=1;

        //     }
        // }
        // if($error == 0){
        //     return redirect()->route('category.index')->with('yes','Khôi phục nhiều danh mục thành công');
        // }
        // return redirect()->back()->with('no','Có '.$error.' Danh mục lỗi trong quá trình khôi phục');

    }
    public function forceDelete($id){
        // $category = new Category();
        // $category = $category->withTrashed()->find($id);
        // if($category->destinations()->count() == 0){
        //     if($category->forceDelete()){
        //         return redirect()->back()->with('yes','Xóa vĩnh viễn danh mục thành công');
        //     }
        //     return redirect()->back()->with('no','Danh mục đang có địa điểm tham chiếu, không thể xóa');

        // }else{
        //     return redirect()->back()->with('no','Có lỗi khi thực hiện xóa vĩnh viễn');
        // }
    }
    public function forcedeleteAll(Request $req){
        // $category = new Category();
        // $ids = $req->id;
        // $success = 0;
        // $error = 0;
        // foreach($ids as $id){
        //     $category = $category->withTrashed()->find($id);
        //     if($category->destinations()->count() == 0){
        //         if($category->forceDelete()){
        //             $success +=1;
    
        //         }else{
        //             $error +=1;
        //         }
        //     }
        //     else{
        //         $error +=1;
        //     }         
        // }
        // if($error == 0){
        //     return redirect()->back()->with('yes','Xóa vĩnh viễn nhiều danh mục thành công');
        // }
        // return redirect()->back()->with('no','Có '.$error.' Danh mục lỗi trong quá trình xóa vĩnh viễn');
    }
}
