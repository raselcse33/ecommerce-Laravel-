
@extends('front.layouts.main')

@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h3 >Contact</h3>
        <h4><a href="index.html">Home</a><label>/</label>Contact</h4>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="spec ">
            <h3>Contact</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" contact-w3">	
            <div class="col-md-5 contact-right">	
                {{-- <img src="images/cac.jpg" class="img-responsive" alt=""> --}}
                <iframe src="{{$address->map_link}}" style="border:0"></iframe>
            </div>
            <div class="col-md-7 contact-left">
                <h4>Contact Information</h4>
                <p>{!! $address->address !!}</p>
                <div id="container">
                    <!--Horizontal Tab-->
                    <div id="parentHorizontalTab">
                       {{--  <ul class="resp-tabs-list hor_1">
                            <li><i class="fa fa-envelope" aria-hidden="true"></i></li>
                            <li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
                            <li> <i class="fa fa-phone" aria-hidden="true"></i></li>
                        </ul> --}}
                        <hr>
                        <div style="margin-top: 5px" class="resp-tabs-container hor_1">
                            <div>
                                <form action="{{route('store.contact')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="text" class="form-control"  name="name" placeholder="Enter name" required="">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required="">
                                    <textarea name="message" class="form-control" placeholder="write message......" required=""></textarea>
                                    <input type="submit" value="Submit" >
                                </form>
                            </div>
                          {{--   <div>
                                <div class="map-grid">
                                    <h5>Our Branches</h5>
                                    <ul>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 Global Place, New York.</li>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 global Place, New York.</li>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, USA.</li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="map-grid">
                                    <h5>Contact Me Through</h5>
                                    <ul>
                                        <li>Mobile No : +123 456 7890</li>
                                        <li>Office No : +123 222 2222</li>
                                        <li>Home No : +123 456 7890</li>
                                        <li>Fax No : +123 456 7890</li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <!--Plug-in Initialisation-->
                <script type="text/javascript">
                    $(document).ready(function () {
                        //Horizontal Tab
                        $('#parentHorizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            tabidentify: 'hor_1', // The tab groups identifier
                            activate: function (event) { // Callback function if tab is switched
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });

                        // Child Tab
                        $('#ChildVerticalTab_1').easyResponsiveTabs({
                            type: 'vertical',
                            width: 'auto',
                            fit: true,
                            tabidentify: 'ver_1', // The tab groups identifier
                            activetab_bg: '#fff', // background color for active tabs in this group
                            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
                            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
                            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
                        });

                        //Vertical Tab
                        $('#parentVerticalTab').easyResponsiveTabs({
                            type: 'vertical', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true, // 100% fit in a container
                            closed: 'accordion', // Start closed if in accordion view
                            tabidentify: 'hor_1', // The tab groups identifier
                            activate: function (event) { // Callback function if tab is switched
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo2');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });
                    });
                </script>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //contact -->
@endsection