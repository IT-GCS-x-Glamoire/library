<style>
    footer {
        background-color: #ffde9e;
        padding: 20px;
        text-align: center;
        font-size: 14px;
        color: #000;
    }

    .cambridge {
        width: 140px;
        height: auto;
    }

    .school {
        width: 140px;
        height: auto;
    }

    #footer {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    #footer .d-flex {
        align-items: flex-end; /* pastikan kolom kanan mengikuti baris terakhir kiri */
    }

</style>

<footer class="px-4 py-0" id="footer">
 <div>
    <p class="hero-title chewy-regular text-uppercase"  style="letter-spacing: 6px;">Be more productive <br>by reading books</p>
 </div>
 <div class="d-flex gap-4 mb-3">
    <img src="{{asset('images/logo-school.png')}}" class="school">
    <img src="{{asset('images/lcnew.png')}}" class="cambridge">
 </div>
 <div class="d-flex">
    <div class="col-8 p-0">
        <p class="text-start text-sm">
            Behind the quiet bookshelves, this library is a place where imagination grows and curiosity finds answers.
            We believe that reading is not just an activity, but a window to a wider future.
            Our vision is to make libraries an inspirational space that supports the growth of generations of learners.
            By providing friendly and fun literacy access, we want to foster a love of learning from an early age, so that they are able to instill the habit of reading books until adulthood
            <br>
            {{-- <span class="fw-bold">
                &copy; 2025 Great Crystal School and Course Center. All rights reserved.
            </span> --}}
        </p>
    </div>
    <div class="col-4 p-0 d-flex flex-column justify-content-end" id="footer-social">
        <div class="d-flex justify-content-end gap-4 text-end pb-3">
            <a href="https://great.sch.id" class="text-dark dynapuff-regular">Our School</a>
            <a href="#" class="text-underlined text-dark dynapuff-regular">Academic System</a>
            <a href="#" class="text-underlined text-dark dynapuff-regular" data-toggle="modal" data-target="#contactUs">Contact Us</a>
        </div>
    </div>    
 </div>
</footer>