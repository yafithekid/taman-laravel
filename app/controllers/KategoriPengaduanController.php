<?php

class KategoriPengaduanController extends BaseController {

    public function postCreate(){
        $model = new KategoriPengaduan();
        $validator = Validator::make(Input::all(),KategoriPengaduan::$rules);
        if ($validator->fails()){

        } else {

        }
    }

}
