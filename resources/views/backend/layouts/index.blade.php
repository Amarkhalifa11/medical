@include('backend.layouts.header')
@include('backend.layouts.aside')



<main id="main" class="main">

    <section class="section dashboard">
        <div class="row">

            @yield('content')
        </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->

@include('backend.layouts.footer')
