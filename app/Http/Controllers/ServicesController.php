<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Services;
use App\Http\Requests\services\ServicesAddRequest;
use App\Http\Requests\services\ServicesUpdateRequest;

class ServicesController extends Controller
{
    public function view(){
        return view('home.services');
    }

    public function index(Request $req){
        $data = Services::searchFilter($req)->paginate(6);
        $orderByOption = config('options.services_options');
        $orderByStatus = config('options.services_status_options');
        $options = array_merge($orderByOption,$orderByStatus);
        return view('admin.services.index', compact('data', 'options'));
    }
    
    public function create(){
        return view('admin.services.create');
    }

    public function store(ServicesAddRequest $req){
        $form_data = $req->only('name','status');
        $Services = new Services();
        if ($Services->add($form_data)) {
            return redirect()->route('services.index')->with('yes','Thêm mới thành công');
        }
        return redirect()->back()->with('no','Thêm mới không thành công');
    }

    public function edit($id){
        $Services = new Services();
        $services = $Services->editFind($id);
        return view('admin.services.edit', compact('services'));
    }

    public function update(ServicesUpdateRequest $req, $id){
        $Services = new Services();
        $services = $Services->editFind($id);
        $form_data = $req->only('name','status');
        
        if ($services->edit($form_data)) {
            return redirect()->route('services.index')->with('yes','Sửa thành công');
        }
        return redirect()->back()->with('no','Sửa không thành công');
    }

    public function delete($id){
        $Services = new Services();
        $services = $Services->editFind($id);
        if ($services->delete()) {
            return redirect()->route('services.index')->with('yes','Xóa thành công');
        }
        return redirect()->back()->with('no','Không thể xóa mục này vì có sản phẩm tham chiếu');
    }
}
