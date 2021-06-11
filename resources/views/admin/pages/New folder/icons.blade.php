@extends('admin.layout.master')
@section('title','icons')
@section('breadcrumb','icons')

@section('content')
<div class="app-content content">
      <div class="content-wrapper">
        @include('admin.include.breadcrumb')
        <div class="content-body"><!-- horizontal grid start -->
			@include('admin.include.msg')
			<!-- Centered Input end -->
			<section id="font-awesome-icons">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h4 class="card-title">Font Awesome</h4>
                  <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                  <div class="heading-elements">
                      <ul class="list-inline mb-0">
                          <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                      </ul>
                  </div>
              </div>
              <div class="card-content collapse show">
                  <div class="card-body">
                      <div class="feather-icons overflow-hidden row">
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-glass"></i></div>
                            <label class="fonticon-classname">fa fa-glass</label>
                            <label class="fonticon-unit">f000</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-music"></i></div>
                            <label class="fonticon-classname">fa fa-music</label>
                            <label class="fonticon-unit">f001</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-search"></i></div>
                            <label class="fonticon-classname">fa fa-search</label>
                            <label class="fonticon-unit">f002</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-envelope-o"></i></div>
                            <label class="fonticon-classname">fa fa-envelope-o</label>
                            <label class="fonticon-unit">f003</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-heart"></i></div>
                            <label class="fonticon-classname">fa fa-heart</label>
                            <label class="fonticon-unit">f004</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-star"></i></div>
                            <label class="fonticon-classname">fa fa-star</label>
                            <label class="fonticon-unit">f005</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-star-o"></i></div>
                            <label class="fonticon-classname">fa fa-star-o</label>
                            <label class="fonticon-unit">f006</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user"></i></div>
                            <label class="fonticon-classname">fa fa-user</label>
                            <label class="fonticon-unit">f007</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-film"></i></div>
                            <label class="fonticon-classname">fa fa-film</label>
                            <label class="fonticon-unit">f008</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-th-large"></i></div>
                            <label class="fonticon-classname">fa fa-th-large</label>
                            <label class="fonticon-unit">f009</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-th"></i></div>
                            <label class="fonticon-classname">fa fa-th</label>
                            <label class="fonticon-unit">f00a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-th-list"></i></div>
                            <label class="fonticon-classname">fa fa-th-list</label>
                            <label class="fonticon-unit">f00b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-check"></i></div>
                            <label class="fonticon-classname">fa fa-check</label>
                            <label class="fonticon-unit">f00c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-times"></i></div>
                            <label class="fonticon-classname">fa fa-times</label>
                            <label class="fonticon-unit">f00d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-search-plus"></i></div>
                            <label class="fonticon-classname">fa fa-search-plus</label>
                            <label class="fonticon-unit">f00e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-search-minus"></i></div>
                            <label class="fonticon-classname">fa fa-search-minus</label>
                            <label class="fonticon-unit">f010</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-power-off"></i></div>
                            <label class="fonticon-classname">fa fa-power-off</label>
                            <label class="fonticon-unit">f011</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-signal"></i></div>
                            <label class="fonticon-classname">fa fa-signal</label>
                            <label class="fonticon-unit">f012</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cog"></i></div>
                            <label class="fonticon-classname">fa fa-cog</label>
                            <label class="fonticon-unit">f013</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-trash-o"></i></div>
                            <label class="fonticon-classname">fa fa-trash-o</label>
                            <label class="fonticon-unit">f014</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-home"></i></div>
                            <label class="fonticon-classname">fa fa-home</label>
                            <label class="fonticon-unit">f015</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-o</label>
                            <label class="fonticon-unit">f016</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-clock-o"></i></div>
                            <label class="fonticon-classname">fa fa-clock-o</label>
                            <label class="fonticon-unit">f017</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-road"></i></div>
                            <label class="fonticon-classname">fa fa-road</label>
                            <label class="fonticon-unit">f018</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-download"></i></div>
                            <label class="fonticon-classname">fa fa-download</label>
                            <label class="fonticon-unit">f019</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-o-down"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-o-down</label>
                            <label class="fonticon-unit">f01a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-o-up"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-o-up</label>
                            <label class="fonticon-unit">f01b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-inbox"></i></div>
                            <label class="fonticon-classname">fa fa-inbox</label>
                            <label class="fonticon-unit">f01c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-play-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-play-circle-o</label>
                            <label class="fonticon-unit">f01d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-repeat"></i></div>
                            <label class="fonticon-classname">fa fa-repeat</label>
                            <label class="fonticon-unit">f01e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-refresh"></i></div>
                            <label class="fonticon-classname">fa fa-refresh</label>
                            <label class="fonticon-unit">f021</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-list-alt"></i></div>
                            <label class="fonticon-classname">fa fa-list-alt</label>
                            <label class="fonticon-unit">f022</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-lock"></i></div>
                            <label class="fonticon-classname">fa fa-lock</label>
                            <label class="fonticon-unit">f023</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-flag"></i></div>
                            <label class="fonticon-classname">fa fa-flag</label>
                            <label class="fonticon-unit">f024</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-headphones"></i></div>
                            <label class="fonticon-classname">fa fa-headphones</label>
                            <label class="fonticon-unit">f025</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-volume-off"></i></div>
                            <label class="fonticon-classname">fa fa-volume-off</label>
                            <label class="fonticon-unit">f026</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-volume-down"></i></div>
                            <label class="fonticon-classname">fa fa-volume-down</label>
                            <label class="fonticon-unit">f027</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-volume-up"></i></div>
                            <label class="fonticon-classname">fa fa-volume-up</label>
                            <label class="fonticon-unit">f028</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-qrcode"></i></div>
                            <label class="fonticon-classname">fa fa-qrcode</label>
                            <label class="fonticon-unit">f029</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-barcode"></i></div>
                            <label class="fonticon-classname">fa fa-barcode</label>
                            <label class="fonticon-unit">f02a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tag"></i></div>
                            <label class="fonticon-classname">fa fa-tag</label>
                            <label class="fonticon-unit">f02b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tags"></i></div>
                            <label class="fonticon-classname">fa fa-tags</label>
                            <label class="fonticon-unit">f02c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-book"></i></div>
                            <label class="fonticon-classname">fa fa-book</label>
                            <label class="fonticon-unit">f02d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bookmark"></i></div>
                            <label class="fonticon-classname">fa fa-bookmark</label>
                            <label class="fonticon-unit">f02e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-print"></i></div>
                            <label class="fonticon-classname">fa fa-print</label>
                            <label class="fonticon-unit">f02f</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-camera"></i></div>
                            <label class="fonticon-classname">fa fa-camera</label>
                            <label class="fonticon-unit">f030</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-font"></i></div>
                            <label class="fonticon-classname">fa fa-font</label>
                            <label class="fonticon-unit">f031</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bold"></i></div>
                            <label class="fonticon-classname">fa fa-bold</label>
                            <label class="fonticon-unit">f032</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-italic"></i></div>
                            <label class="fonticon-classname">fa fa-italic</label>
                            <label class="fonticon-unit">f033</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-text-height"></i></div>
                            <label class="fonticon-classname">fa fa-text-height</label>
                            <label class="fonticon-unit">f034</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-text-width"></i></div>
                            <label class="fonticon-classname">fa fa-text-width</label>
                            <label class="fonticon-unit">f035</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-align-left"></i></div>
                            <label class="fonticon-classname">fa fa-align-left</label>
                            <label class="fonticon-unit">f036</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-align-center"></i></div>
                            <label class="fonticon-classname">fa fa-align-center</label>
                            <label class="fonticon-unit">f037</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-align-right"></i></div>
                            <label class="fonticon-classname">fa fa-align-right</label>
                            <label class="fonticon-unit">f038</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-align-justify"></i></div>
                            <label class="fonticon-classname">fa fa-align-justify</label>
                            <label class="fonticon-unit">f039</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-list"></i></div>
                            <label class="fonticon-classname">fa fa-list</label>
                            <label class="fonticon-unit">f03a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-outdent"></i></div>
                            <label class="fonticon-classname">fa fa-outdent</label>
                            <label class="fonticon-unit">f03b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-indent"></i></div>
                            <label class="fonticon-classname">fa fa-indent</label>
                            <label class="fonticon-unit">f03c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-video-camera"></i></div>
                            <label class="fonticon-classname">fa fa-video-camera</label>
                            <label class="fonticon-unit">f03d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-picture-o"></i></div>
                            <label class="fonticon-classname">fa fa-picture-o</label>
                            <label class="fonticon-unit">f03e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pencil"></i></div>
                            <label class="fonticon-classname">fa fa-pencil</label>
                            <label class="fonticon-unit">f040</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-map-marker"></i></div>
                            <label class="fonticon-classname">fa fa-map-marker</label>
                            <label class="fonticon-unit">f041</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-adjust"></i></div>
                            <label class="fonticon-classname">fa fa-adjust</label>
                            <label class="fonticon-unit">f042</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tint"></i></div>
                            <label class="fonticon-classname">fa fa-tint</label>
                            <label class="fonticon-unit">f043</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pencil-square-o"></i></div>
                            <label class="fonticon-classname">fa fa-pencil-square-o</label>
                            <label class="fonticon-unit">f044</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-share-square-o"></i></div>
                            <label class="fonticon-classname">fa fa-share-square-o</label>
                            <label class="fonticon-unit">f045</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-check-square-o"></i></div>
                            <label class="fonticon-classname">fa fa-check-square-o</label>
                            <label class="fonticon-unit">f046</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrows"></i></div>
                            <label class="fonticon-classname">fa fa-arrows</label>
                            <label class="fonticon-unit">f047</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-step-backward"></i></div>
                            <label class="fonticon-classname">fa fa-step-backward</label>
                            <label class="fonticon-unit">f048</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fast-backward"></i></div>
                            <label class="fonticon-classname">fa fa-fast-backward</label>
                            <label class="fonticon-unit">f049</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-backward"></i></div>
                            <label class="fonticon-classname">fa fa-backward</label>
                            <label class="fonticon-unit">f04a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-play"></i></div>
                            <label class="fonticon-classname">fa fa-play</label>
                            <label class="fonticon-unit">f04b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pause"></i></div>
                            <label class="fonticon-classname">fa fa-pause</label>
                            <label class="fonticon-unit">f04c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stop"></i></div>
                            <label class="fonticon-classname">fa fa-stop</label>
                            <label class="fonticon-unit">f04d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-forward"></i></div>
                            <label class="fonticon-classname">fa fa-forward</label>
                            <label class="fonticon-unit">f04e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fast-forward"></i></div>
                            <label class="fonticon-classname">fa fa-fast-forward</label>
                            <label class="fonticon-unit">f050</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-step-forward"></i></div>
                            <label class="fonticon-classname">fa fa-step-forward</label>
                            <label class="fonticon-unit">f051</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eject"></i></div>
                            <label class="fonticon-classname">fa fa-eject</label>
                            <label class="fonticon-unit">f052</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-left"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-left</label>
                            <label class="fonticon-unit">f053</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-right"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-right</label>
                            <label class="fonticon-unit">f054</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-plus-circle"></i></div>
                            <label class="fonticon-classname">fa fa-plus-circle</label>
                            <label class="fonticon-unit">f055</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-minus-circle"></i></div>
                            <label class="fonticon-classname">fa fa-minus-circle</label>
                            <label class="fonticon-unit">f056</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-times-circle"></i></div>
                            <label class="fonticon-classname">fa fa-times-circle</label>
                            <label class="fonticon-unit">f057</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-check-circle"></i></div>
                            <label class="fonticon-classname">fa fa-check-circle</label>
                            <label class="fonticon-unit">f058</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-question-circle"></i></div>
                            <label class="fonticon-classname">fa fa-question-circle</label>
                            <label class="fonticon-unit">f059</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-info-circle"></i></div>
                            <label class="fonticon-classname">fa fa-info-circle</label>
                            <label class="fonticon-unit">f05a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-crosshairs"></i></div>
                            <label class="fonticon-classname">fa fa-crosshairs</label>
                            <label class="fonticon-unit">f05b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-times-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-times-circle-o</label>
                            <label class="fonticon-unit">f05c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-check-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-check-circle-o</label>
                            <label class="fonticon-unit">f05d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ban"></i></div>
                            <label class="fonticon-classname">fa fa-ban</label>
                            <label class="fonticon-unit">f05e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-left"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-left</label>
                            <label class="fonticon-unit">f060</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-right"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-right</label>
                            <label class="fonticon-unit">f061</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-up"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-up</label>
                            <label class="fonticon-unit">f062</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-down"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-down</label>
                            <label class="fonticon-unit">f063</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-share"></i></div>
                            <label class="fonticon-classname">fa fa-share</label>
                            <label class="fonticon-unit">f064</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-expand"></i></div>
                            <label class="fonticon-classname">fa fa-expand</label>
                            <label class="fonticon-unit">f065</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-compress"></i></div>
                            <label class="fonticon-classname">fa fa-compress</label>
                            <label class="fonticon-unit">f066</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-plus"></i></div>
                            <label class="fonticon-classname">fa fa-plus</label>
                            <label class="fonticon-unit">f067</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-minus"></i></div>
                            <label class="fonticon-classname">fa fa-minus</label>
                            <label class="fonticon-unit">f068</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-asterisk"></i></div>
                            <label class="fonticon-classname">fa fa-asterisk</label>
                            <label class="fonticon-unit">f069</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-exclamation-circle"></i></div>
                            <label class="fonticon-classname">fa fa-exclamation-circle</label>
                            <label class="fonticon-unit">f06a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gift"></i></div>
                            <label class="fonticon-classname">fa fa-gift</label>
                            <label class="fonticon-unit">f06b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-leaf"></i></div>
                            <label class="fonticon-classname">fa fa-leaf</label>
                            <label class="fonticon-unit">f06c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fire"></i></div>
                            <label class="fonticon-classname">fa fa-fire</label>
                            <label class="fonticon-unit">f06d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eye"></i></div>
                            <label class="fonticon-classname">fa fa-eye</label>
                            <label class="fonticon-unit">f06e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eye-slash"></i></div>
                            <label class="fonticon-classname">fa fa-eye-slash</label>
                            <label class="fonticon-unit">f070</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-exclamation-triangle"></i></div>
                            <label class="fonticon-classname">fa fa-exclamation-triangle</label>
                            <label class="fonticon-unit">f071</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-plane"></i></div>
                            <label class="fonticon-classname">fa fa-plane</label>
                            <label class="fonticon-unit">f072</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calendar"></i></div>
                            <label class="fonticon-classname">fa fa-calendar</label>
                            <label class="fonticon-unit">f073</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-random"></i></div>
                            <label class="fonticon-classname">fa fa-random</label>
                            <label class="fonticon-unit">f074</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-comment"></i></div>
                            <label class="fonticon-classname">fa fa-comment</label>
                            <label class="fonticon-unit">f075</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-magnet"></i></div>
                            <label class="fonticon-classname">fa fa-magnet</label>
                            <label class="fonticon-unit">f076</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-up"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-up</label>
                            <label class="fonticon-unit">f077</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-down"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-down</label>
                            <label class="fonticon-unit">f078</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-retweet"></i></div>
                            <label class="fonticon-classname">fa fa-retweet</label>
                            <label class="fonticon-unit">f079</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-shopping-cart"></i></div>
                            <label class="fonticon-classname">fa fa-shopping-cart</label>
                            <label class="fonticon-unit">f07a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-folder"></i></div>
                            <label class="fonticon-classname">fa fa-folder</label>
                            <label class="fonticon-unit">f07b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-folder-open"></i></div>
                            <label class="fonticon-classname">fa fa-folder-open</label>
                            <label class="fonticon-unit">f07c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrows-v"></i></div>
                            <label class="fonticon-classname">fa fa-arrows-v</label>
                            <label class="fonticon-unit">f07d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrows-h"></i></div>
                            <label class="fonticon-classname">fa fa-arrows-h</label>
                            <label class="fonticon-unit">f07e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bar-chart"></i></div>
                            <label class="fonticon-classname">fa fa-bar-chart</label>
                            <label class="fonticon-unit">f080</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-twitter-square"></i></div>
                            <label class="fonticon-classname">fa fa-twitter-square</label>
                            <label class="fonticon-unit">f081</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-facebook-square"></i></div>
                            <label class="fonticon-classname">fa fa-facebook-square</label>
                            <label class="fonticon-unit">f082</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-camera-retro"></i></div>
                            <label class="fonticon-classname">fa fa-camera-retro</label>
                            <label class="fonticon-unit">f083</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-key"></i></div>
                            <label class="fonticon-classname">fa fa-key</label>
                            <label class="fonticon-unit">f084</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cogs"></i></div>
                            <label class="fonticon-classname">fa fa-cogs</label>
                            <label class="fonticon-unit">f085</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-comments"></i></div>
                            <label class="fonticon-classname">fa fa-comments</label>
                            <label class="fonticon-unit">f086</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thumbs-o-up"></i></div>
                            <label class="fonticon-classname">fa fa-thumbs-o-up</label>
                            <label class="fonticon-unit">f087</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thumbs-o-down"></i></div>
                            <label class="fonticon-classname">fa fa-thumbs-o-down</label>
                            <label class="fonticon-unit">f088</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-star-half"></i></div>
                            <label class="fonticon-classname">fa fa-star-half</label>
                            <label class="fonticon-unit">f089</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-heart-o"></i></div>
                            <label class="fonticon-classname">fa fa-heart-o</label>
                            <label class="fonticon-unit">f08a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sign-out"></i></div>
                            <label class="fonticon-classname">fa fa-sign-out</label>
                            <label class="fonticon-unit">f08b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-linkedin-square"></i></div>
                            <label class="fonticon-classname">fa fa-linkedin-square</label>
                            <label class="fonticon-unit">f08c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thumb-tack"></i></div>
                            <label class="fonticon-classname">fa fa-thumb-tack</label>
                            <label class="fonticon-unit">f08d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-external-link"></i></div>
                            <label class="fonticon-classname">fa fa-external-link</label>
                            <label class="fonticon-unit">f08e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sign-in"></i></div>
                            <label class="fonticon-classname">fa fa-sign-in</label>
                            <label class="fonticon-unit">f090</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-trophy"></i></div>
                            <label class="fonticon-classname">fa fa-trophy</label>
                            <label class="fonticon-unit">f091</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-github-square"></i></div>
                            <label class="fonticon-classname">fa fa-github-square</label>
                            <label class="fonticon-unit">f092</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-upload"></i></div>
                            <label class="fonticon-classname">fa fa-upload</label>
                            <label class="fonticon-unit">f093</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-lemon-o"></i></div>
                            <label class="fonticon-classname">fa fa-lemon-o</label>
                            <label class="fonticon-unit">f094</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-phone"></i></div>
                            <label class="fonticon-classname">fa fa-phone</label>
                            <label class="fonticon-unit">f095</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-square-o"></i></div>
                            <label class="fonticon-classname">fa fa-square-o</label>
                            <label class="fonticon-unit">f096</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bookmark-o"></i></div>
                            <label class="fonticon-classname">fa fa-bookmark-o</label>
                            <label class="fonticon-unit">f097</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-phone-square"></i></div>
                            <label class="fonticon-classname">fa fa-phone-square</label>
                            <label class="fonticon-unit">f098</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-twitter"></i></div>
                            <label class="fonticon-classname">fa fa-twitter</label>
                            <label class="fonticon-unit">f099</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-facebook"></i></div>
                            <label class="fonticon-classname">fa fa-facebook</label>
                            <label class="fonticon-unit">f09a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-github"></i></div>
                            <label class="fonticon-classname">fa fa-github</label>
                            <label class="fonticon-unit">f09b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-unlock"></i></div>
                            <label class="fonticon-classname">fa fa-unlock</label>
                            <label class="fonticon-unit">f09c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-credit-card"></i></div>
                            <label class="fonticon-classname">fa fa-credit-card</label>
                            <label class="fonticon-unit">f09d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-rss"></i></div>
                            <label class="fonticon-classname">fa fa-rss</label>
                            <label class="fonticon-unit">f09e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hdd-o"></i></div>
                            <label class="fonticon-classname">fa fa-hdd-o</label>
                            <label class="fonticon-unit">f0a0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bullhorn"></i></div>
                            <label class="fonticon-classname">fa fa-bullhorn</label>
                            <label class="fonticon-unit">f0a1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bell"></i></div>
                            <label class="fonticon-classname">fa fa-bell</label>
                            <label class="fonticon-unit">f0f3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-certificate"></i></div>
                            <label class="fonticon-classname">fa fa-certificate</label>
                            <label class="fonticon-unit">f0a3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-o-right"></i></div>
                            <label class="fonticon-classname">fa fa-hand-o-right</label>
                            <label class="fonticon-unit">f0a4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-o-left"></i></div>
                            <label class="fonticon-classname">fa fa-hand-o-left</label>
                            <label class="fonticon-unit">f0a5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-o-up"></i></div>
                            <label class="fonticon-classname">fa fa-hand-o-up</label>
                            <label class="fonticon-unit">f0a6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-o-down"></i></div>
                            <label class="fonticon-classname">fa fa-hand-o-down</label>
                            <label class="fonticon-unit">f0a7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-left"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-left</label>
                            <label class="fonticon-unit">f0a8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-right"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-right</label>
                            <label class="fonticon-unit">f0a9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-up"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-up</label>
                            <label class="fonticon-unit">f0aa</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-down"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-down</label>
                            <label class="fonticon-unit">f0ab</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-globe"></i></div>
                            <label class="fonticon-classname">fa fa-globe</label>
                            <label class="fonticon-unit">f0ac</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wrench"></i></div>
                            <label class="fonticon-classname">fa fa-wrench</label>
                            <label class="fonticon-unit">f0ad</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tasks"></i></div>
                            <label class="fonticon-classname">fa fa-tasks</label>
                            <label class="fonticon-unit">f0ae</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-filter"></i></div>
                            <label class="fonticon-classname">fa fa-filter</label>
                            <label class="fonticon-unit">f0b0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-briefcase"></i></div>
                            <label class="fonticon-classname">fa fa-briefcase</label>
                            <label class="fonticon-unit">f0b1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrows-alt"></i></div>
                            <label class="fonticon-classname">fa fa-arrows-alt</label>
                            <label class="fonticon-unit">f0b2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-users"></i></div>
                            <label class="fonticon-classname">fa fa-users</label>
                            <label class="fonticon-unit">f0c0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-link"></i></div>
                            <label class="fonticon-classname">fa fa-link</label>
                            <label class="fonticon-unit">f0c1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cloud"></i></div>
                            <label class="fonticon-classname">fa fa-cloud</label>
                            <label class="fonticon-unit">f0c2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-flask"></i></div>
                            <label class="fonticon-classname">fa fa-flask</label>
                            <label class="fonticon-unit">f0c3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-scissors"></i></div>
                            <label class="fonticon-classname">fa fa-scissors</label>
                            <label class="fonticon-unit">f0c4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-files-o"></i></div>
                            <label class="fonticon-classname">fa fa-files-o</label>
                            <label class="fonticon-unit">f0c5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paperclip"></i></div>
                            <label class="fonticon-classname">fa fa-paperclip</label>
                            <label class="fonticon-unit">f0c6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-floppy-o"></i></div>
                            <label class="fonticon-classname">fa fa-floppy-o</label>
                            <label class="fonticon-unit">f0c7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-square"></i></div>
                            <label class="fonticon-classname">fa fa-square</label>
                            <label class="fonticon-unit">f0c8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bars"></i></div>
                            <label class="fonticon-classname">fa fa-bars</label>
                            <label class="fonticon-unit">f0c9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-list-ul"></i></div>
                            <label class="fonticon-classname">fa fa-list-ul</label>
                            <label class="fonticon-unit">f0ca</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-list-ol"></i></div>
                            <label class="fonticon-classname">fa fa-list-ol</label>
                            <label class="fonticon-unit">f0cb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-strikethrough"></i></div>
                            <label class="fonticon-classname">fa fa-strikethrough</label>
                            <label class="fonticon-unit">f0cc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-underline"></i></div>
                            <label class="fonticon-classname">fa fa-underline</label>
                            <label class="fonticon-unit">f0cd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-table"></i></div>
                            <label class="fonticon-classname">fa fa-table</label>
                            <label class="fonticon-unit">f0ce</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-magic"></i></div>
                            <label class="fonticon-classname">fa fa-magic</label>
                            <label class="fonticon-unit">f0d0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-truck"></i></div>
                            <label class="fonticon-classname">fa fa-truck</label>
                            <label class="fonticon-unit">f0d1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pinterest"></i></div>
                            <label class="fonticon-classname">fa fa-pinterest</label>
                            <label class="fonticon-unit">f0d2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pinterest-square"></i></div>
                            <label class="fonticon-classname">fa fa-pinterest-square</label>
                            <label class="fonticon-unit">f0d3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-google-plus-square"></i></div>
                            <label class="fonticon-classname">fa fa-google-plus-square</label>
                            <label class="fonticon-unit">f0d4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-google-plus"></i></div>
                            <label class="fonticon-classname">fa fa-google-plus</label>
                            <label class="fonticon-unit">f0d5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-money"></i></div>
                            <label class="fonticon-classname">fa fa-money</label>
                            <label class="fonticon-unit">f0d6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-down"></i></div>
                            <label class="fonticon-classname">fa fa-caret-down</label>
                            <label class="fonticon-unit">f0d7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-up"></i></div>
                            <label class="fonticon-classname">fa fa-caret-up</label>
                            <label class="fonticon-unit">f0d8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-left"></i></div>
                            <label class="fonticon-classname">fa fa-caret-left</label>
                            <label class="fonticon-unit">f0d9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-right"></i></div>
                            <label class="fonticon-classname">fa fa-caret-right</label>
                            <label class="fonticon-unit">f0da</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-columns"></i></div>
                            <label class="fonticon-classname">fa fa-columns</label>
                            <label class="fonticon-unit">f0db</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort"></i></div>
                            <label class="fonticon-classname">fa fa-sort</label>
                            <label class="fonticon-unit">f0dc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-desc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-desc</label>
                            <label class="fonticon-unit">f0dd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-asc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-asc</label>
                            <label class="fonticon-unit">f0de</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-envelope"></i></div>
                            <label class="fonticon-classname">fa fa-envelope</label>
                            <label class="fonticon-unit">f0e0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-linkedin"></i></div>
                            <label class="fonticon-classname">fa fa-linkedin</label>
                            <label class="fonticon-unit">f0e1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-undo"></i></div>
                            <label class="fonticon-classname">fa fa-undo</label>
                            <label class="fonticon-unit">f0e2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gavel"></i></div>
                            <label class="fonticon-classname">fa fa-gavel</label>
                            <label class="fonticon-unit">f0e3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tachometer"></i></div>
                            <label class="fonticon-classname">fa fa-tachometer</label>
                            <label class="fonticon-unit">f0e4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-comment-o"></i></div>
                            <label class="fonticon-classname">fa fa-comment-o</label>
                            <label class="fonticon-unit">f0e5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-comments-o"></i></div>
                            <label class="fonticon-classname">fa fa-comments-o</label>
                            <label class="fonticon-unit">f0e6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bolt"></i></div>
                            <label class="fonticon-classname">fa fa-bolt</label>
                            <label class="fonticon-unit">f0e7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sitemap"></i></div>
                            <label class="fonticon-classname">fa fa-sitemap</label>
                            <label class="fonticon-unit">f0e8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-umbrella"></i></div>
                            <label class="fonticon-classname">fa fa-umbrella</label>
                            <label class="fonticon-unit">f0e9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-clipboard"></i></div>
                            <label class="fonticon-classname">fa fa-clipboard</label>
                            <label class="fonticon-unit">f0ea</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-lightbulb-o"></i></div>
                            <label class="fonticon-classname">fa fa-lightbulb-o</label>
                            <label class="fonticon-unit">f0eb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-exchange"></i></div>
                            <label class="fonticon-classname">fa fa-exchange</label>
                            <label class="fonticon-unit">f0ec</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cloud-download"></i></div>
                            <label class="fonticon-classname">fa fa-cloud-download</label>
                            <label class="fonticon-unit">f0ed</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cloud-upload"></i></div>
                            <label class="fonticon-classname">fa fa-cloud-upload</label>
                            <label class="fonticon-unit">f0ee</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-md"></i></div>
                            <label class="fonticon-classname">fa fa-user-md</label>
                            <label class="fonticon-unit">f0f0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stethoscope"></i></div>
                            <label class="fonticon-classname">fa fa-stethoscope</label>
                            <label class="fonticon-unit">f0f1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-suitcase"></i></div>
                            <label class="fonticon-classname">fa fa-suitcase</label>
                            <label class="fonticon-unit">f0f2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bell-o"></i></div>
                            <label class="fonticon-classname">fa fa-bell-o</label>
                            <label class="fonticon-unit">f0a2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-coffee"></i></div>
                            <label class="fonticon-classname">fa fa-coffee</label>
                            <label class="fonticon-unit">f0f4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cutlery"></i></div>
                            <label class="fonticon-classname">fa fa-cutlery</label>
                            <label class="fonticon-unit">f0f5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-text-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-text-o</label>
                            <label class="fonticon-unit">f0f6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-building-o"></i></div>
                            <label class="fonticon-classname">fa fa-building-o</label>
                            <label class="fonticon-unit">f0f7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hospital-o"></i></div>
                            <label class="fonticon-classname">fa fa-hospital-o</label>
                            <label class="fonticon-unit">f0f8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ambulance"></i></div>
                            <label class="fonticon-classname">fa fa-ambulance</label>
                            <label class="fonticon-unit">f0f9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-medkit"></i></div>
                            <label class="fonticon-classname">fa fa-medkit</label>
                            <label class="fonticon-unit">f0fa</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fighter-jet"></i></div>
                            <label class="fonticon-classname">fa fa-fighter-jet</label>
                            <label class="fonticon-unit">f0fb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-beer"></i></div>
                            <label class="fonticon-classname">fa fa-beer</label>
                            <label class="fonticon-unit">f0fc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-h-square"></i></div>
                            <label class="fonticon-classname">fa fa-h-square</label>
                            <label class="fonticon-unit">f0fd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-plus-square"></i></div>
                            <label class="fonticon-classname">fa fa-plus-square</label>
                            <label class="fonticon-unit">f0fe</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-double-left"></i></div>
                            <label class="fonticon-classname">fa fa-angle-double-left</label>
                            <label class="fonticon-unit">f100</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-double-right"></i></div>
                            <label class="fonticon-classname">fa fa-angle-double-right</label>
                            <label class="fonticon-unit">f101</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-double-up"></i></div>
                            <label class="fonticon-classname">fa fa-angle-double-up</label>
                            <label class="fonticon-unit">f102</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-double-down"></i></div>
                            <label class="fonticon-classname">fa fa-angle-double-down</label>
                            <label class="fonticon-unit">f103</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-left"></i></div>
                            <label class="fonticon-classname">fa fa-angle-left</label>
                            <label class="fonticon-unit">f104</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-right"></i></div>
                            <label class="fonticon-classname">fa fa-angle-right</label>
                            <label class="fonticon-unit">f105</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-up"></i></div>
                            <label class="fonticon-classname">fa fa-angle-up</label>
                            <label class="fonticon-unit">f106</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angle-down"></i></div>
                            <label class="fonticon-classname">fa fa-angle-down</label>
                            <label class="fonticon-unit">f107</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-desktop"></i></div>
                            <label class="fonticon-classname">fa fa-desktop</label>
                            <label class="fonticon-unit">f108</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-laptop"></i></div>
                            <label class="fonticon-classname">fa fa-laptop</label>
                            <label class="fonticon-unit">f109</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tablet"></i></div>
                            <label class="fonticon-classname">fa fa-tablet</label>
                            <label class="fonticon-unit">f10a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mobile"></i></div>
                            <label class="fonticon-classname">fa fa-mobile</label>
                            <label class="fonticon-unit">f10b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-circle-o</label>
                            <label class="fonticon-unit">f10c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-quote-left"></i></div>
                            <label class="fonticon-classname">fa fa-quote-left</label>
                            <label class="fonticon-unit">f10d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-quote-right"></i></div>
                            <label class="fonticon-classname">fa fa-quote-right</label>
                            <label class="fonticon-unit">f10e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-spinner"></i></div>
                            <label class="fonticon-classname">fa fa-spinner</label>
                            <label class="fonticon-unit">f110</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-circle"></i></div>
                            <label class="fonticon-classname">fa fa-circle</label>
                            <label class="fonticon-unit">f111</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-reply"></i></div>
                            <label class="fonticon-classname">fa fa-reply</label>
                            <label class="fonticon-unit">f112</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-github-alt"></i></div>
                            <label class="fonticon-classname">fa fa-github-alt</label>
                            <label class="fonticon-unit">f113</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-folder-o"></i></div>
                            <label class="fonticon-classname">fa fa-folder-o</label>
                            <label class="fonticon-unit">f114</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-folder-open-o"></i></div>
                            <label class="fonticon-classname">fa fa-folder-open-o</label>
                            <label class="fonticon-unit">f115</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-smile-o"></i></div>
                            <label class="fonticon-classname">fa fa-smile-o</label>
                            <label class="fonticon-unit">f118</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-frown-o"></i></div>
                            <label class="fonticon-classname">fa fa-frown-o</label>
                            <label class="fonticon-unit">f119</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-meh-o"></i></div>
                            <label class="fonticon-classname">fa fa-meh-o</label>
                            <label class="fonticon-unit">f11a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gamepad"></i></div>
                            <label class="fonticon-classname">fa fa-gamepad</label>
                            <label class="fonticon-unit">f11b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-keyboard-o"></i></div>
                            <label class="fonticon-classname">fa fa-keyboard-o</label>
                            <label class="fonticon-unit">f11c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-flag-o"></i></div>
                            <label class="fonticon-classname">fa fa-flag-o</label>
                            <label class="fonticon-unit">f11d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-flag-checkered"></i></div>
                            <label class="fonticon-classname">fa fa-flag-checkered</label>
                            <label class="fonticon-unit">f11e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-terminal"></i></div>
                            <label class="fonticon-classname">fa fa-terminal</label>
                            <label class="fonticon-unit">f120</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-code"></i></div>
                            <label class="fonticon-classname">fa fa-code</label>
                            <label class="fonticon-unit">f121</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-reply-all"></i></div>
                            <label class="fonticon-classname">fa fa-reply-all</label>
                            <label class="fonticon-unit">f122</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-star-half-o"></i></div>
                            <label class="fonticon-classname">fa fa-star-half-o</label>
                            <label class="fonticon-unit">f123</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-location-arrow"></i></div>
                            <label class="fonticon-classname">fa fa-location-arrow</label>
                            <label class="fonticon-unit">f124</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-crop"></i></div>
                            <label class="fonticon-classname">fa fa-crop</label>
                            <label class="fonticon-unit">f125</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-code-fork"></i></div>
                            <label class="fonticon-classname">fa fa-code-fork</label>
                            <label class="fonticon-unit">f126</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chain-broken"></i></div>
                            <label class="fonticon-classname">fa fa-chain-broken</label>
                            <label class="fonticon-unit">f127</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-question"></i></div>
                            <label class="fonticon-classname">fa fa-question</label>
                            <label class="fonticon-unit">f128</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-info"></i></div>
                            <label class="fonticon-classname">fa fa-info</label>
                            <label class="fonticon-unit">f129</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-exclamation"></i></div>
                            <label class="fonticon-classname">fa fa-exclamation</label>
                            <label class="fonticon-unit">f12a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-superscript"></i></div>
                            <label class="fonticon-classname">fa fa-superscript</label>
                            <label class="fonticon-unit">f12b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-subscript"></i></div>
                            <label class="fonticon-classname">fa fa-subscript</label>
                            <label class="fonticon-unit">f12c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eraser"></i></div>
                            <label class="fonticon-classname">fa fa-eraser</label>
                            <label class="fonticon-unit">f12d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-puzzle-piece"></i></div>
                            <label class="fonticon-classname">fa fa-puzzle-piece</label>
                            <label class="fonticon-unit">f12e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-microphone"></i></div>
                            <label class="fonticon-classname">fa fa-microphone</label>
                            <label class="fonticon-unit">f130</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-microphone-slash"></i></div>
                            <label class="fonticon-classname">fa fa-microphone-slash</label>
                            <label class="fonticon-unit">f131</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-shield"></i></div>
                            <label class="fonticon-classname">fa fa-shield</label>
                            <label class="fonticon-unit">f132</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calendar-o"></i></div>
                            <label class="fonticon-classname">fa fa-calendar-o</label>
                            <label class="fonticon-unit">f133</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fire-extinguisher"></i></div>
                            <label class="fonticon-classname">fa fa-fire-extinguisher</label>
                            <label class="fonticon-unit">f134</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-rocket"></i></div>
                            <label class="fonticon-classname">fa fa-rocket</label>
                            <label class="fonticon-unit">f135</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-maxcdn"></i></div>
                            <label class="fonticon-classname">fa fa-maxcdn</label>
                            <label class="fonticon-unit">f136</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-circle-left"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-circle-left</label>
                            <label class="fonticon-unit">f137</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-circle-right"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-circle-right</label>
                            <label class="fonticon-unit">f138</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-circle-up"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-circle-up</label>
                            <label class="fonticon-unit">f139</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chevron-circle-down"></i></div>
                            <label class="fonticon-classname">fa fa-chevron-circle-down</label>
                            <label class="fonticon-unit">f13a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-html5"></i></div>
                            <label class="fonticon-classname">fa fa-html5</label>
                            <label class="fonticon-unit">f13b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-css3"></i></div>
                            <label class="fonticon-classname">fa fa-css3</label>
                            <label class="fonticon-unit">f13c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-anchor"></i></div>
                            <label class="fonticon-classname">fa fa-anchor</label>
                            <label class="fonticon-unit">f13d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-unlock-alt"></i></div>
                            <label class="fonticon-classname">fa fa-unlock-alt</label>
                            <label class="fonticon-unit">f13e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bullseye"></i></div>
                            <label class="fonticon-classname">fa fa-bullseye</label>
                            <label class="fonticon-unit">f140</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ellipsis-h"></i></div>
                            <label class="fonticon-classname">fa fa-ellipsis-h</label>
                            <label class="fonticon-unit">f141</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ellipsis-v"></i></div>
                            <label class="fonticon-classname">fa fa-ellipsis-v</label>
                            <label class="fonticon-unit">f142</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-rss-square"></i></div>
                            <label class="fonticon-classname">fa fa-rss-square</label>
                            <label class="fonticon-unit">f143</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-play-circle"></i></div>
                            <label class="fonticon-classname">fa fa-play-circle</label>
                            <label class="fonticon-unit">f144</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ticket"></i></div>
                            <label class="fonticon-classname">fa fa-ticket</label>
                            <label class="fonticon-unit">f145</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-minus-square"></i></div>
                            <label class="fonticon-classname">fa fa-minus-square</label>
                            <label class="fonticon-unit">f146</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-minus-square-o"></i></div>
                            <label class="fonticon-classname">fa fa-minus-square-o</label>
                            <label class="fonticon-unit">f147</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-level-up"></i></div>
                            <label class="fonticon-classname">fa fa-level-up</label>
                            <label class="fonticon-unit">f148</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-level-down"></i></div>
                            <label class="fonticon-classname">fa fa-level-down</label>
                            <label class="fonticon-unit">f149</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-check-square"></i></div>
                            <label class="fonticon-classname">fa fa-check-square</label>
                            <label class="fonticon-unit">f14a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pencil-square"></i></div>
                            <label class="fonticon-classname">fa fa-pencil-square</label>
                            <label class="fonticon-unit">f14b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-external-link-square"></i></div>
                            <label class="fonticon-classname">fa fa-external-link-square</label>
                            <label class="fonticon-unit">f14c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-share-square"></i></div>
                            <label class="fonticon-classname">fa fa-share-square</label>
                            <label class="fonticon-unit">f14d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-compass"></i></div>
                            <label class="fonticon-classname">fa fa-compass</label>
                            <label class="fonticon-unit">f14e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-square-o-down"></i></div>
                            <label class="fonticon-classname">fa fa-caret-square-o-down</label>
                            <label class="fonticon-unit">f150</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-square-o-up"></i></div>
                            <label class="fonticon-classname">fa fa-caret-square-o-up</label>
                            <label class="fonticon-unit">f151</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-square-o-right"></i></div>
                            <label class="fonticon-classname">fa fa-caret-square-o-right</label>
                            <label class="fonticon-unit">f152</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eur"></i></div>
                            <label class="fonticon-classname">fa fa-eur</label>
                            <label class="fonticon-unit">f153</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gbp"></i></div>
                            <label class="fonticon-classname">fa fa-gbp</label>
                            <label class="fonticon-unit">f154</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-usd"></i></div>
                            <label class="fonticon-classname">fa fa-usd</label>
                            <label class="fonticon-unit">f155</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-inr"></i></div>
                            <label class="fonticon-classname">fa fa-inr</label>
                            <label class="fonticon-unit">f156</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-jpy"></i></div>
                            <label class="fonticon-classname">fa fa-jpy</label>
                            <label class="fonticon-unit">f157</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-rub"></i></div>
                            <label class="fonticon-classname">fa fa-rub</label>
                            <label class="fonticon-unit">f158</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-krw"></i></div>
                            <label class="fonticon-classname">fa fa-krw</label>
                            <label class="fonticon-unit">f159</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-btc"></i></div>
                            <label class="fonticon-classname">fa fa-btc</label>
                            <label class="fonticon-unit">f15a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file"></i></div>
                            <label class="fonticon-classname">fa fa-file</label>
                            <label class="fonticon-unit">f15b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-text"></i></div>
                            <label class="fonticon-classname">fa fa-file-text</label>
                            <label class="fonticon-unit">f15c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-alpha-asc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-alpha-asc</label>
                            <label class="fonticon-unit">f15d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-alpha-desc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-alpha-desc</label>
                            <label class="fonticon-unit">f15e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-amount-asc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-amount-asc</label>
                            <label class="fonticon-unit">f160</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-amount-desc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-amount-desc</label>
                            <label class="fonticon-unit">f161</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-numeric-asc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-numeric-asc</label>
                            <label class="fonticon-unit">f162</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sort-numeric-desc"></i></div>
                            <label class="fonticon-classname">fa fa-sort-numeric-desc</label>
                            <label class="fonticon-unit">f163</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thumbs-up"></i></div>
                            <label class="fonticon-classname">fa fa-thumbs-up</label>
                            <label class="fonticon-unit">f164</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thumbs-down"></i></div>
                            <label class="fonticon-classname">fa fa-thumbs-down</label>
                            <label class="fonticon-unit">f165</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-youtube-square"></i></div>
                            <label class="fonticon-classname">fa fa-youtube-square</label>
                            <label class="fonticon-unit">f166</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-youtube"></i></div>
                            <label class="fonticon-classname">fa fa-youtube</label>
                            <label class="fonticon-unit">f167</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-xing"></i></div>
                            <label class="fonticon-classname">fa fa-xing</label>
                            <label class="fonticon-unit">f168</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-xing-square"></i></div>
                            <label class="fonticon-classname">fa fa-xing-square</label>
                            <label class="fonticon-unit">f169</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-youtube-play"></i></div>
                            <label class="fonticon-classname">fa fa-youtube-play</label>
                            <label class="fonticon-unit">f16a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-dropbox"></i></div>
                            <label class="fonticon-classname">fa fa-dropbox</label>
                            <label class="fonticon-unit">f16b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stack-overflow"></i></div>
                            <label class="fonticon-classname">fa fa-stack-overflow</label>
                            <label class="fonticon-unit">f16c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-instagram"></i></div>
                            <label class="fonticon-classname">fa fa-instagram</label>
                            <label class="fonticon-unit">f16d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-flickr"></i></div>
                            <label class="fonticon-classname">fa fa-flickr</label>
                            <label class="fonticon-unit">f16e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-adn"></i></div>
                            <label class="fonticon-classname">fa fa-adn</label>
                            <label class="fonticon-unit">f170</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bitbucket"></i></div>
                            <label class="fonticon-classname">fa fa-bitbucket</label>
                            <label class="fonticon-unit">f171</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bitbucket-square"></i></div>
                            <label class="fonticon-classname">fa fa-bitbucket-square</label>
                            <label class="fonticon-unit">f172</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tumblr"></i></div>
                            <label class="fonticon-classname">fa fa-tumblr</label>
                            <label class="fonticon-unit">f173</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tumblr-square"></i></div>
                            <label class="fonticon-classname">fa fa-tumblr-square</label>
                            <label class="fonticon-unit">f174</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-long-arrow-down"></i></div>
                            <label class="fonticon-classname">fa fa-long-arrow-down</label>
                            <label class="fonticon-unit">f175</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-long-arrow-up"></i></div>
                            <label class="fonticon-classname">fa fa-long-arrow-up</label>
                            <label class="fonticon-unit">f176</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-long-arrow-left"></i></div>
                            <label class="fonticon-classname">fa fa-long-arrow-left</label>
                            <label class="fonticon-unit">f177</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-long-arrow-right"></i></div>
                            <label class="fonticon-classname">fa fa-long-arrow-right</label>
                            <label class="fonticon-unit">f178</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-apple"></i></div>
                            <label class="fonticon-classname">fa fa-apple</label>
                            <label class="fonticon-unit">f179</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-windows"></i></div>
                            <label class="fonticon-classname">fa fa-windows</label>
                            <label class="fonticon-unit">f17a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-android"></i></div>
                            <label class="fonticon-classname">fa fa-android</label>
                            <label class="fonticon-unit">f17b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-linux"></i></div>
                            <label class="fonticon-classname">fa fa-linux</label>
                            <label class="fonticon-unit">f17c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-dribbble"></i></div>
                            <label class="fonticon-classname">fa fa-dribbble</label>
                            <label class="fonticon-unit">f17d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-skype"></i></div>
                            <label class="fonticon-classname">fa fa-skype</label>
                            <label class="fonticon-unit">f17e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-foursquare"></i></div>
                            <label class="fonticon-classname">fa fa-foursquare</label>
                            <label class="fonticon-unit">f180</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-trello"></i></div>
                            <label class="fonticon-classname">fa fa-trello</label>
                            <label class="fonticon-unit">f181</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-female"></i></div>
                            <label class="fonticon-classname">fa fa-female</label>
                            <label class="fonticon-unit">f182</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-male"></i></div>
                            <label class="fonticon-classname">fa fa-male</label>
                            <label class="fonticon-unit">f183</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gratipay"></i></div>
                            <label class="fonticon-classname">fa fa-gratipay</label>
                            <label class="fonticon-unit">f184</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sun-o"></i></div>
                            <label class="fonticon-classname">fa fa-sun-o</label>
                            <label class="fonticon-unit">f185</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-moon-o"></i></div>
                            <label class="fonticon-classname">fa fa-moon-o</label>
                            <label class="fonticon-unit">f186</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-archive"></i></div>
                            <label class="fonticon-classname">fa fa-archive</label>
                            <label class="fonticon-unit">f187</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bug"></i></div>
                            <label class="fonticon-classname">fa fa-bug</label>
                            <label class="fonticon-unit">f188</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-vk"></i></div>
                            <label class="fonticon-classname">fa fa-vk</label>
                            <label class="fonticon-unit">f189</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-weibo"></i></div>
                            <label class="fonticon-classname">fa fa-weibo</label>
                            <label class="fonticon-unit">f18a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-renren"></i></div>
                            <label class="fonticon-classname">fa fa-renren</label>
                            <label class="fonticon-unit">f18b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pagelines"></i></div>
                            <label class="fonticon-classname">fa fa-pagelines</label>
                            <label class="fonticon-unit">f18c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stack-exchange"></i></div>
                            <label class="fonticon-classname">fa fa-stack-exchange</label>
                            <label class="fonticon-unit">f18d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-o-right"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-o-right</label>
                            <label class="fonticon-unit">f18e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-arrow-circle-o-left"></i></div>
                            <label class="fonticon-classname">fa fa-arrow-circle-o-left</label>
                            <label class="fonticon-unit">f190</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-caret-square-o-left"></i></div>
                            <label class="fonticon-classname">fa fa-caret-square-o-left</label>
                            <label class="fonticon-unit">f191</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-dot-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-dot-circle-o</label>
                            <label class="fonticon-unit">f192</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wheelchair"></i></div>
                            <label class="fonticon-classname">fa fa-wheelchair</label>
                            <label class="fonticon-unit">f193</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-vimeo-square"></i></div>
                            <label class="fonticon-classname">fa fa-vimeo-square</label>
                            <label class="fonticon-unit">f194</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-try"></i></div>
                            <label class="fonticon-classname">fa fa-try</label>
                            <label class="fonticon-unit">f195</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-plus-square-o"></i></div>
                            <label class="fonticon-classname">fa fa-plus-square-o</label>
                            <label class="fonticon-unit">f196</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-space-shuttle"></i></div>
                            <label class="fonticon-classname">fa fa-space-shuttle</label>
                            <label class="fonticon-unit">f197</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-slack"></i></div>
                            <label class="fonticon-classname">fa fa-slack</label>
                            <label class="fonticon-unit">f198</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-envelope-square"></i></div>
                            <label class="fonticon-classname">fa fa-envelope-square</label>
                            <label class="fonticon-unit">f199</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wordpress"></i></div>
                            <label class="fonticon-classname">fa fa-wordpress</label>
                            <label class="fonticon-unit">f19a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-openid"></i></div>
                            <label class="fonticon-classname">fa fa-openid</label>
                            <label class="fonticon-unit">f19b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-university"></i></div>
                            <label class="fonticon-classname">fa fa-university</label>
                            <label class="fonticon-unit">f19c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-graduation-cap"></i></div>
                            <label class="fonticon-classname">fa fa-graduation-cap</label>
                            <label class="fonticon-unit">f19d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-yahoo"></i></div>
                            <label class="fonticon-classname">fa fa-yahoo</label>
                            <label class="fonticon-unit">f19e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-google"></i></div>
                            <label class="fonticon-classname">fa fa-google</label>
                            <label class="fonticon-unit">f1a0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-reddit"></i></div>
                            <label class="fonticon-classname">fa fa-reddit</label>
                            <label class="fonticon-unit">f1a1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-reddit-square"></i></div>
                            <label class="fonticon-classname">fa fa-reddit-square</label>
                            <label class="fonticon-unit">f1a2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stumbleupon-circle"></i></div>
                            <label class="fonticon-classname">fa fa-stumbleupon-circle</label>
                            <label class="fonticon-unit">f1a3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stumbleupon"></i></div>
                            <label class="fonticon-classname">fa fa-stumbleupon</label>
                            <label class="fonticon-unit">f1a4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-delicious"></i></div>
                            <label class="fonticon-classname">fa fa-delicious</label>
                            <label class="fonticon-unit">f1a5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-digg"></i></div>
                            <label class="fonticon-classname">fa fa-digg</label>
                            <label class="fonticon-unit">f1a6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pied-piper-pp"></i></div>
                            <label class="fonticon-classname">fa fa-pied-piper-pp</label>
                            <label class="fonticon-unit">f1a7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pied-piper-alt"></i></div>
                            <label class="fonticon-classname">fa fa-pied-piper-alt</label>
                            <label class="fonticon-unit">f1a8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-drupal"></i></div>
                            <label class="fonticon-classname">fa fa-drupal</label>
                            <label class="fonticon-unit">f1a9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-joomla"></i></div>
                            <label class="fonticon-classname">fa fa-joomla</label>
                            <label class="fonticon-unit">f1aa</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-language"></i></div>
                            <label class="fonticon-classname">fa fa-language</label>
                            <label class="fonticon-unit">f1ab</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fax"></i></div>
                            <label class="fonticon-classname">fa fa-fax</label>
                            <label class="fonticon-unit">f1ac</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-building"></i></div>
                            <label class="fonticon-classname">fa fa-building</label>
                            <label class="fonticon-unit">f1ad</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-child"></i></div>
                            <label class="fonticon-classname">fa fa-child</label>
                            <label class="fonticon-unit">f1ae</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paw"></i></div>
                            <label class="fonticon-classname">fa fa-paw</label>
                            <label class="fonticon-unit">f1b0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-spoon"></i></div>
                            <label class="fonticon-classname">fa fa-spoon</label>
                            <label class="fonticon-unit">f1b1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cube"></i></div>
                            <label class="fonticon-classname">fa fa-cube</label>
                            <label class="fonticon-unit">f1b2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cubes"></i></div>
                            <label class="fonticon-classname">fa fa-cubes</label>
                            <label class="fonticon-unit">f1b3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-behance"></i></div>
                            <label class="fonticon-classname">fa fa-behance</label>
                            <label class="fonticon-unit">f1b4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-behance-square"></i></div>
                            <label class="fonticon-classname">fa fa-behance-square</label>
                            <label class="fonticon-unit">f1b5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-steam"></i></div>
                            <label class="fonticon-classname">fa fa-steam</label>
                            <label class="fonticon-unit">f1b6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-steam-square"></i></div>
                            <label class="fonticon-classname">fa fa-steam-square</label>
                            <label class="fonticon-unit">f1b7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-recycle"></i></div>
                            <label class="fonticon-classname">fa fa-recycle</label>
                            <label class="fonticon-unit">f1b8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-car"></i></div>
                            <label class="fonticon-classname">fa fa-car</label>
                            <label class="fonticon-unit">f1b9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-taxi"></i></div>
                            <label class="fonticon-classname">fa fa-taxi</label>
                            <label class="fonticon-unit">f1ba</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tree"></i></div>
                            <label class="fonticon-classname">fa fa-tree</label>
                            <label class="fonticon-unit">f1bb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-spotify"></i></div>
                            <label class="fonticon-classname">fa fa-spotify</label>
                            <label class="fonticon-unit">f1bc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-deviantart"></i></div>
                            <label class="fonticon-classname">fa fa-deviantart</label>
                            <label class="fonticon-unit">f1bd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-soundcloud"></i></div>
                            <label class="fonticon-classname">fa fa-soundcloud</label>
                            <label class="fonticon-unit">f1be</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-database"></i></div>
                            <label class="fonticon-classname">fa fa-database</label>
                            <label class="fonticon-unit">f1c0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-pdf-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-pdf-o</label>
                            <label class="fonticon-unit">f1c1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-word-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-word-o</label>
                            <label class="fonticon-unit">f1c2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-excel-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-excel-o</label>
                            <label class="fonticon-unit">f1c3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-powerpoint-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-powerpoint-o</label>
                            <label class="fonticon-unit">f1c4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-image-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-image-o</label>
                            <label class="fonticon-unit">f1c5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-archive-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-archive-o</label>
                            <label class="fonticon-unit">f1c6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-audio-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-audio-o</label>
                            <label class="fonticon-unit">f1c7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-video-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-video-o</label>
                            <label class="fonticon-unit">f1c8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-file-code-o"></i></div>
                            <label class="fonticon-classname">fa fa-file-code-o</label>
                            <label class="fonticon-unit">f1c9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-vine"></i></div>
                            <label class="fonticon-classname">fa fa-vine</label>
                            <label class="fonticon-unit">f1ca</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-codepen"></i></div>
                            <label class="fonticon-classname">fa fa-codepen</label>
                            <label class="fonticon-unit">f1cb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-jsfiddle"></i></div>
                            <label class="fonticon-classname">fa fa-jsfiddle</label>
                            <label class="fonticon-unit">f1cc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-life-ring"></i></div>
                            <label class="fonticon-classname">fa fa-life-ring</label>
                            <label class="fonticon-unit">f1cd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-circle-o-notch"></i></div>
                            <label class="fonticon-classname">fa fa-circle-o-notch</label>
                            <label class="fonticon-unit">f1ce</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-rebel"></i></div>
                            <label class="fonticon-classname">fa fa-rebel</label>
                            <label class="fonticon-unit">f1d0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-empire"></i></div>
                            <label class="fonticon-classname">fa fa-empire</label>
                            <label class="fonticon-unit">f1d1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-git-square"></i></div>
                            <label class="fonticon-classname">fa fa-git-square</label>
                            <label class="fonticon-unit">f1d2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-git"></i></div>
                            <label class="fonticon-classname">fa fa-git</label>
                            <label class="fonticon-unit">f1d3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hacker-news"></i></div>
                            <label class="fonticon-classname">fa fa-hacker-news</label>
                            <label class="fonticon-unit">f1d4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tencent-weibo"></i></div>
                            <label class="fonticon-classname">fa fa-tencent-weibo</label>
                            <label class="fonticon-unit">f1d5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-qq"></i></div>
                            <label class="fonticon-classname">fa fa-qq</label>
                            <label class="fonticon-unit">f1d6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-weixin"></i></div>
                            <label class="fonticon-classname">fa fa-weixin</label>
                            <label class="fonticon-unit">f1d7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paper-plane"></i></div>
                            <label class="fonticon-classname">fa fa-paper-plane</label>
                            <label class="fonticon-unit">f1d8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paper-plane-o"></i></div>
                            <label class="fonticon-classname">fa fa-paper-plane-o</label>
                            <label class="fonticon-unit">f1d9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-history"></i></div>
                            <label class="fonticon-classname">fa fa-history</label>
                            <label class="fonticon-unit">f1da</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-circle-thin"></i></div>
                            <label class="fonticon-classname">fa fa-circle-thin</label>
                            <label class="fonticon-unit">f1db</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-header"></i></div>
                            <label class="fonticon-classname">fa fa-header</label>
                            <label class="fonticon-unit">f1dc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paragraph"></i></div>
                            <label class="fonticon-classname">fa fa-paragraph</label>
                            <label class="fonticon-unit">f1dd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sliders"></i></div>
                            <label class="fonticon-classname">fa fa-sliders</label>
                            <label class="fonticon-unit">f1de</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-share-alt"></i></div>
                            <label class="fonticon-classname">fa fa-share-alt</label>
                            <label class="fonticon-unit">f1e0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-share-alt-square"></i></div>
                            <label class="fonticon-classname">fa fa-share-alt-square</label>
                            <label class="fonticon-unit">f1e1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bomb"></i></div>
                            <label class="fonticon-classname">fa fa-bomb</label>
                            <label class="fonticon-unit">f1e2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-futbol-o"></i></div>
                            <label class="fonticon-classname">fa fa-futbol-o</label>
                            <label class="fonticon-unit">f1e3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tty"></i></div>
                            <label class="fonticon-classname">fa fa-tty</label>
                            <label class="fonticon-unit">f1e4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-binoculars"></i></div>
                            <label class="fonticon-classname">fa fa-binoculars</label>
                            <label class="fonticon-unit">f1e5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-plug"></i></div>
                            <label class="fonticon-classname">fa fa-plug</label>
                            <label class="fonticon-unit">f1e6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-slideshare"></i></div>
                            <label class="fonticon-classname">fa fa-slideshare</label>
                            <label class="fonticon-unit">f1e7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-twitch"></i></div>
                            <label class="fonticon-classname">fa fa-twitch</label>
                            <label class="fonticon-unit">f1e8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-yelp"></i></div>
                            <label class="fonticon-classname">fa fa-yelp</label>
                            <label class="fonticon-unit">f1e9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-newspaper-o"></i></div>
                            <label class="fonticon-classname">fa fa-newspaper-o</label>
                            <label class="fonticon-unit">f1ea</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wifi"></i></div>
                            <label class="fonticon-classname">fa fa-wifi</label>
                            <label class="fonticon-unit">f1eb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calculator"></i></div>
                            <label class="fonticon-classname">fa fa-calculator</label>
                            <label class="fonticon-unit">f1ec</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paypal"></i></div>
                            <label class="fonticon-classname">fa fa-paypal</label>
                            <label class="fonticon-unit">f1ed</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-google-wallet"></i></div>
                            <label class="fonticon-classname">fa fa-google-wallet</label>
                            <label class="fonticon-unit">f1ee</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-visa"></i></div>
                            <label class="fonticon-classname">fa fa-cc-visa</label>
                            <label class="fonticon-unit">f1f0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-mastercard"></i></div>
                            <label class="fonticon-classname">fa fa-cc-mastercard</label>
                            <label class="fonticon-unit">f1f1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-discover"></i></div>
                            <label class="fonticon-classname">fa fa-cc-discover</label>
                            <label class="fonticon-unit">f1f2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-amex"></i></div>
                            <label class="fonticon-classname">fa fa-cc-amex</label>
                            <label class="fonticon-unit">f1f3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-paypal"></i></div>
                            <label class="fonticon-classname">fa fa-cc-paypal</label>
                            <label class="fonticon-unit">f1f4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-stripe"></i></div>
                            <label class="fonticon-classname">fa fa-cc-stripe</label>
                            <label class="fonticon-unit">f1f5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bell-slash"></i></div>
                            <label class="fonticon-classname">fa fa-bell-slash</label>
                            <label class="fonticon-unit">f1f6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bell-slash-o"></i></div>
                            <label class="fonticon-classname">fa fa-bell-slash-o</label>
                            <label class="fonticon-unit">f1f7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-trash"></i></div>
                            <label class="fonticon-classname">fa fa-trash</label>
                            <label class="fonticon-unit">f1f8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-copyright"></i></div>
                            <label class="fonticon-classname">fa fa-copyright</label>
                            <label class="fonticon-unit">f1f9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-at"></i></div>
                            <label class="fonticon-classname">fa fa-at</label>
                            <label class="fonticon-unit">f1fa</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eyedropper"></i></div>
                            <label class="fonticon-classname">fa fa-eyedropper</label>
                            <label class="fonticon-unit">f1fb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-paint-brush"></i></div>
                            <label class="fonticon-classname">fa fa-paint-brush</label>
                            <label class="fonticon-unit">f1fc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-birthday-cake"></i></div>
                            <label class="fonticon-classname">fa fa-birthday-cake</label>
                            <label class="fonticon-unit">f1fd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-area-chart"></i></div>
                            <label class="fonticon-classname">fa fa-area-chart</label>
                            <label class="fonticon-unit">f1fe</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pie-chart"></i></div>
                            <label class="fonticon-classname">fa fa-pie-chart</label>
                            <label class="fonticon-unit">f200</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-line-chart"></i></div>
                            <label class="fonticon-classname">fa fa-line-chart</label>
                            <label class="fonticon-unit">f201</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-lastfm"></i></div>
                            <label class="fonticon-classname">fa fa-lastfm</label>
                            <label class="fonticon-unit">f202</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-lastfm-square"></i></div>
                            <label class="fonticon-classname">fa fa-lastfm-square</label>
                            <label class="fonticon-unit">f203</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-toggle-off"></i></div>
                            <label class="fonticon-classname">fa fa-toggle-off</label>
                            <label class="fonticon-unit">f204</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-toggle-on"></i></div>
                            <label class="fonticon-classname">fa fa-toggle-on</label>
                            <label class="fonticon-unit">f205</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bicycle"></i></div>
                            <label class="fonticon-classname">fa fa-bicycle</label>
                            <label class="fonticon-unit">f206</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bus"></i></div>
                            <label class="fonticon-classname">fa fa-bus</label>
                            <label class="fonticon-unit">f207</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ioxhost"></i></div>
                            <label class="fonticon-classname">fa fa-ioxhost</label>
                            <label class="fonticon-unit">f208</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-angellist"></i></div>
                            <label class="fonticon-classname">fa fa-angellist</label>
                            <label class="fonticon-unit">f209</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc"></i></div>
                            <label class="fonticon-classname">fa fa-cc</label>
                            <label class="fonticon-unit">f20a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ils"></i></div>
                            <label class="fonticon-classname">fa fa-ils</label>
                            <label class="fonticon-unit">f20b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-meanpath"></i></div>
                            <label class="fonticon-classname">fa fa-meanpath</label>
                            <label class="fonticon-unit">f20c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-buysellads"></i></div>
                            <label class="fonticon-classname">fa fa-buysellads</label>
                            <label class="fonticon-unit">f20d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-connectdevelop"></i></div>
                            <label class="fonticon-classname">fa fa-connectdevelop</label>
                            <label class="fonticon-unit">f20e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-dashcube"></i></div>
                            <label class="fonticon-classname">fa fa-dashcube</label>
                            <label class="fonticon-unit">f210</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-forumbee"></i></div>
                            <label class="fonticon-classname">fa fa-forumbee</label>
                            <label class="fonticon-unit">f211</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-leanpub"></i></div>
                            <label class="fonticon-classname">fa fa-leanpub</label>
                            <label class="fonticon-unit">f212</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sellsy"></i></div>
                            <label class="fonticon-classname">fa fa-sellsy</label>
                            <label class="fonticon-unit">f213</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-shirtsinbulk"></i></div>
                            <label class="fonticon-classname">fa fa-shirtsinbulk</label>
                            <label class="fonticon-unit">f214</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-simplybuilt"></i></div>
                            <label class="fonticon-classname">fa fa-simplybuilt</label>
                            <label class="fonticon-unit">f215</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-skyatlas"></i></div>
                            <label class="fonticon-classname">fa fa-skyatlas</label>
                            <label class="fonticon-unit">f216</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cart-plus"></i></div>
                            <label class="fonticon-classname">fa fa-cart-plus</label>
                            <label class="fonticon-unit">f217</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cart-arrow-down"></i></div>
                            <label class="fonticon-classname">fa fa-cart-arrow-down</label>
                            <label class="fonticon-unit">f218</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-diamond"></i></div>
                            <label class="fonticon-classname">fa fa-diamond</label>
                            <label class="fonticon-unit">f219</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ship"></i></div>
                            <label class="fonticon-classname">fa fa-ship</label>
                            <label class="fonticon-unit">f21a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-secret"></i></div>
                            <label class="fonticon-classname">fa fa-user-secret</label>
                            <label class="fonticon-unit">f21b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-motorcycle"></i></div>
                            <label class="fonticon-classname">fa fa-motorcycle</label>
                            <label class="fonticon-unit">f21c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-street-view"></i></div>
                            <label class="fonticon-classname">fa fa-street-view</label>
                            <label class="fonticon-unit">f21d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-heartbeat"></i></div>
                            <label class="fonticon-classname">fa fa-heartbeat</label>
                            <label class="fonticon-unit">f21e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-venus"></i></div>
                            <label class="fonticon-classname">fa fa-venus</label>
                            <label class="fonticon-unit">f221</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mars"></i></div>
                            <label class="fonticon-classname">fa fa-mars</label>
                            <label class="fonticon-unit">f222</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mercury"></i></div>
                            <label class="fonticon-classname">fa fa-mercury</label>
                            <label class="fonticon-unit">f223</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-transgender"></i></div>
                            <label class="fonticon-classname">fa fa-transgender</label>
                            <label class="fonticon-unit">f224</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-transgender-alt"></i></div>
                            <label class="fonticon-classname">fa fa-transgender-alt</label>
                            <label class="fonticon-unit">f225</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-venus-double"></i></div>
                            <label class="fonticon-classname">fa fa-venus-double</label>
                            <label class="fonticon-unit">f226</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mars-double"></i></div>
                            <label class="fonticon-classname">fa fa-mars-double</label>
                            <label class="fonticon-unit">f227</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-venus-mars"></i></div>
                            <label class="fonticon-classname">fa fa-venus-mars</label>
                            <label class="fonticon-unit">f228</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mars-stroke"></i></div>
                            <label class="fonticon-classname">fa fa-mars-stroke</label>
                            <label class="fonticon-unit">f229</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mars-stroke-v"></i></div>
                            <label class="fonticon-classname">fa fa-mars-stroke-v</label>
                            <label class="fonticon-unit">f22a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mars-stroke-h"></i></div>
                            <label class="fonticon-classname">fa fa-mars-stroke-h</label>
                            <label class="fonticon-unit">f22b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-neuter"></i></div>
                            <label class="fonticon-classname">fa fa-neuter</label>
                            <label class="fonticon-unit">f22c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-genderless"></i></div>
                            <label class="fonticon-classname">fa fa-genderless</label>
                            <label class="fonticon-unit">f22d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-facebook-official"></i></div>
                            <label class="fonticon-classname">fa fa-facebook-official</label>
                            <label class="fonticon-unit">f230</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pinterest-p"></i></div>
                            <label class="fonticon-classname">fa fa-pinterest-p</label>
                            <label class="fonticon-unit">f231</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-whatsapp"></i></div>
                            <label class="fonticon-classname">fa fa-whatsapp</label>
                            <label class="fonticon-unit">f232</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-server"></i></div>
                            <label class="fonticon-classname">fa fa-server</label>
                            <label class="fonticon-unit">f233</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-plus"></i></div>
                            <label class="fonticon-classname">fa fa-user-plus</label>
                            <label class="fonticon-unit">f234</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-times"></i></div>
                            <label class="fonticon-classname">fa fa-user-times</label>
                            <label class="fonticon-unit">f235</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bed"></i></div>
                            <label class="fonticon-classname">fa fa-bed</label>
                            <label class="fonticon-unit">f236</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-viacoin"></i></div>
                            <label class="fonticon-classname">fa fa-viacoin</label>
                            <label class="fonticon-unit">f237</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-train"></i></div>
                            <label class="fonticon-classname">fa fa-train</label>
                            <label class="fonticon-unit">f238</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-subway"></i></div>
                            <label class="fonticon-classname">fa fa-subway</label>
                            <label class="fonticon-unit">f239</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-medium"></i></div>
                            <label class="fonticon-classname">fa fa-medium</label>
                            <label class="fonticon-unit">f23a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-y-combinator"></i></div>
                            <label class="fonticon-classname">fa fa-y-combinator</label>
                            <label class="fonticon-unit">f23b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-optin-monster"></i></div>
                            <label class="fonticon-classname">fa fa-optin-monster</label>
                            <label class="fonticon-unit">f23c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-opencart"></i></div>
                            <label class="fonticon-classname">fa fa-opencart</label>
                            <label class="fonticon-unit">f23d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-expeditedssl"></i></div>
                            <label class="fonticon-classname">fa fa-expeditedssl</label>
                            <label class="fonticon-unit">f23e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-battery-full"></i></div>
                            <label class="fonticon-classname">fa fa-battery-full</label>
                            <label class="fonticon-unit">f240</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-battery-three-quarters"></i></div>
                            <label class="fonticon-classname">fa fa-battery-three-quarters</label>
                            <label class="fonticon-unit">f241</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-battery-half"></i></div>
                            <label class="fonticon-classname">fa fa-battery-half</label>
                            <label class="fonticon-unit">f242</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-battery-quarter"></i></div>
                            <label class="fonticon-classname">fa fa-battery-quarter</label>
                            <label class="fonticon-unit">f243</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-battery-empty"></i></div>
                            <label class="fonticon-classname">fa fa-battery-empty</label>
                            <label class="fonticon-unit">f244</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mouse-pointer"></i></div>
                            <label class="fonticon-classname">fa fa-mouse-pointer</label>
                            <label class="fonticon-unit">f245</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-i-cursor"></i></div>
                            <label class="fonticon-classname">fa fa-i-cursor</label>
                            <label class="fonticon-unit">f246</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-object-group"></i></div>
                            <label class="fonticon-classname">fa fa-object-group</label>
                            <label class="fonticon-unit">f247</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-object-ungroup"></i></div>
                            <label class="fonticon-classname">fa fa-object-ungroup</label>
                            <label class="fonticon-unit">f248</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sticky-note"></i></div>
                            <label class="fonticon-classname">fa fa-sticky-note</label>
                            <label class="fonticon-unit">f249</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sticky-note-o"></i></div>
                            <label class="fonticon-classname">fa fa-sticky-note-o</label>
                            <label class="fonticon-unit">f24a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-jcb"></i></div>
                            <label class="fonticon-classname">fa fa-cc-jcb</label>
                            <label class="fonticon-unit">f24b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-cc-diners-club"></i></div>
                            <label class="fonticon-classname">fa fa-cc-diners-club</label>
                            <label class="fonticon-unit">f24c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-clone"></i></div>
                            <label class="fonticon-classname">fa fa-clone</label>
                            <label class="fonticon-unit">f24d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-balance-scale"></i></div>
                            <label class="fonticon-classname">fa fa-balance-scale</label>
                            <label class="fonticon-unit">f24e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hourglass-o"></i></div>
                            <label class="fonticon-classname">fa fa-hourglass-o</label>
                            <label class="fonticon-unit">f250</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hourglass-start"></i></div>
                            <label class="fonticon-classname">fa fa-hourglass-start</label>
                            <label class="fonticon-unit">f251</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hourglass-half"></i></div>
                            <label class="fonticon-classname">fa fa-hourglass-half</label>
                            <label class="fonticon-unit">f252</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hourglass-end"></i></div>
                            <label class="fonticon-classname">fa fa-hourglass-end</label>
                            <label class="fonticon-unit">f253</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hourglass"></i></div>
                            <label class="fonticon-classname">fa fa-hourglass</label>
                            <label class="fonticon-unit">f254</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-rock-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-rock-o</label>
                            <label class="fonticon-unit">f255</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-paper-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-paper-o</label>
                            <label class="fonticon-unit">f256</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-scissors-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-scissors-o</label>
                            <label class="fonticon-unit">f257</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-lizard-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-lizard-o</label>
                            <label class="fonticon-unit">f258</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-spock-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-spock-o</label>
                            <label class="fonticon-unit">f259</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-pointer-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-pointer-o</label>
                            <label class="fonticon-unit">f25a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hand-peace-o"></i></div>
                            <label class="fonticon-classname">fa fa-hand-peace-o</label>
                            <label class="fonticon-unit">f25b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-trademark"></i></div>
                            <label class="fonticon-classname">fa fa-trademark</label>
                            <label class="fonticon-unit">f25c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-registered"></i></div>
                            <label class="fonticon-classname">fa fa-registered</label>
                            <label class="fonticon-unit">f25d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-creative-commons"></i></div>
                            <label class="fonticon-classname">fa fa-creative-commons</label>
                            <label class="fonticon-unit">f25e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gg"></i></div>
                            <label class="fonticon-classname">fa fa-gg</label>
                            <label class="fonticon-unit">f260</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gg-circle"></i></div>
                            <label class="fonticon-classname">fa fa-gg-circle</label>
                            <label class="fonticon-unit">f261</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-tripadvisor"></i></div>
                            <label class="fonticon-classname">fa fa-tripadvisor</label>
                            <label class="fonticon-unit">f262</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-odnoklassniki"></i></div>
                            <label class="fonticon-classname">fa fa-odnoklassniki</label>
                            <label class="fonticon-unit">f263</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-odnoklassniki-square"></i></div>
                            <label class="fonticon-classname">fa fa-odnoklassniki-square</label>
                            <label class="fonticon-unit">f264</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-get-pocket"></i></div>
                            <label class="fonticon-classname">fa fa-get-pocket</label>
                            <label class="fonticon-unit">f265</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wikipedia-w"></i></div>
                            <label class="fonticon-classname">fa fa-wikipedia-w</label>
                            <label class="fonticon-unit">f266</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-safari"></i></div>
                            <label class="fonticon-classname">fa fa-safari</label>
                            <label class="fonticon-unit">f267</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-chrome"></i></div>
                            <label class="fonticon-classname">fa fa-chrome</label>
                            <label class="fonticon-unit">f268</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-firefox"></i></div>
                            <label class="fonticon-classname">fa fa-firefox</label>
                            <label class="fonticon-unit">f269</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-opera"></i></div>
                            <label class="fonticon-classname">fa fa-opera</label>
                            <label class="fonticon-unit">f26a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-internet-explorer"></i></div>
                            <label class="fonticon-classname">fa fa-internet-explorer</label>
                            <label class="fonticon-unit">f26b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-television"></i></div>
                            <label class="fonticon-classname">fa fa-television</label>
                            <label class="fonticon-unit">f26c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-contao"></i></div>
                            <label class="fonticon-classname">fa fa-contao</label>
                            <label class="fonticon-unit">f26d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-500px"></i></div>
                            <label class="fonticon-classname">fa fa-500px</label>
                            <label class="fonticon-unit">f26e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-amazon"></i></div>
                            <label class="fonticon-classname">fa fa-amazon</label>
                            <label class="fonticon-unit">f270</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calendar-plus-o"></i></div>
                            <label class="fonticon-classname">fa fa-calendar-plus-o</label>
                            <label class="fonticon-unit">f271</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calendar-minus-o"></i></div>
                            <label class="fonticon-classname">fa fa-calendar-minus-o</label>
                            <label class="fonticon-unit">f272</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calendar-times-o"></i></div>
                            <label class="fonticon-classname">fa fa-calendar-times-o</label>
                            <label class="fonticon-unit">f273</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-calendar-check-o"></i></div>
                            <label class="fonticon-classname">fa fa-calendar-check-o</label>
                            <label class="fonticon-unit">f274</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-industry"></i></div>
                            <label class="fonticon-classname">fa fa-industry</label>
                            <label class="fonticon-unit">f275</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-map-pin"></i></div>
                            <label class="fonticon-classname">fa fa-map-pin</label>
                            <label class="fonticon-unit">f276</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-map-signs"></i></div>
                            <label class="fonticon-classname">fa fa-map-signs</label>
                            <label class="fonticon-unit">f277</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-map-o"></i></div>
                            <label class="fonticon-classname">fa fa-map-o</label>
                            <label class="fonticon-unit">f278</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-map"></i></div>
                            <label class="fonticon-classname">fa fa-map</label>
                            <label class="fonticon-unit">f279</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-commenting"></i></div>
                            <label class="fonticon-classname">fa fa-commenting</label>
                            <label class="fonticon-unit">f27a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-commenting-o"></i></div>
                            <label class="fonticon-classname">fa fa-commenting-o</label>
                            <label class="fonticon-unit">f27b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-houzz"></i></div>
                            <label class="fonticon-classname">fa fa-houzz</label>
                            <label class="fonticon-unit">f27c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-vimeo"></i></div>
                            <label class="fonticon-classname">fa fa-vimeo</label>
                            <label class="fonticon-unit">f27d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-black-tie"></i></div>
                            <label class="fonticon-classname">fa fa-black-tie</label>
                            <label class="fonticon-unit">f27e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fonticons"></i></div>
                            <label class="fonticon-classname">fa fa-fonticons</label>
                            <label class="fonticon-unit">f280</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-reddit-alien"></i></div>
                            <label class="fonticon-classname">fa fa-reddit-alien</label>
                            <label class="fonticon-unit">f281</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-edge"></i></div>
                            <label class="fonticon-classname">fa fa-edge</label>
                            <label class="fonticon-unit">f282</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-credit-card-alt"></i></div>
                            <label class="fonticon-classname">fa fa-credit-card-alt</label>
                            <label class="fonticon-unit">f283</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-codiepie"></i></div>
                            <label class="fonticon-classname">fa fa-codiepie</label>
                            <label class="fonticon-unit">f284</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-modx"></i></div>
                            <label class="fonticon-classname">fa fa-modx</label>
                            <label class="fonticon-unit">f285</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-fort-awesome"></i></div>
                            <label class="fonticon-classname">fa fa-fort-awesome</label>
                            <label class="fonticon-unit">f286</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-usb"></i></div>
                            <label class="fonticon-classname">fa fa-usb</label>
                            <label class="fonticon-unit">f287</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-product-hunt"></i></div>
                            <label class="fonticon-classname">fa fa-product-hunt</label>
                            <label class="fonticon-unit">f288</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-mixcloud"></i></div>
                            <label class="fonticon-classname">fa fa-mixcloud</label>
                            <label class="fonticon-unit">f289</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-scribd"></i></div>
                            <label class="fonticon-classname">fa fa-scribd</label>
                            <label class="fonticon-unit">f28a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pause-circle"></i></div>
                            <label class="fonticon-classname">fa fa-pause-circle</label>
                            <label class="fonticon-unit">f28b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pause-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-pause-circle-o</label>
                            <label class="fonticon-unit">f28c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stop-circle"></i></div>
                            <label class="fonticon-classname">fa fa-stop-circle</label>
                            <label class="fonticon-unit">f28d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-stop-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-stop-circle-o</label>
                            <label class="fonticon-unit">f28e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-shopping-bag"></i></div>
                            <label class="fonticon-classname">fa fa-shopping-bag</label>
                            <label class="fonticon-unit">f290</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-shopping-basket"></i></div>
                            <label class="fonticon-classname">fa fa-shopping-basket</label>
                            <label class="fonticon-unit">f291</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-hashtag"></i></div>
                            <label class="fonticon-classname">fa fa-hashtag</label>
                            <label class="fonticon-unit">f292</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bluetooth"></i></div>
                            <label class="fonticon-classname">fa fa-bluetooth</label>
                            <label class="fonticon-unit">f293</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bluetooth-b"></i></div>
                            <label class="fonticon-classname">fa fa-bluetooth-b</label>
                            <label class="fonticon-unit">f294</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-percent"></i></div>
                            <label class="fonticon-classname">fa fa-percent</label>
                            <label class="fonticon-unit">f295</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-gitlab"></i></div>
                            <label class="fonticon-classname">fa fa-gitlab</label>
                            <label class="fonticon-unit">f296</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wpbeginner"></i></div>
                            <label class="fonticon-classname">fa fa-wpbeginner</label>
                            <label class="fonticon-unit">f297</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wpforms"></i></div>
                            <label class="fonticon-classname">fa fa-wpforms</label>
                            <label class="fonticon-unit">f298</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-envira"></i></div>
                            <label class="fonticon-classname">fa fa-envira</label>
                            <label class="fonticon-unit">f299</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-universal-access"></i></div>
                            <label class="fonticon-classname">fa fa-universal-access</label>
                            <label class="fonticon-unit">f29a</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wheelchair-alt"></i></div>
                            <label class="fonticon-classname">fa fa-wheelchair-alt</label>
                            <label class="fonticon-unit">f29b</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-question-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-question-circle-o</label>
                            <label class="fonticon-unit">f29c</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-blind"></i></div>
                            <label class="fonticon-classname">fa fa-blind</label>
                            <label class="fonticon-unit">f29d</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-audio-description"></i></div>
                            <label class="fonticon-classname">fa fa-audio-description</label>
                            <label class="fonticon-unit">f29e</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-volume-control-phone"></i></div>
                            <label class="fonticon-classname">fa fa-volume-control-phone</label>
                            <label class="fonticon-unit">f2a0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-braille"></i></div>
                            <label class="fonticon-classname">fa fa-braille</label>
                            <label class="fonticon-unit">f2a1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-assistive-listening-systems"></i></div>
                            <label class="fonticon-classname">fa fa-assistive-listening-systems</label>
                            <label class="fonticon-unit">f2a2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-american-sign-language-interpreting"></i></div>
                            <label class="fonticon-classname">fa fa-american-sign-language-interpreting</label>
                            <label class="fonticon-unit">f2a3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-deaf"></i></div>
                            <label class="fonticon-classname">fa fa-deaf</label>
                            <label class="fonticon-unit">f2a4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-glide"></i></div>
                            <label class="fonticon-classname">fa fa-glide</label>
                            <label class="fonticon-unit">f2a5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-glide-g"></i></div>
                            <label class="fonticon-classname">fa fa-glide-g</label>
                            <label class="fonticon-unit">f2a6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-sign-language"></i></div>
                            <label class="fonticon-classname">fa fa-sign-language</label>
                            <label class="fonticon-unit">f2a7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-low-vision"></i></div>
                            <label class="fonticon-classname">fa fa-low-vision</label>
                            <label class="fonticon-unit">f2a8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-viadeo"></i></div>
                            <label class="fonticon-classname">fa fa-viadeo</label>
                            <label class="fonticon-unit">f2a9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-viadeo-square"></i></div>
                            <label class="fonticon-classname">fa fa-viadeo-square</label>
                            <label class="fonticon-unit">f2aa</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-snapchat"></i></div>
                            <label class="fonticon-classname">fa fa-snapchat</label>
                            <label class="fonticon-unit">f2ab</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-snapchat-ghost"></i></div>
                            <label class="fonticon-classname">fa fa-snapchat-ghost</label>
                            <label class="fonticon-unit">f2ac</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-snapchat-square"></i></div>
                            <label class="fonticon-classname">fa fa-snapchat-square</label>
                            <label class="fonticon-unit">f2ad</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-pied-piper"></i></div>
                            <label class="fonticon-classname">fa fa-pied-piper</label>
                            <label class="fonticon-unit">f2ae</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-first-order"></i></div>
                            <label class="fonticon-classname">fa fa-first-order</label>
                            <label class="fonticon-unit">f2b0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-yoast"></i></div>
                            <label class="fonticon-classname">fa fa-yoast</label>
                            <label class="fonticon-unit">f2b1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-themeisle"></i></div>
                            <label class="fonticon-classname">fa fa-themeisle</label>
                            <label class="fonticon-unit">f2b2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-google-plus-official"></i></div>
                            <label class="fonticon-classname">fa fa-google-plus-official</label>
                            <label class="fonticon-unit">f2b3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-font-awesome"></i></div>
                            <label class="fonticon-classname">fa fa-font-awesome</label>
                            <label class="fonticon-unit">f2b4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-handshake-o"></i></div>
                            <label class="fonticon-classname">fa fa-handshake-o</label>
                            <label class="fonticon-unit">f2b5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-envelope-open"></i></div>
                            <label class="fonticon-classname">fa fa-envelope-open</label>
                            <label class="fonticon-unit">f2b6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-envelope-open-o"></i></div>
                            <label class="fonticon-classname">fa fa-envelope-open-o</label>
                            <label class="fonticon-unit">f2b7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-linode"></i></div>
                            <label class="fonticon-classname">fa fa-linode</label>
                            <label class="fonticon-unit">f2b8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-address-book"></i></div>
                            <label class="fonticon-classname">fa fa-address-book</label>
                            <label class="fonticon-unit">f2b9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-address-book-o"></i></div>
                            <label class="fonticon-classname">fa fa-address-book-o</label>
                            <label class="fonticon-unit">f2ba</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-address-card"></i></div>
                            <label class="fonticon-classname">fa fa-address-card</label>
                            <label class="fonticon-unit">f2bb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-address-card-o"></i></div>
                            <label class="fonticon-classname">fa fa-address-card-o</label>
                            <label class="fonticon-unit">f2bc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-circle"></i></div>
                            <label class="fonticon-classname">fa fa-user-circle</label>
                            <label class="fonticon-unit">f2bd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-circle-o"></i></div>
                            <label class="fonticon-classname">fa fa-user-circle-o</label>
                            <label class="fonticon-unit">f2be</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-user-o"></i></div>
                            <label class="fonticon-classname">fa fa-user-o</label>
                            <label class="fonticon-unit">f2c0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-id-badge"></i></div>
                            <label class="fonticon-classname">fa fa-id-badge</label>
                            <label class="fonticon-unit">f2c1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-id-card"></i></div>
                            <label class="fonticon-classname">fa fa-id-card</label>
                            <label class="fonticon-unit">f2c2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-id-card-o"></i></div>
                            <label class="fonticon-classname">fa fa-id-card-o</label>
                            <label class="fonticon-unit">f2c3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-quora"></i></div>
                            <label class="fonticon-classname">fa fa-quora</label>
                            <label class="fonticon-unit">f2c4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-free-code-camp"></i></div>
                            <label class="fonticon-classname">fa fa-free-code-camp</label>
                            <label class="fonticon-unit">f2c5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-telegram"></i></div>
                            <label class="fonticon-classname">fa fa-telegram</label>
                            <label class="fonticon-unit">f2c6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thermometer-full"></i></div>
                            <label class="fonticon-classname">fa fa-thermometer-full</label>
                            <label class="fonticon-unit">f2c7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thermometer-three-quarters"></i></div>
                            <label class="fonticon-classname">fa fa-thermometer-three-quarters</label>
                            <label class="fonticon-unit">f2c8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thermometer-half"></i></div>
                            <label class="fonticon-classname">fa fa-thermometer-half</label>
                            <label class="fonticon-unit">f2c9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thermometer-quarter"></i></div>
                            <label class="fonticon-classname">fa fa-thermometer-quarter</label>
                            <label class="fonticon-unit">f2ca</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-thermometer-empty"></i></div>
                            <label class="fonticon-classname">fa fa-thermometer-empty</label>
                            <label class="fonticon-unit">f2cb</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-shower"></i></div>
                            <label class="fonticon-classname">fa fa-shower</label>
                            <label class="fonticon-unit">f2cc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bath"></i></div>
                            <label class="fonticon-classname">fa fa-bath</label>
                            <label class="fonticon-unit">f2cd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-podcast"></i></div>
                            <label class="fonticon-classname">fa fa-podcast</label>
                            <label class="fonticon-unit">f2ce</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-window-maximize"></i></div>
                            <label class="fonticon-classname">fa fa-window-maximize</label>
                            <label class="fonticon-unit">f2d0</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-window-minimize"></i></div>
                            <label class="fonticon-classname">fa fa-window-minimize</label>
                            <label class="fonticon-unit">f2d1</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-window-restore"></i></div>
                            <label class="fonticon-classname">fa fa-window-restore</label>
                            <label class="fonticon-unit">f2d2</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-window-close"></i></div>
                            <label class="fonticon-classname">fa fa-window-close</label>
                            <label class="fonticon-unit">f2d3</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-window-close-o"></i></div>
                            <label class="fonticon-classname">fa fa-window-close-o</label>
                            <label class="fonticon-unit">f2d4</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-bandcamp"></i></div>
                            <label class="fonticon-classname">fa fa-bandcamp</label>
                            <label class="fonticon-unit">f2d5</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-grav"></i></div>
                            <label class="fonticon-classname">fa fa-grav</label>
                            <label class="fonticon-unit">f2d6</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-etsy"></i></div>
                            <label class="fonticon-classname">fa fa-etsy</label>
                            <label class="fonticon-unit">f2d7</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-imdb"></i></div>
                            <label class="fonticon-classname">fa fa-imdb</label>
                            <label class="fonticon-unit">f2d8</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-ravelry"></i></div>
                            <label class="fonticon-classname">fa fa-ravelry</label>
                            <label class="fonticon-unit">f2d9</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-eercast"></i></div>
                            <label class="fonticon-classname">fa fa-eercast</label>
                            <label class="fonticon-unit">f2da</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-microchip"></i></div>
                            <label class="fonticon-classname">fa fa-microchip</label>
                            <label class="fonticon-unit">f2db</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-snowflake-o"></i></div>
                            <label class="fonticon-classname">fa fa-snowflake-o</label>
                            <label class="fonticon-unit">f2dc</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-superpowers"></i></div>
                            <label class="fonticon-classname">fa fa-superpowers</label>
                            <label class="fonticon-unit">f2dd</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-wpexplorer"></i></div>
                            <label class="fonticon-classname">fa fa-wpexplorer</label>
                            <label class="fonticon-unit">f2de</label>
                          </div>
                          <div class="col-md-4 col-sm-6 col-12 fonticon-container">
                            <div class="fonticon-wrap"><i class="fa fa-meetup"></i></div>
                            <label class="fonticon-classname">fa fa-meetup</label>
                            <label class="fonticon-unit">f2e0</label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Font Awesome section end -->
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
<!--/ Base style table -->
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('admin/app-assets/css/core/colors/palette-gradient.min.css')}}">
@endsection

@section('js')
<script src="{{url('admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{url('admin/app-assets/js/scripts/tables/datatables/datatable-styling.min.js')}}"></script>
@endsection

