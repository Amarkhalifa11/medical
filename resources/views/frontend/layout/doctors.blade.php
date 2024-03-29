    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Doctors</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row">
  
            @foreach ($doctors as $doctor)
                
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{ asset('frontend/assets/img/doctors/' . $doctor->image) }}" class="img-fluid" alt="">
                  <div class="social">
                    <a href="{{$doctor->twitter}}"><i class="bi bi-twitter"></i></a>
                    <a href="{{$doctor->facebook}}"><i class="bi bi-facebook"></i></a>
                    <a href="{{$doctor->instagram}}"><i class="bi bi-instagram"></i></a>
                    <a href="{{$doctor->linkiden}}"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>{{$doctor->name}}</h4>
                  <h4>{{$doctor->depart->name}}</h4>
                  <span>{{$doctor->desc}}</span>
                </div>
              </div>
            </div>

            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Doctors Section -->
  