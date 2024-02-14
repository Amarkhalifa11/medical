    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Make an Appointment</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <form action="{{ route('frontend.apport.store') }}" method="post" role="form"  >
            @csrf
            <div class="row">
              <div class="col-md-4 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-4 form-group mt-3 mt-md-0">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 form-group mt-3">
                <input type="date" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="department" id="department" class="form-select">
                  <option value="">Select Department</option>
                  @foreach ($Department as $item)
                  <option value="{{$item->name}}">{{$item->name}}</option>
                  @endforeach

                </select>
              </div>
              <div class="col-md-4 form-group mt-3">
                <select name="doctor" id="doctor" class="form-select">
                  <option value="">Select Doctor</option>
                  @foreach ($doctors as $item)
                  <option value="{{$item->name}}">{{$item->name}}</option>
                  @endforeach

                </select>
              </div>
            </div>
  
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            </div>

            <div class="text-center"><button class="btn btn-primary" type="submit">Make an Appointment</button></div>
          </form>
  
        </div>
      </section><!-- End Appointment Section -->
  