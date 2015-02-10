@extends('layouts.master')
@section('content')
<h1 class="page-header">Daftar Pengaduan</h1>

<!-- First Blog Post -->
<h2>
    <a href="#">Taman Musik Centrum</a>
</h2>
<p><i class="loc fa fa-map-marker"></i> Jl. Cikapayang No. XX</p>
<a href="blog-post.html">
    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active"> 
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="img/1.jpg" alt="" />
                        </div>
                </div>
            </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="img/2.jpg" alt="" />
                        </div>
                </div>
            </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="img/3.jpg" alt="" />
                        </div>
                </div>
            </div>
                </div>
                </div>
            </div>
             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>          
        </div>
</a>
<div class="repcont well">
    <div class="report">
        <div class="col-md-6">
            <h3>Rosiana Rozi<small> 4 Mei 2014</small></h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore."</p>
        </div>
        <div class="col-md-6">
            <h3>Timmy Pratama<small> 4 Mei 2014</small></h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore."</p>
        </div> 
    </div>   
    <div class="col-md-offset-9">
        <a class="cont btn btn-primary" href="#">Baca laporan selengkapnya <i class="fa fa-angle-right"></i></a>
    </div>
</div>

<hr>
<br />

            
<!-- Pager -->
<ul class="pager">
    <li class="previous">
        <a href="#">&larr; Laporan lama</a>
    </li>
    <li class="next">
        <a href="#">Laporan baru &rarr;</a>
    </li>
</ul>


@stop


@stop