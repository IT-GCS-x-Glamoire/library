<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
        <img loading="lazy" src="{{ asset('/images') }}/logo-school.png" class="img-fluid img-thumbnail" alt="Sample image">
    </a>

    <div class="sidebar">
        <div class="user-panel py-2 d-flex" style="margin-top: 3rem;">
            <div class="image">
                <img loading="lazy" src="{{ asset('images/admin.png') }}" class="img-circle elevation-2" alt="">
            </div>
            <div class="info">
                <a class="d-block brand-text" style="font-size: 1.2em;">
                    @if (session('role') == 'library')
                        Admin Perpustakaan
                    @else
                        {{ ucwords(strtolower(Str::words(session('name_user'), 2, ''))) }}
                    @endif
                </a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="true">

                <!-- DASHBOARD -->
                @if (session('role') == 'superadmin')
                    <li class="nav-item">
                        <a href="{{ url('/superadmin/dashboard') }}"
                            class="nav-link {{ session('page') && session('page')->page == 'dashboard' ? 'active' : '' }}">
                            <i class="mr-2">
                                <img loading="lazy" src="{{ asset('images/dashboard.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold ">Dashboard</p>
                        </a>
                    </li>
                @elseif (session('role') == 'admin')
                    <li class="nav-item">
                        <a href="{{ url('/admin/dashboard') }}"
                            class="nav-link {{ session('page') && session('page')->page == 'dashboard' ? 'active' : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/dashboard.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold ">Dashboard</p>
                        </a>
                    </li>
                @elseif (session('role') == 'teacher')
                    <li class="nav-item">
                        <a href="{{ url('/teacher/dashboard') }}"
                            class="nav-link {{ session('page') && session('page')->page == 'dashboard' ? 'active' : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/dashboard.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold ">Dashboard</p>
                        </a>
                    </li>
                @elseif (session('role') == 'student' || session('role') == 'parent')
                    <li class="nav-item">
                        <a href="{{ url('/' . session('role') . '/dashboard') }}"
                            class="nav-link {{ session('page') && session('page')->page == 'dashboard' ? 'active' : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/dashboard.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold ">Dashboard</p>
                        </a>
                    </li>
                @elseif (session('role') == 'library')
                    <li class="nav-item">
                        <a href="{{ url('/' . session('role') . '/dashboard') }}"
                            class="nav-link {{ session('page') && session('page')->page == 'dashboard' ? 'active' : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/dashboard.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold ">Dashboard</p>
                        </a>
                    </li>
                @endif
                <!-- END DASHBOARD -->

                {{-- LIBRARY --}}
                @if (session('role') == 'superadmin' || session('role') == 'library')
                    <li class="nav-item">
                        <a href="/library" class="nav-link {{ session('page') && session('page')->child ? (session('page')->child == 'library' ? 'active' : '') : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/library.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold">
                                Data
                            </p>
                        </a>
                    </li>
                    
                    @if (session('role') != "teacher" || session('role') !== "parent")
                    <li class="nav-item">
                        <a href="/library-public" class="nav-link {{ session('page') && session('page')->child ? (session('page')->child == 'library-public' ? 'active' : '') : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/library.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold">
                                Perpustakaan
                            </p>
                        </a>
                    </li>
                    @endif
                        

                    <li class="nav-item">
                        <a href="/reserve-book" class="nav-link {{ session('page') && session('page')->child ? (session('page')->child == 'reserve' ? 'active' : '') : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/library.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold">
                                Peminjaman
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/visitor" class="nav-link {{ session('page') && session('page')->child ? (session('page')->child == 'visitor' ? 'active' : '') : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/library.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold">
                                Pengunjung
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/plan-visit" class="nav-link {{ session('page') && session('page')->child ? (session('page')->child == 'plan visit' ? 'active' : '') : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/library.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold">
                                Pengunjung Umum
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/create-article-library" class="nav-link {{ session('page') && session('page')->child ? (session('page')->child == 'article' ? 'active' : '') : '' }}">
                            <i class="">
                                <img loading="lazy" src="{{ asset('images/library.png') }}" class="" alt="User Image"
                                    style="width: 32px; height: 32px; object-fit: cover;">
                            </i>
                            <p class="text-bold">
                                Fun Fact
                            </p>
                        </a>
                    </li>
                @endif
                {{-- END LIBRARY --}}
            </ul>
        </nav>
        
    </div>
</aside>

<div class="modal fade" id="modal-change-password"
    data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="change-password-form" action="" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="cspassword">Password</label>
                        <input name="password" type="password" class="form-control" id="cspassword"
                        oninput="this.type='text'" onblur="this.type='password'">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function setSemester(semester) {
        fetch('/save-semester-session', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel
                },
                body: JSON.strinpngy({
                    semester: semester
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Failed to set semester. Please try again.');
                }
            })
            .catch(error => console.error('Error:', error));
    }

    function setAcademicYear(year) {
        fetch('/save-academicyear-session', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for Laravel
                },
                body: JSON.strinpngy({
                    year: year
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Failed to change academic year. Please try again.');
                }
            })
            .catch(error => console.error('Error:', error));
    }
</script>

@if (session('role') == 'parent' || session('role') == 'student')
  <script>
    $(document).ready(function() {
        // Function to handle report link clicks
        function handleReportLink(e) {
            e.preventDefault();

            // Get the target URL
            const originalUrl = $(this).attr('href');

            // Determine the check URL based on the clicked link
            let checkUrl;
            if (originalUrl.includes('/midreport')) {
                checkUrl = originalUrl.replace('/midreport', '/check-midreport-access');
            } else if (originalUrl.includes('/report')) {
                checkUrl = originalUrl.replace('/report', '/check-report-access');
            }

            // Make an AJAX request to check access
            $.ajax({
                url: checkUrl,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'error') {
                        // Show SweetAlert error message
                        Swal.fire({
                            title: 'Access Denied',
                            text: response.message,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        // If access is granted, open the report in a new tab
                        window.open(originalUrl, '_blank');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error checking report access:', error);
                    Swal.fire({
                        title: 'Error',
                        text: 'An error occurred while checking report access. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        }

        // Attach event handlers to report links
        $('a[href*="/dashboard/midreport"]').click(handleReportLink);
        $('a[href*="/dashboard/report"]').click(handleReportLink);
    });

    $(document).ready(function () {
        $(".change-password-btn-user").click(function () {
            var userId = $(this).data("id");

            // Pastikan route di-encode dengan benar
            var actionUrl = "{{ route('user.password', ':id') }}".replace(':id', userId);

            // Update form action
            $("#change-password-form").attr("action", actionUrl);
        });
    });
  </script>
@endif
