<h1>{{$model->judul}}</h1>
{{HTML::image($model->getImageUrl(),'',['width'=>200,'height'=>200]);}}
<p>{{HTML::entities($model->konten)}}</p>
<a href='{{URL::route('pengaduan.view',['id' => $model->id])}}' class='sub btn btn-primary'>Lihat Pengaduan</a>
