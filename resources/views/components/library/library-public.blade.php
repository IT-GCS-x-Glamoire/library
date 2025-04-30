@extends('components.library.master')

@section('content')

<style>
  .custom-modal {
    padding: 50px;
    background-color: #ffde9e;
    color: #000;
    /* border-radius: 70% 80% 60% 80% / 50% 40% 70% 40%; */
    border-radius: 76% 24% 64% 36% / 16% 70% 30% 84% ;
    border: 3px solid #ffcc00;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  }
</style>

<div class="section overflow-hidden hero-content" style="background-image: url('images/symbol-scatter-haikei-14.svg');background-size: ; background-position: ;">
  <div class="container text-center" style="position: relative;z-index: 2;">
    <h1 class="hero-title chewy-regular text-uppercase">Welcome to great crystal library</h1>
    <p class="hero-subtitle fw-bold py-4 text-lg d-none d-md-block dynapuff-regular" style="letter-spacing: 1px;">GREAT CRYSTAL SCHOOL & COURSE CENTER<br><span class="text-lg">SURABAYA, EAST JAVA</span></p>
    <a href="/explore-library" class="btn-explore"><span class="text-lg">EXPLORE</span></a>
  </div>
  <img src="{{ asset('images/greta-baca-buku.png') }}" alt="Mascot" class="hero-mascot d-none d-md-block">
  <img src="{{ asset('images/greta-greti-baju-olga.png') }}" class="hero-mascot-bottom-left d-none d-md-block" alt="">
  {{-- <img src="{{ asset('images/greti-baca-buku.png') }}" class="hero-mascot-bottom-left" alt=""> --}}
  <p class="quote d-none d-md-block" data-aos="fade-up" data-aos-easing="ease-out-cubic">
    "The more that you read, the more things you will know. The more that you learn, the more places you’ll go." - Dr. Seuss
  </p>
</div>

{{-- WELCOME TO LIBRARY --}}
<div class="section yellow-bg" style="position: relative;z-index: 2;background-image: url('images/symbol-scatter-haikei-14.svg');background-size: ;
  background-position: ;">
  <h1 class="container-title chewy-regular text-uppercase" data-aos="fade-down" data-aos-easing="ease-out-cubic" style="position: relative;z-index: 2;">Let's Go to the Library!</h1>
  <div class="content-welcome">
    {{-- <div class="container d-flex align-items-center justify-content-center"> --}}
      <div class="row d-flex g-4 align-items-center justify-content-center">
        <div class="card-intro" data-aos="fade-right" data-aos-easing="ease-out-cubic">
          <img src="{{ asset('images/library.jpg')}}" class="img-fluid img-inside-intro" alt="bglibrary">
        </div>
        <div class="col-12 col-md-10 col-lg-7">
          <div class="row d-flex">
            <div class="col-md-6 mb-4" data-aos="flip-up" data-aos-easing="ease-out-cubic">
              <a class="card-content" href="/explore-library">
                <h4 class="fw-bold card-wave-title">
                <span>📚</span> <span>C</span><span>o</span><span>l</span><span>l</span><span>e</span><span>c</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span></h4>
              </a>
            </div>
        
            <div class="col-md-6 mb-4" data-aos="flip-down" data-aos-easing="ease-out-cubic">
              <a class="card-content" href="/facility">
                <h4 class="fw-bold card-wave-title">
                  <span>🏫</span> <span>F</span><span>a</span><span>c</span><span>i</span><span>l</span><span>i</span><span>t</span><span>i</span><span>e</span><span>s</span></h4>
                </a>
            </div>
        
            <div class="col-md-6 mb-4" data-aos="flip-up" data-aos-easing="ease-out-cubic">
              <a class="card-content" href="/others">
                <h4 class="fw-bold card-wave-title"><span>📎</span> <span>O</span><span>t</span><span>h</span><span>e</span><span>r</span><span>s</span></h4>
              </a>
            </div>
  
            <div class="col-md-6 mb-4" data-aos="flip-down" data-aos-easing="ease-out-cubic">
              <a class="card-content" href="/visit">
                <h4 class="fw-bold card-wave-title"><span>🏫</span> <span>V</span><span>i</span><span>s</span><span>i</span><span>t</span><span>s</span></h4>
              </a>
            </div>
          </div>

        </div>
      </div>
    {{-- </div> --}}
  </div>
  {{-- <div class="custom-shape-divider-top-1745815258">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
    </svg>
  </div> --}}
  <div class="custom-shape-divider-bottom-1744617338">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M741,116.23C291,117.43,0,27.57,0,6V120H1200V6C1200,27.93,1186.4,119.83,741,116.23Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
{{-- END WELCOME TO LIBRARY --}}

{{-- GROW YOUR BRAIN --}}
<div class="section orange-bg">
  <div class="content-grow">
    <h2 class="container-title chewy-regular text-uppercase mb-3" data-aos="zoom-in-down">🧠 Grow Your Brain at the Library</h2>
    <p class="description" data-aos="zoom-out">The library is not just a place to borrow books—here you can grow into a smarter, more creative, and independent person!</p>
  
    <div class="row-benefits">
      <div class="benefit-card" data-aos="zoom-out-left" data-aos-easing="ease-out-cubic" data-aos-duration="400">
        <img src="{{ asset('images/page_3.png') }}" alt="Reading Icon" class="benefit-icon">
        <h4 class="fw-bold" style="font-size:  clamp(1.4rem, 0.8rem, 2rem);">📖 Increase Knowledge</h4>
        <p style="font-size:  clamp(1.2rem, 0.2rem, 1.4rem);">Every book is a window to the world. Discover new information and hone your curiosity.</p>
      </div>
      <div class="benefit-card" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="200">
        <img src="{{ asset('images/page_1.png') }}" alt="Creativity Icon" class="benefit-icon">
        <h4 class="fw-bold" style="font-size:  clamp(1.4rem, 0.8rem, 2rem);">🎨 Increase Creativity</h4>
        <p style="font-size:  clamp(1.2rem, 0.2rem, 1.4rem);">With storybooks, poems, and comics—your imagination can flourish without limits!</p>
      </div>
      <div class="benefit-card" data-aos="zoom-out-right" data-aos-easing="ease-out-cubic" data-aos-duration="300">
        <img src="{{ asset('images/page_9.png') }}" alt="Focus Icon" class="benefit-icon">
        <h4 class="fw-bold" style="font-size:  clamp(1.4rem, 0.8rem, 2rem);">🧘 Learn Focus & Concentration</h4>
        <p style="font-size:  clamp(1.2rem, 0.2rem, 1.4rem);">A quiet reading room helps you learn to be more concentrated and disciplined.</p>
      </div>
    </div>
  </div>
</div>
{{-- END GROW YOUR BRAIN --}}

{{-- FAKTA MENARIK --}}
<div class="section yellow-bg py-5">
  <div class="container" id="fun-facts" style="position: relative;z-index: 2;">
    <h2 class="container-title wave-title mb-5" data-aos="zoom-out-down">
      <span>🌍</span><span>F</span><span>U</span><span>N</span> 
      <span>F</span><span>A</span><span>C</span><span>T</span><span>S</span>
    </h2>

    <div class="row justify-content-center" style="z-index: 999;" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="900">
      @foreach($randoms as $index => $item)
      <div class="col-12 col-md-4 mb-4 fun-fact-card">
          <div class="fun-card-custom position-relative d-flex flex-column justify-content-center align-items-center text-center rotate-{{ $index }}">
              <div class="flower-shape d-flex justify-content-center align-items-center">
                  <h5 class="text-white fw-bold dynapuff-regular mb-0 px-3 text-xl">{{ $item['title'] }}</h5>
              </div>
              <img src="{{ asset('images/greta-face.png') }}" alt="Fact Icon" class="img-fluid my-3" style="width: 50%;">
              <div class="dynapuff-regular px-3 text-dark text-lg">
                  {{ $item['description'] }}
              </div>
          </div>
      </div>
      @endforeach
    </div>  
    <div>
      <a href="/others" class="btn-fun-fact"><span class="dynapuff-regular" >More Fact 👀</span></a>
    </div>
  </div>
  <div class="custom-shape-divider-top-1744620027" style="z-index: 1;">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
  </div>  
  <div class="custom-shape-divider-bottom-1744696324" style="z-index: 1;">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V6c0,21.6,291,111.46,741,110.26,445.39,3.6,459-88.3,459-110.26V0Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
{{-- END FAKTA MENARIK --}}

{{-- KUNJUNGAN --}}
<div class="section py-5 d-flex align-items-center justify-content-center text-center" style="background-image: url('images/circle-scatter-haikei.svg');background-size: cover; 
  background-position: center;">
  <div class="container borrow-content text-center" id="how-to-borrow">
    <div data-aos="fade-right">
      <h2 class="container-title chewy-regular text-uppercase mb-5">
        🏫 Visit Great Crystal Library !
      </h2>
      <h5 class="text-xl mb-5">Step into a world of imagination, knowledge, and discovery — all in one place!</h5>
    </div>
    <div class="row g-4">
      <!-- Maskot -->
      <div class="card-facility" data-aos="zoom-out-right">
        <img src="{{ asset('images/IMG_1484.jpg') }}" alt="Library" class="img-inside-polygon" />
      </div>      
      <div class="col-12 col-md-3 col-lg-6 d-flex justify-content-center align-items-center text-center" data-aos="zoom-out-down">
        <img src="{{ asset('images/greta-greti-baju-olga.png') }}" class="img-fluid" alt="Mascot">
      </div>
      <div class="card-facility" data-aos="zoom-out-left">
        <img src="{{ asset('images/welcome-library.jpg') }}" alt="Library" class="img-inside-polygon" />
      </div>      
    </div>
    <div class="d-flex justify-content-center align-items-center text-center">
      <a href="/visit" class="btn-visit"><span class="dynapuff-regular text-xl">Visit 👀</span></a>
    </div>
  </div>
</div>

{{-- PEMINJAMAN BUKU --}}
<!-- Wrapper Section -->
<div class="section orange-bg" style="background-image: url('images/blob-haikei-mid.svg'); background-size: cover; background-position: center;">
  <div class="container borrow-content position-relative" id="how-to-borrow">

    <!-- Title -->
    <div class="text-center mb-5">
      <h4 class="container-title wave-title">
        <span>📖 </span>
        <span>H</span><span>ow</span> <span>to</span>  <br class="d-md-none">
        <span>Bor</span><span>row</span> 
        <span>a</span> 
        <span>Bo</span><span>ok?</span> </h4>
    </div>

    <!-- Row 1: Step 1 & Step 2 -->
    <div class="row mb-4 g-4">
      <div class="col-md-6 d-flex justify-content-start align-items-center text-center" data-aos="fade-right">
        <div class="card-step-1">
          <p class="dynapuff-regular px-3 text-dark how-to">
            <strong class="how-to">Click</strong> the <span class="tex-dark"><a href="/explore-library" class="how-to text-danger font-underlined">📔 reserve</a></span><br>
            button on card book in menu explore.
          </p>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-end align-items-end text-center" data-aos="fade-left">
        <div class="card-step-2">
          <p class="dynapuff-regular px-3 text-dark how-to">
            <strong class="how-to">Select</strong> the <span class="text-success how-to">🗓️ date and time</span> you want to book.
          </p>
        </div>
      </div>
    </div>

    <!-- Row 2: Mascot Image Centered, Positioned Absolutely -->
    <div class="position-relative" style="height: 40px;">
      <img src="{{ asset('images/greti-baca-buku.png') }}" 
      class="img-fluid d-none d-md-block mascot-book"
      alt="greti">
    </div>

    <!-- Row 3 & 4: Step 3 & Step 4 -->
    <div class="row md:mt-4 g-4">
      <div class="col-md-6 d-flex justify-content-start align-items-center text-center" data-aos="fade-right">
        <div class="card-step-3">
          <p class="dynapuff-regular px-3 text-dark how-to">
            <strong class="how-to">Fill in</strong> your personal details and <span class="text-info how-to">✅ confirm</span> your booking.
          </p>
        </div>
      </div>
      <div class="col-md-6 d-flex justify-content-end align-items-end text-center" data-aos="fade-left">
        <div class="card-step-4">
          <p class="dynapuff-regular px-3 text-dark how-to">
            <strong class="how-to">Check</strong> your email for the <span class="text-warning how-to">📨 confirmation message</span>.
          </p>
        </div>
      </div>
    </div>
    <a href="/explore-library" class="btn-search-book mt-4 md:mt-0"><span class="dynapuff-regular how-to">Search Book 🔎</span></a>
  </div>
</div>

{{-- <div class="custom-shape-divider-bottom-1744618158">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
  </svg>
</div>
<div class="custom-shape-divider-bottom-1744618158">
  <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
      <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
      <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
  </svg>
</div> --}}

@include('components.library.footer')

@if ($reminder != null)
  @if (count($reminder) > 0)
    <div class="modal fade" id="modalReminder" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content border-0 shadow-lg rounded-4">
          <div class="modal-header bg-warning bg-gradient text-dark rounded-top">
            <h5 class="modal-title">
              📚 Book Return Reminder
            </h5>
            <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body p-4">
            <div class="row mb-3 align-items-center">
              <div class="col-3 text-center">
                <img src="{{ asset('images/greta-care.png') }}" alt="Reminder" class="img-fluid" style="height: 70px;">
              </div>
              <div class="col-9">
                <div class="alert alert-danger mb-0 py-2 px-3" style="font-size: 0.95rem;">
                  ⚠️ <strong>Oops!</strong> Jangan lupa kembalikan bukunya sebelum batas waktu ya~ 📅
                </div>
              </div>
            </div>

            <div class="list-group">
              @foreach ($reminder as $index => $re)
                <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                  <div>
                    <span class="badge badge-pill badge-primary mr-2">{{ $index + 1 }}</span>
                    <strong>{{ ucwords($re->book['title']) }}</strong>
                  </div>
                  <span class="badge badge-pill badge-danger">
                    {{ \Carbon\Carbon::parse($re->return_date)->translatedFormat('l, d F Y') }}
                  </span>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
@endif

<div class="modal fade" id="modalCS" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
    <div class="modal-content border-0 shadow-lg rounded-4">
      <div class="modal-header bg-warning bg-gradient text-dark rounded-top-4 d-flex align-items-center">
        <h5 class="modal-title fw-bold chewy-regular">
          🤝 Need Help? Talk to Us!
        </h5>
        <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body p-4">
        <div class="d-flex align-items-center gap-3">
          <div class="flex-shrink-0">
            <img src="{{ asset('images/greta-care.png') }}" alt="Greta Care" class="img-fluid" style="max-height: 100px;">
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="mb-2" style="font-size: 1rem;">
              <strong>Hai! 👋</strong> Jika kamu punya pertanyaan tentang peminjaman atau pengembalian buku, langsung hubungi kami ya!
            </p>
            <div class="border-top pt-2 mt-2">
              <p class="mb-1"><strong class="chewy-regular">📞 Call Center:</strong> <a href="tel:0566523366" class="text-dark">0566-52-3366</a></p>
              <p class="mb-0"><strong class="chewy-regular">📧 Email:</strong> <a href="mailto:cs@greatcrystalschool.sch.id" class="text-dark">cs@greatcrystalschool.sch.id</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@if ($reminder != null)
  @if (count($reminder) > 0)
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#modalReminder').modal('show');
    });
    </script>
  @endif
@endif
@endsection
