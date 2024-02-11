    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Frequently Asked Questioins</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
  
          <ul class="faq-list">
  
            @foreach ($asks as $ask)
                

            <li>
              <div data-bs-toggle="collapse" class="collapsed question" href="#faq{{$ask->id}}">{{$ask->ask}}? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
              <div id="faq{{$ask->id}}" class="collapse" data-bs-parent=".faq-list">
                <p>
                  {{$ask->answer}}.
                </p>
              </div>
            </li>

            @endforeach

          </ul>
  
        </div>
      </section><!-- End Frequently Asked Questioins Section -->
  