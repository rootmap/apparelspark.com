<link rel='stylesheet' id='rs-plugin-settings-css'  href='{{ url('slidercss') }}/settings.css' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption.Twitter-Content a,.tp-caption.Twitter-Content a:visited{color:#0084B4 !important}
.tp-caption.Twitter-Content a:hover{ color:#0084B4 !important; text-decoration:underline !important; }
</style>


<!-- <script type='text/javascript' src='sliderjs/jquery.js'></script> -->
<script type='text/javascript' src='{{ url('sliderjs') }}/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='{{ url('sliderjs') }}/jquery.themepunch.revolution.min.js'></script>

<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
<style type="text/css" data-type="vc_custom-css"> .animated { visibility: visible !important; } </style>
<style type="text/css" data-type="vc_shortcodes-custom-css"> .vc_custom_1483129975971 { margin-bottom: 0px !important;padding-top: 30px !important; } </style>
<noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>        


	
<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:5 0 0 0px;margin-top:0px;margin-bottom:0px;">

	<div id="rev_slider_5_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.1.5">
<ul>
	@if (isset($slider)>0)
		@foreach ($slider as $key=>$row)
			<li data-index="rs-1{{ $key }}" data-transition="slidehorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-delay="6000"  data-rotate="0"  data-saveperformance="off"  data-title="Introduction" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		
				<img src="{{url('upload/slider/'.$row->image)}}"  alt="" title="Home"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
				<!-- LAYERS -->

				<!-- LAYER NR. 1 -->
				<h1 class="tp-caption   tp-resizeme" 
					id="slide-13-layer-2" 
					data-x="653" 
					data-y="208" 
								data-width="['844']"
					data-height="['71']"
		
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":850,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 5; min-width: 844px; max-width: 844px; max-width: 71px; max-width: 71px; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 800; color: #fff;font-family:Raleway;">{{ $row->title_one }} </h1>

				<!-- LAYER NR. 2 -->
				<div class="tp-caption   tp-resizeme" 
					id="slide-13-layer-4" 
					data-x="652" 
					data-y="287" 
								data-width="['849']"
					data-height="['39']"
		
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":1700,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 6; min-width: 849px; max-width: 849px; max-width: 39px; max-width: 39px; white-space: nowrap; font-size: 29px; line-height: 29px; font-weight: 300; color: #fff;font-family:Raleway;letter-spacing:22.3px;">{{ $row->title_two }}</div>

				<!-- LAYER NR. 3 -->
				<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" 
					id="slide-13-layer-10" 
					data-x="1066" 
					data-y="352" 
								data-width="['2']"
					data-height="['140']"
		
					data-type="shape" 
					data-responsive_offset="on" 

					data-frames='[{"delay":2500,"speed":2500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 7;background-color:rgba(50, 50, 50, 0.50);"> </div>

				<!-- LAYER NR. 4 -->
				<div class="tp-caption   tp-resizeme" 
					id="slide-13-layer-6" 
					data-x="770" 
					data-y="380" 
								data-width="['auto']"
					data-height="['auto']"
		
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":2500,"speed":1000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 8; white-space: nowrap; font-size: 30px; line-height: 33px; font-weight: 300; color: #fff;font-family:Raleway;">{{ $row->title_three }}  </div>

				<!-- LAYER NR. 5 -->
				{{-- <div class="tp-caption   tp-resizeme" 
					id="slide-13-layer-7" 
					data-x="1080" 
					data-y="381" 
								data-width="['auto']"
					data-height="['auto']"
		
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":3000,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 9; white-space: nowrap; font-size: 30px; line-height: 33px; font-weight: 300; color: #fff;font-family:Raleway;">COMPLIANCE </div> --}}

				<!-- LAYER NR. 6 -->
				{{-- <div class="tp-caption   tp-resizeme" 
					id="slide-13-layer-8" 
					data-x="737" 
					data-y="430" 
								data-width="['auto']"
					data-height="['auto']"
		
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":3500,"speed":1000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 10; white-space: nowrap; font-size: 30px; line-height: 33px; font-weight: 300; color: #fff;font-family:Raleway;">QUALITY ASSURANCE </div> --}}

				<!-- LAYER NR. 7 -->
				{{-- <div class="tp-caption   tp-resizeme" 
					id="slide-13-layer-9" 
					data-x="1080" 
					data-y="430" 
								data-width="['auto']"
					data-height="['auto']"
		
					data-type="text" 
					data-responsive_offset="on" 

					data-frames='[{"delay":4000,"speed":1000,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
					data-textAlign="['inherit','inherit','inherit','inherit']"
					data-paddingtop="[0,0,0,0]"
					data-paddingright="[0,0,0,0]"
					data-paddingbottom="[0,0,0,0]"
					data-paddingleft="[0,0,0,0]"

					style="z-index: 11; white-space: nowrap; font-size: 30px; line-height: 33px; font-weight: 300; color: #fff;font-family:Raleway;">PRODUCT DEVELOPMENT </div> --}}
			</li>
			<!-- SLIDE  -->
		@endforeach
	@endif
	
	{{-- <li data-index="rs-14" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-saveperformance="off"  data-title="Clients" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="sliderimages/slide_2_bg_202.jpg"  alt="" title="Home"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 8 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-1" 
			 data-x="473" 
			 data-y="119" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":600,"speed":1000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 70px; font-weight: 600; color: #fff;font-family:Raleway;">OUR CLIENTS </div>

		<!-- LAYER NR. 9 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-2" 
			 data-x="475" 
			 data-y="260" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1600,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6;"><img src="sliderimages/Lidl_Stiftung__Co._KG_logo.png" alt="" data-ww="107px" data-hh="107px" width="107" height="107" data-no-retina> </div>

		<!-- LAYER NR. 10 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-3" 
			 data-x="638" 
			 data-y="249" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1900,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 7;"><img src="sliderimages/AldiWorldwideLogo_low.png" alt="" data-ww="107px" data-hh="128px" width="107" height="128" data-no-retina> </div>

		<!-- LAYER NR. 11 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-4" 
			 data-x="765" 
			 data-y="240" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2200,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8;"><img src="sliderimages/as-colour-logo-THUMBNAILS.png" alt="" data-ww="150px" data-hh="150px" width="150" height="150" data-no-retina> </div>

		<!-- LAYER NR. 12 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-5" 
			 data-x="940" 
			 data-y="290" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2500,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 9;"><img src="sliderimages/ernstings_family.png" alt="" data-ww="258px" data-hh="49px" width="258" height="49" data-no-retina> </div>

		<!-- LAYER NR. 13 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-6" 
			 data-x="1250" 
			 data-y="290" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2800,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 10;"><img src="sliderimages/Koton-LOGO.png" alt="" data-ww="188px" data-hh="46px" width="188" height="46" data-no-retina> </div>

		<!-- LAYER NR. 14 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-12" 
			 data-x="475" 
			 data-y="430" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":3100,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 11;"><img src="sliderimages/kenvelo-1.png" alt="" data-ww="300px" data-hh="59px" width="300" height="59" data-no-retina> </div>

		<!-- LAYER NR. 15 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-8" 
			 data-x="843" 
			 data-y="434" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":3400,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 12;"><img src="sliderimages/best-less.png" alt="" data-ww="205px" data-hh="40px" width="205" height="40" data-no-retina> </div>

		<!-- LAYER NR. 16 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-14-layer-9" 
			 data-x="1118" 
			 data-y="434" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":3700,"speed":300,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 13;"><img src="sliderimages/lc_waikiki_210_100.jpg" alt="" data-ww="310px" data-hh="45px" width="310" height="45" data-no-retina> </div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-15" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-delay="5200"  data-rotate="0"  data-saveperformance="off"  data-title="Compliance" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="sliderimages/slide_3_bg_303.jpg"  alt="" title="Home"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 17 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-1" 
			 data-x="471" 
			 data-y="74" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":800,"speed":1000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; white-space: nowrap; font-size: 58px; line-height: 58px; font-weight: 600; color: #fff;font-family:Raleway;">WORK WITH ONLY COMPLIANT UNITS </div>

		<!-- LAYER NR. 18 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-3" 
			 data-x="471" 
			 data-y="170" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1800,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6;"><img src="sliderimages/accord.png" alt="" data-ww="307px" data-hh="74px" width="307" height="74" data-no-retina> </div>

		<!-- LAYER NR. 19 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-4" 
			 data-x="836" 
			 data-y="170" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2000,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 7;"><img src="sliderimages/alliance.png" alt="" data-ww="356px" data-hh="72px" width="356" height="72" data-no-retina> </div>

		<!-- LAYER NR. 20 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-5" 
			 data-x="1249" 
			 data-y="170" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2200,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8;"><img src="sliderimages/bangladesh_pact.png" alt="" data-ww="277px" data-hh="75px" width="277" height="75" data-no-retina> </div>

		<!-- LAYER NR. 21 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-6" 
			 data-x="471" 
			 data-y="268" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2400,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 9;"><img src="sliderimages/sedex.png" alt="" data-ww="110px" data-hh="110px" width="110" height="110" data-no-retina> </div>

		<!-- LAYER NR. 22 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-7" 
			 data-x="647" 
			 data-y="280" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2600,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 10;"><img src="sliderimages/BSCI-Logo.png" alt="" data-ww="315px" data-hh="81px" width="315" height="81" data-no-retina> </div>

		<!-- LAYER NR. 23 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-8" 
			 data-x="1020" 
			 data-y="254" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2800,"speed":200,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 11;"><img src="sliderimages/WRAP-Logo.png" alt="" data-ww="132px" data-hh="136px" width="132" height="136" data-no-retina> </div>

			<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-9" 
			 data-x="1220" 
			 data-y="274" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2800,"speed":200,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 11;"><img src="sliderimages/oeko-tex-certification.png" alt="" data-ww="232px" data-hh="136px" width="232" height="136" data-no-retina> </div>

		<!-- LAYER NR. 24 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-2" 
			 data-x="542" 
			 data-y="416" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":3300,"speed":1000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 12; white-space: nowrap; font-size: 58px; line-height: 58px; font-weight: 600; color: #fff;font-family:Raleway;">AND ENVIRONMENTALLY FRIENDLY </div>

		<!-- LAYER NR. 25 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-9" 
			 data-x="1354" 
			 data-y="487" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":4300,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 13;"><img src="sliderimages/zdhc.png" alt="" data-ww="182px" data-hh="141px" width="182" height="141" data-no-retina> </div>

		<!-- LAYER NR. 26 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-10" 
			 data-x="1100" 
			 data-y="520" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":4500,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 14;"><img src="sliderimages/Global_Standard.png" alt="" data-ww="182px" data-hh="83px" width="182" height="83" data-no-retina> </div>

		<!-- LAYER NR. 27 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-15-layer-11" 
			 data-x="750" 
			 data-y="519" 
						data-width="['none','none','none','none']"
			data-height="['none','none','none','none']"
 
			data-type="image" 
			data-responsive_offset="on" 

			data-frames='[{"delay":4700,"speed":200,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 15;"><img src="sliderimages/BCI_logo.png" alt="" data-ww="260px" data-hh="84px" width="265" height="86" data-no-retina> </div>


	</li>
	<!-- SLIDE  -->
	<li data-index="rs-16" data-transition="slideoverhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-delay="13920"  data-rotate="0"  data-saveperformance="off"  data-title="Strength" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="sliderimages/slide-4_404.jpg"  alt="" title="Home"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 28 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-1" 
			 data-x="630" 
			 data-y="160" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1000,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"+12310","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 40px; font-weight: 300; color: #fff;font-family:Raleway;">WE DELIVER </div>

		<!-- LAYER NR. 29 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-2" 
			 data-x="627" 
			 data-y="208" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":1300,"speed":700,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+2300","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 60px; font-weight: 500; color: #fff;font-family:Raleway;">UNBEATABLE PRICE </div>

		<!-- LAYER NR. 30 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-3" 
			 data-x="630" 
			 data-y="274" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":2000,"speed":300,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2000","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 7; white-space: nowrap; font-size: 28px; line-height: 30px; font-weight: 400; color: #fff;font-family:Raleway;">serving worlds largest value chain retailers for years </div>

		<!-- LAYER NR. 31 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-5" 
			 data-x="629" 
			 data-y="208" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":4450,"speed":700,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+2300","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 8; white-space: nowrap; font-size: 60px; line-height: 60px; font-weight: 500; color: #fff;font-family:Raleway;">ON TIME SHIPMENT </div>

		<!-- LAYER NR. 32 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-6" 
			 data-x="631" 
			 data-y="274" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":5150,"speed":300,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2000","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 9; white-space: nowrap; font-size: 28px; line-height: 30px; font-weight: 400; color: #fff;font-family:Raleway;">95% on time shipments with 0 claims </div>

		<!-- LAYER NR. 33 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-7" 
			 data-x="631" 
			 data-y="208" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":7600,"speed":700,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+2300","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 10; white-space: nowrap; font-size: 60px; line-height: 60px; font-weight: 500; color: #fff;font-family:Raleway;">WIDE RANGE OF PRODUCTS </div>

		<!-- LAYER NR. 34 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-8" 
			 data-x="631" 
			 data-y="274" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":8300,"speed":300,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2000","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 11; white-space: nowrap; font-size: 28px; line-height: 30px; font-weight: 400; color: #fff;font-family:Raleway;">from inner wears to outer wear </div>

		<!-- LAYER NR. 35 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-9" 
			 data-x="626" 
			 data-y="208" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":10750,"speed":700,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"+2300","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 12; white-space: nowrap; font-size: 60px; line-height: 60px; font-weight: 500; color: #fff;font-family:Raleway;">ENSURED QUALITY </div>

		<!-- LAYER NR. 36 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-16-layer-10" 
			 data-x="631" 
			 data-y="274" 
						data-width="['auto']"
			data-height="['auto']"
 
			data-type="text" 
			data-responsive_offset="on" 

			data-frames='[{"delay":11450,"speed":300,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+2000","speed":150,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
			data-textAlign="['inherit','inherit','inherit','inherit']"
			data-paddingtop="[0,0,0,0]"
			data-paddingright="[0,0,0,0]"
			data-paddingbottom="[0,0,0,0]"
			data-paddingleft="[0,0,0,0]"

			style="z-index: 13; white-space: nowrap; font-size: 28px; line-height: 30px; font-weight: 400; color: #fff;font-family:Raleway;">achieved 97% pass FRI last year </div>
	</li>
	<!-- SLIDE  --> --}}
	
</ul>
	<div class="tp-bannertimer" style="height: 5px; background-color: rgba(0, 0, 0, 0.15);"></div>	
</div>
<script>
	var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); 
	var htmlDivCss="";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
		<script type="text/javascript">
						/******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

			var setREVStartSize=function(){
				try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					e.c = jQuery('#rev_slider_5_1');
					e.gridwidth = [1920];
					e.gridheight = [665];
							
					e.sliderLayout = "auto";
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};
			
			setREVStartSize();
			
						var tpj=jQuery;
			
			var revapi5;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_5_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_5_1");
				}else{
					revapi5 = tpj("#rev_slider_5_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"{{ url('sliderjs') }}/",
						sliderLayout:"auto",
						dottedOverlay:"none",
						delay:5000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
						},
						visibilityLevels:[1240,1024,778,480],
						gridwidth:1920,
						gridheight:665,
						lazyType:"none",
						shadow:0,
						spinner:"spinner3",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
		<script>
					var htmlDivCss = '	#rev_slider_5_1_wrapper .tp-loader.spinner3 div { background-color: #ff8c00 !important; } ';
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
					</script>
					</div><!-- END REVOLUTION SLIDER -->