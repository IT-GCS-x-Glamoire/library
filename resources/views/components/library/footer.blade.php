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


    @media(max-width:480px){
        #footer {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        #footer .d-flex {
            align-items: flex-start; /* pastikan kolom kanan mengikuti baris terakhir kiri */
        }
    }

    .custom-shape-divider-bottom-1745986851 {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        line-height: 0;
    }

    .custom-shape-divider-bottom-1745986851 svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 205px;
    }

    .custom-shape-divider-bottom-1745986851 .shape-fill {
        fill: #FFFFFF;
    }
</style>

<footer class="px-4 py-0 yellow-bg" id="footer">
 <div class="d-none d-md-block">
    <p class="wave-title"  style="letter-spacing: 6px;">
        <span>Be</span> <span>mo</span><span>re</span> <span>pro</span><span>duc</span><span>tive</span>
        <br>
        <span>by</span> <span>rea</span><span>ding</span> <span>bo</span><span>oks</span>
    </p>
 </div>
 <div class="d-flex gap-4 mb-3">
    <img src="{{asset('images/logo-school.png')}}" class="school">
    <img src="{{asset('images/lcnew.png')}}" class="cambridge">
 </div>
 <div class="grid d-lg-flex">
    <div class="col-12 col-lg-8 p-0">
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
    <div class="col-12 col-md-4 p-0 d-flex flex-column justify-content-end" id="footer-social">
        <div class="d-flex justify-content-end gap-4 text-end pb-3">
            <a href="https://great.sch.id" class="text-dark dynapuff-regular" target="_blank">Our School</a>
            <a href="#" class="text-underlined text-dark dynapuff-regular" target="_blank">Academic System</a>
            <a href="#" class="text-underlined text-dark dynapuff-regular" data-toggle="modal" data-target="#contactUs" target="_blank">Contact Us</a>
        </div>
    </div>    
 </div>
</footer>