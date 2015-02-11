<?php

class ApiController extends BaseController {
    public function pengaduanPostCreate()
    {
        $model = new Pengaduan();
        $validator = Validator::make(Input::all(),Pengaduan::$rules);
        if (!$validator->fails()){  
            $model->fill(Input::all());
            
            if (Input::hasFile('file_gambar')){
                $model->save();
                $model->file_gambar = Input::file('file_gambar');
                $model->saveImage();
            }
            return Response::json(['status' => 'success','link' => URL::route('pengaduan.view',['id' => $model->id])]);
        } else {
            return Response::json(['status' => 'error','message' => $validator->getMessageBag()]);
        }
    }

    public function pengaduanGetCreate()
    {
        return View::make('api.pengaduan.create');
    }
}
