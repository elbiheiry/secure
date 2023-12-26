@extends('site.layouts.master')
@section('content')
    <!-- Revolution Slider 1 -->
    <div id="rev_slider_15_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="Secure Networks-2"
        data-source="gallery" style="background:#ffffff;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_15_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-55" data-transition="slidingoverlayleft" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="1000"
                    data-thumb="revslider2/100x50_36eb7-slider2-1.jpg" data-rotate="0" data-saveperformance="off"
                    data-title="Slide 1" data-param1="Additional Text" data-param2="" data-param3="" data-param4=""
                    data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                    data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ surl('images/sliders/slider1.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 2 -->
                    
                    @if (locale() == 'en')
                        <div class="tp-caption  " id="slide-55-layer-4" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['2','2','0','0']" data-fontsize="['60','60','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Quicksand;">
                        {{ locale() == 'en' ? 'Your Security is' : 'أمانكم هو' }}
                    </div>
                    @else
                        <div class="tp-caption  " id="slide-55-layer-4" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['2','2','0','0']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:cairo;">
                        {{ locale() == 'en' ? 'Your Security is' : 'أمانكم هو' }}
                    </div>
                    @endif
                    <!-- LAYER NR. 3 -->
                    
                    @if (locale() == 'en')
                        <div class="tp-caption  " id="slide-55-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['82','82','70','45']" data-fontsize="['60','60','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Quicksand;">
                        {!! locale() == 'en' ? 'Our <strong>Commitment !</strong>' : 'ما نتعهد به!' !!}
                    </div>
                    @else
                        <div class="tp-caption  " id="slide-55-layer-5" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['82','82','70','45']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:cairo;">
                        {!! locale() == 'en' ? 'Our <strong>Commitment !</strong>' : 'ما نتعهد به!' !!}
                    </div>
                    @endif
                    <!-- LAYER NR. 4 -->
                    @if (locale() == 'en')
                        <div class="tp-caption rev-btn " id="slide-55-layer-9" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','160','120']" data-lineheight="['30','25','25','25']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                        data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 700; color: #0a0505;font-family:Quicksand;background-color:rgb(208,187,121);border-color:rgb(208,187,121);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a>
                    </div>
                    @else
                        <div class="tp-caption rev-btn " id="slide-55-layer-9" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','160','120']" data-lineheight="['30','25','25','25']" data-width="none"
                        data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                        data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 700; color: #0a0505;font-family:cairo;background-color:rgb(208,187,121);border-color:rgb(208,187,121);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a>
                    </div>
                    @endif
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-70" data-transition="slidingoverlayleft" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                    data-masterspeed="1000" data-thumb="revslider2/100x50_4ee43-slider2-2.jpg" data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ surl('images/sliders/slider2.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 6 -->
                    
                        @if (locale() == 'en')
                        <div class="tp-caption  " id="slide-70-layer-4" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['2','2','0','0']" data-fontsize="['60','60','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Quicksand;">
                        {{ locale() == 'en' ? 'Be Aware' : 'خليك مستعد' }} ....</div>
                    @else
                        <div class="tp-caption  " id="slide-70-layer-4" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['2','2','0','0']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:cairo;">
                        {{ locale() == 'en' ? 'Be Aware' : 'خليك مستعد' }} ....</div>
                    @endif
                    <!-- LAYER NR. 7 -->
                    
                    @if (locale() == 'en')
                        <div class="tp-caption  " id="slide-70-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['82','82','70','45']" data-fontsize="['60','60','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Quicksand;">
                        <strong>{{ locale() == 'en' ? 'Be Secure' : 'خليك بأمان' }} !</strong>
                    </div>
                    @else
                        <div class="tp-caption  " id="slide-70-layer-5" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['82','82','70','45']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:cairo;">
                        <strong>{{ locale() == 'en' ? 'Be Secure' : 'خليك بأمان' }} !</strong>
                    </div>
                    @endif
                    <!-- LAYER NR. 8 -->
                    
                    @if (locale() == 'en')
                        <div class="tp-caption rev-btn " id="slide-70-layer-9" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','160','120']" data-lineheight="['30','25','25','25']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                        data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 700; color: #0a0505;font-family:Quicksand;background-color:rgb(208,187,121);border-color:rgb(208,187,121);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a>
                    </div>
                    @else
                        <div class="tp-caption rev-btn " id="slide-70-layer-9" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','160','120']" data-lineheight="['30','25','25','25']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                        data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 700; color: #0a0505;font-family:cairo;background-color:rgb(208,187,121);border-color:rgb(208,187,121);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a>
                    </div>
                    @endif
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-71" data-transition="slidingoverlayleft" data-slotamount="default"
                    data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                    data-masterspeed="1000" data-thumb="revslider2/100x50_281bc-slider6.jpg" data-rotate="0"
                    data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                    data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                    data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ surl('images/sliders/slider3.jpg') }}" alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 10 -->
                    
                    @if (locale() == 'en')
                        <div class="tp-caption  " id="slide-71-layer-4" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['2','2','0','0']" data-fontsize="['60','60','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Quicksand;">
                        <strong><a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a> </strong>
                    </div>
                    @else
                        <div class="tp-caption  " id="slide-71-layer-4" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['2','2','0','0']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:cairo;">
                        <strong><a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a> </strong>
                    </div>
                    @endif
                    <!-- LAYER NR. 11 -->
                    
                        @if (locale() == 'en')
                        <div class="tp-caption  " id="slide-71-layer-5" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['82','82','70','45']" data-fontsize="['60','60','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Quicksand;">
                        {{ locale() == 'en' ? 'for a Free Assessment' : 'للحصول على تقييم أمني مجاني.' }}</div>
                    @else
                        <div class="tp-caption  " id="slide-71-layer-5" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['82','82','70','45']" data-fontsize="['50','50','50','30']"
                        data-lineheight="['80','80','70','40']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 7; white-space: nowrap; font-size: 60px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:cairo;">
                        {{ locale() == 'en' ? 'for a Free Assessment' : 'للحصول على تقييم أمني مجاني.' }}</div>
                    @endif
                    <!-- LAYER NR. 12 -->
                    
                    @if (locale() == 'en')
                        <div class="tp-caption rev-btn " id="slide-71-layer-9" data-x="['left','left','left','left']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','160','120']" data-lineheight="['30','25','25','25']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                        data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 700; color: #0a0505;font-family:Quicksand;background-color:rgb(208,187,121);border-color:rgb(208,187,121);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a
                    </div>
                    @else
                        <div class="tp-caption rev-btn " id="slide-71-layer-9" data-x="['right','right','right','right']"
                        data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                        data-voffset="['190','190','160','120']" data-lineheight="['30','25','25','25']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                        data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"#","delay":""}]'
                        data-responsive_offset="on" data-responsive="off"
                        data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 8; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 700; color: #0a0505;font-family:cairo;background-color:rgb(208,187,121);border-color:rgb(208,187,121);border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                        <a href="{{ route('site.contact.index') }}">{{ locale() == 'en' ? 'Contact us' : 'تواصل معنا' }}</a
                    </div>
                    @endif
                </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!-- Revolution Slider 2 -->
    <!-- Section Services 1 -->
    <div id="section-services1">
        <div class="container">
            <div class="row">
                <div class="title1 col-12">
                    <h2>{{ locale() == 'en' ? 'Our Services' : 'خدماتنا' }}</h2>
                    <i class="flaticon-download"></i>
                </div>
                <!-- Item -->
                @foreach ($services as $service)
                    <div class="item col-sm-12 col-md-4">
                        <i class="{{ $service->icon }}"></i>
                        <h3>{{ $service->translate(locale())->name }}</h3>
                        <p>{!! \Str::limit($service->translate(locale())->description, 150) !!}</p>
                    </div>
                @endforeach

                <!-- /.Item -->
                <div class="col-sm-12 text-center">
                    <a href="{{ route('site.services') }}" class="btn-3">
                        {{ locale() == 'en' ? 'See more' : 'عرض المزيد' }}
                        <i class="fa fa-chevron-{{ locale() == 'en' ? 'right' : 'left' }}"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Services 1 -->
    <!-- Section About us -->
    <div id="section-howwework">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://www.youtube.com/watch?v=gQXn1kmF8To" class="popup-youtube">
                        <i class="flaticon-multimedia"></i>
                    </a>
                    <h1>{{ locale() == 'en' ? 'About us' : 'من نحن ' }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section About us -->
    <!-- Section Solutions -->
    <div id="section-aboutus2" class="v3">
        <div class="container">
            <div class="row">
                <div class="title1 col-12">
                    <h2>{{ locale() == 'en' ? 'Our Solutions' : 'حلولنا' }}</h2>
                    <i class="flaticon-download"></i>
                </div>
                @foreach ($solutions as $solution)
                    <div class="item col-sm-12 col-md-4 text-center mb-3">
                        <div class="item-content">
                            <i class="{{ $solution->icon }}"></i>
                            <h3>{{ $solution->translate(locale())->name }}</h3>
                        </div>
                    </div>
                @endforeach
                <div class="col-sm-12 text-center mt-5">
                    <a href="{{ route('site.solutions') }}" class="btn-3">
                        {{ locale() == 'en' ? 'See more' : 'عرض المزيد' }}
                        <i class="fa fa-chevron-{{ locale() == 'en' ? 'right' : 'left' }}"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section Solutions -->
    <!-- Section CTA 2 -->
    <div id="section-cta2">
        <div class="container">
            <div class="row">
                <div class="left col-sm-12 col-md-8">
                    <h2>{{ locale() == 'en' ? 'Do you need help with the development of your project?' : 'هل تحتاج إلي المساعدة في تطوير مشروعك ؟' }}
                    </h2>
                    <p>{{ locale() == 'en' ? 'Get in touch with us right now to get a meeting.' : 'تواصل معنا الان ' }}</p>
                </div>
                <div class="right col-sm-12 col-md-4">
                    <a href="{{ route('site.contact.index') }}"
                        class="btn-6">{{ locale() == 'en' ? 'Contact Us' : 'تواصل معنا' }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.Section CTA 2 -->
    <!-- Section Latest BLog 1 -->
    <div id="section-latestblog1">
        <div class="container">
            <div class="row">
                <div class="title3 ez-animate col-sm-12 col-md-6 animated fadeInRight" data-animation="fadeInRight"
                    style="animation-delay: 0s; opacity: 1;">
                    <h6>{{ locale() == 'en' ? 'OUR BLOG' : 'المدونة' }}</h6>
                    <h2>{{ locale() == 'en' ? 'The Most Recent News' : 'أخر الأخبار' }}</h2>
                    <i class="flaticon-download"></i>
                </div>
                <div class="title-hr ez-animate col-sm-12 col-md-6 animated fadeInLeft" data-animation="fadeInLeft"
                    style="animation-delay: 0s; opacity: 1;"></div>
                <!-- Item -->
                @foreach ($articles as $article)
                    <div class="item col-12 col-md-6 col-lg-4">
                        <a href="{{ route('site.article', ['article' => $article->slug]) }}">
                            <div class="content">
                                <span></span>
                                <h3>{{ $article->translate(locale())->title }}</h3>
                                <p>{!! \Str::limit($article->translate(locale())->description, 150) !!}</p>
                            </div>
                            <div class="image">
                                <img class="img-fluid" src="{{ $article->image_path }}" alt="Secure Networks">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /.Section Latest BLog 1 -->
    <!-- Section Contact -->
    <div id="section-contact">
        <div class="container">
            <div class="row">
                <div class="title1 col-12">
                    <h2>{{ locale() == 'en' ? 'Get in Touch' : 'تواصل معنا' }}</h2>
                </div>
                <!-- Contact Details -->
                <div class="contact-details col-sm-12 p-3">
                    <div class="row justify-content-center">
                        @foreach ($branches as $branch)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <!-- Item -->
                                <div class="item">
                                    <div class="thumb-icon">
                                        <img src="{{ $branch->image_path }}" alt="">
                                    </div>
                                    <div class="description">
                                        <p>{{ $branch->translate(locale())->address }} </p>
                                    </div>
                                </div>
                                <!-- /.Item -->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /.Contact Details -->
                <!-- Contact Form -->
                <div class="contact-form col-sm-12">
                    <!-- Form -->
                    <form class="contact-form" action="{{ route('site.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" name="name"
                                    placeholder="{{ locale() == 'en' ? 'Name' : 'الإسم بالكامل' }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="email" class="form-control" name="email"
                                    placeholder="{{ locale() == 'en' ? 'Email' : 'البريد الإلكتروني' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" name="phone"
                                    placeholder="{{ locale() == 'en' ? 'Phone number' : 'رقم الهاتف' }}">
                            </div>
                            <div class="form-group col-sm-12 col-md-12 col-lg-6">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="{{ locale() == 'en' ? 'Subject' : 'عنوان الرساله' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <textarea class="form-control" name="message" placeholder="{{ locale() == 'en' ? 'Message' : 'الرسالة' }}"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <button type="submit">{{ locale() == 'en' ? 'Submit' : 'تأكيد' }}</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.Form -->
                </div>
                <!-- /.Contact Form -->
            </div>
        </div>
    </div>
@endsection
