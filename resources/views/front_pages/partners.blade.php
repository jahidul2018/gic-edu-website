@extends('layouts.frontend_layout.main')
@section('frontpage_content')
<div class="content-wrapper">
    <div class="wrapper light-wrapper page-title-wrapper">
        <div class="container inner text-center">
        <h1 class="page-title">Partners</h1>
        <p class="lead">Universities and Colleges we are partners with.</p>
        </div>
        <div class="space10"></div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
    <div class="wrapper light-wrapper">
        <div class="container inner">
        <div class="grid grid-view boxed">
            <div class="isotope-filter text-center">
            <ul>
                <li><a class="button active" data-filter="*">All</a></li>
                @foreach($countries as $country)
                    @if($country->partners->count() > 0)
                        <li><a class="button" data-filter=".{{$country->countryName}}">{{$country->countryName}}</a></li>
                    @endif
                @endforeach
            </ul>
            </div>
            <div class="clearfix"></div>
            <div class="tiles text-center light-gallery-wrapper">
            <div class="row isotope">
                @foreach($countries as $country)
                    @foreach($country->partners as $partner)
                        <div class="item grid-sizer col-md-6 col-lg-4 corporate {{$country->countryName}}">
                            <div class="box bg-white shadow p-30">
                                <figure class="main overlay overlay2 rounded mb-30"><a href="{{$partner->link}}" target="_blank"> <img style="height: 200px;width: 200px;object-fit: contain;" src="{{asset('/storage/partner/'.$partner->image)}}" alt="" /></a></figure>
                                <div class="post-content">
                                <h2 class="post-title mb-10"><a href="{{$partner->link}}" target="_blank">{{$partner->name}}</a></h2>
                                <div class="meta mb-0">{{$partner->country->countryName}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <!-- /.row -->
            </div>
            <!-- /.tiles -->
        </div>
        <!-- /.grid -->
        </div>
        <!-- /.container -->
    </div>
</div>
@endsection

@section('custom-script')
<script>
    
</script>
@endsection