    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Departments</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <ul class="nav nav-tabs flex-column">

@foreach ($departments as $department)
    
<li class="nav-item">
  <a class="nav-link show" data-bs-toggle="tab" href="#tab-{{$department->id}}"><h4>{{$department->name}}</h4></a>
</li>

@endforeach


              </ul>
            </div>
            <div class="col-lg-8">
              <div class="tab-content">

                @foreach ($departments as $department)
                    
                <div class="tab-pane " id="tab-{{$department->id}}">
                  <h3>{{$department->name}}</h3>
                  <p class="fst-italic">{{$department->desc}}</p>
                  <img src="{{ asset('frontend/assets/img/' . $department->image) }}" width="400" alt="" class="img-fluid">
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>

                @endforeach



              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Departments Section -->
  
  