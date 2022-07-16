<div class="container-fluid light-wrapper">
    <div class="container-margin inner">
      <h2 class="section-title mb-40 text-center">Extra Mile Support</h2>
      <div class="row gutter-50">
        @foreach($extramiles as $extramile)
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row justify-content-center">
                    <div>
                        <div class="icon color-rose fs-38 mr-25">{!! $extramile->logo !!}</div>
                    </div>
                    <div>
                        <h5>{{$extramile->title}}</h5>
                        <p>{{$extramile->short_description}}</p>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
  </div>
