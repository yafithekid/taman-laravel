@extends('layouts.master')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-30px; margin-left:-30px;">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
    <div class="item active">
    <?= HTML::image("img/1b.jpg","Chania");?>
    <div class="carousel-caption">
    </div>
    </div>

    <div class="item">
    <?= HTML::image("img/2.jpg","Chania");?>
    <!-- <img src="img/2.jpg" alt="Chania"> -->
    <div class="carousel-caption">
    </div>
    </div>

    <div class="item">
        <?= HTML::image("img/3.jpg","Chania");?>
      <!-- <img src="img/3.jpg" alt="Flower"> -->
      <div class="carousel-caption">
      </div>
    </div>
    </div>
</div>



<div class="row">
    <div class="col-md-8">
        <div class="page-header"><?= HTML::image("img/dp.png","Chania");?></div>
    </div>
    <div class="col-md-4 kategori">
        <select class="form-control" id="sel1">
                <option>-- Urutkan berdasarkan --</option>
                <option>Lokasi taman</option>
                <option>Kategori pengaduan</option>
                <option>Tanggal</option>
        </select>
    </div>
</div>
@foreach($models as $model)
<div class='col-md-6'>
    <div class='col-md-11'>
        <div class="row well wpost">
            <p>{{$model->tanggal}}</p>
            <a href="{{URL::route('pengaduan.view',['id' => $model->id])}}">
                <?= HTML::image($model->getImageUrl()); ?>
            </a>
            <h3>
                <a href="{{URL::route('pengaduan.view',['id' => $model->id])}}">{{$model->judul}}</a>
            </h3>
            <!-- <div class="namep"</div> -->
            <div class="conf">
                <p><div class="category"><i class="cat fa fa-bookmark"></i>{{$model->kategori_pengaduan->nama}}</a></div></p>
            
                <p><div class="statrep"><i class="star fa fa-star"></i>{{$model->verified}}</div></a></p>
            </div>
            <br />
            <p>{{$model->konten}}</p>
        </div>
    </div>
</div>
@endforeach
@stop
@section('script')
@parent
<script>
$('.carousel').carousel({
    interval: 3000 //changes the speed
})
</script>
@stop
