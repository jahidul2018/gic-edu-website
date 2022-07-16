
<div class="wrapper gray-wrapper">
  <div class="container inner">
    <div class="row align-items-start">
      <div class="col-lg-6">
        <div>
          <figure><img src="{{asset('/frontend/style/images/art/about8.png')}}" alt="" /></figure>
          <div class="box bg-white shadow p-30 position-absolute" style="top: 73%; left: 10%;">
            <address> Address: Plot-56/B (Ground Floor), <br />Road 132, Gulshan-1, Dhaka 1212,Bangladesh </address>
             Phone: 09678744226 </div>
          <!--/.box -->
        </div>
      </div>
      <!--/column -->
      <div class="space80 d-lg-none"></div>
      <div class="space80 d-lg-none"></div>
      <div class="col-lg-6 pl-60 pl-md-15">
        <h2 class="section-title">Contact Us</h2>
        <p class="lead larger">Have any questions? Reach out to us from our contact form and we will get back to you shortly.</p>
        <div class="space30"></div>
          @include('flash_message')
          <form action="{{route('store.contact')}}" class="fields-white" method="post" enctype="multipart/form-data">
            @csrf
            <div class="messages"></div>
            <div class="controls">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_name" type="text" name="first_name" class="form-control" placeholder="First Name *" required="required" data-error="First Name is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Last Name *" required="required" data-error="Last Name is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Message is required."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-send" value="Send message">Submit</button>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12">
                  <p class="text-muted"><strong>*</strong> These fields are required.</p>
                </div>
              </div>
            </div>
          </form>

        <!-- /form -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
    <div class="space40"></div>
  </div>
  <!-- /.container -->
</div>
