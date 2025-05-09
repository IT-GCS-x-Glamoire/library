@extends('layouts.admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-white rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item"><a href="/library">Library</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
    <a data-toggle="modal" data-target="#modalAddOtherSchedule" class="btn btn-primary btn">   
        <i class="fa-solid fa-plus"></i>
        </i>   
        Add Data
    </a>

    <!-- Separator -->
    <hr class="my-4">

    <!-- Data Table Section -->
    <div class="card mt-4">
        <div class="card-header">
            <h3>Data Lemari Buku 3 Tingkat</h3>
        </div>
        <div class="card-body">
            <!-- Filter dan Search -->
            <form action="{{ route('library.three.level') }}" method="GET" class="mb-4">
                <div class="row">
                    {{-- <div class="col-md-3">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" name="date_from" class="form-control"
                                value="{{ request('date_from') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                        </div>
                    </div> --}}
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Pencarian</label>
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Cari surat..."
                                    value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="mt-3"></label>
                            <div class="input-group mt-2">
                                <button type="submit" class="btn btn-primary mr-1">
                                    <i class="fa fa-filter"></i> Filter
                                </button>
                                <a href="{{ route('library.three.level') }}" class="btn btn-secondary">
                                    <i class="fa fa-refresh"></i> Reset
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="">
                        <tr>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Rack</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">No</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Nama Buku/Barang</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Jumlah</th>
                            <th colspan="6" class="text-center" style="vertical-align : middle;text-align:center;">Keterangan</th>
                            <th rowspan="2" class="text-center" style="vertical-align : middle;text-align:center;">Action</th>
                        </tr>
                        <tr>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Kota</th>
                            <th>Informasi</th>
                            <th>ISBN</th>
                            <th>Foto Cover</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($books as $key => $letter)
                            <tr>
                                <td>{{ $letter->rack }}</td>
                                <td>{{ $letter->no }}</td>
                                <td>{{ $letter->name }}</td>
                                <td>{{ $letter->total }}</td>
                                <td>{{ $letter->publisher }}</td>
                                <td>{{ $letter->year }}</td>
                                <td>{{ $letter->city }}</td>
                                <td>{{ $letter->information }}</td>
                                <td>{{ $letter->isbn }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$letter->cover_image) }}" alt="" style="width: 64px; height: 96px;">
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                            id="deleteData"
                                            data-id="{{ $letter->id }}"> 
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-sm btn-warning btn-edit" data-toggle="modal"
                                            id="editData"
                                            data-id="{{ $letter->id }}"
                                        >
                                            <i class="fa fa-pen"></i> Edit
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center">Empty Data</td>
                            </tr>
                        @endforelse 
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>


{{-- ADD DATA --}}
<div class="modal fade" id="modalAddOtherSchedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Lemari Buku 3 Tingkat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body" style="max-height:80vh; overflow-y: auto;">
                <form method="POST" action="{{route('store.library')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-entry" id="addBook">
                    <div class="card p-2 bg-light">
                        <h5 class="fw-bold">#Form 1</h5>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="rack">Rack</label>
                                    <input type="text" name="rack[]" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="norack">No</label>
                                    <input type="text" name="no_rack[]" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Nama Buku/Barang</label>
                                    <input type="text" name="name[]" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="total">Jumlah</label>
                                    <input type="number" name="total[]" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="publisher">Penerbit</label>
                                    <input type="text" name="publisher[]" class="form-control">
                                </div>
                                <button type="button" class="btn btn-success btn-sm btn-tambah mt-1" title="Tambah Data" id="tambah">Tambah <i class="fa fa-plus"></i></button>
                                <button type="button" class="btn btn-danger btn-sm btn-hapus mt-1 d-none" title="Hapus Baris" id="hapus"><i class="fa fa-times"></i></button>
                            </div>
                            <div class="col-6">
                                <div class="form-group mb-3">
                                    <label for="year">Tahun</label>
                                    <input type="number" name="year[]" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="city">Kota</label>
                                    <input type="text" name="city[]" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image">Cover Image</label>
                                    <input type="file" name="image[]" class="form-control">
                                </div>
                                <div class="form-grou mb-3">
                                    <label for="isbn">ISBN</label>
                                    <textarea name="isbn[]" class="form-control" cols="10" rows="1"></textarea>
                                </div>
                                <div class="form-grou mb-3">
                                    <label for="information">Informasi</label>
                                    <textarea name="information[]" class="form-control" cols="10" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row d-flex justify-content-center">
                    <input role="button" type="submit" class="btn btn-success center col-12">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- MODAL UPDATE DATA --}}
<div class="modal fade" id="modalUpdateData" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('update.three.level') }}" enctype="multipart/form-data" class="row">
                    @csrf
                    <div class="col-6">
                        <div class="form-group d-none">
                            <input name="id" type="number" class="form-control" id="id-update" required>
                        </div>
    
                        <div class="form-group">
                            <label for="rack">Rack</label>
                            <input name="rack" type="text" class="form-control" id="rack-update" required>
                        </div>
    
                        <div class="form-group">
                            <label for="no_rack">No Rack</label>
                            <input name="no_rack" type="text" class="form-control" id="norack-update" required>
                        </div>
    
                        <div class="form-group">
                            <label for="name">Nama Buku/Barang</label>
                            <input name="name" type="text" class="form-control" id="name-update" required>
                        </div>
    
                        <div class="form-group">
                            <label for="total">Jumlah</label>
                            <input name="total" type="text" class="form-control" id="total-update" required>
                        </div>

                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input name="publisher" type="text" class="form-control" id="publisher-update" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="year">Year</label>
                            <input name="year" type="number" class="form-control" id="year-update" required>
                        </div>
    
                        <div class="form-group">
                            <label for="city">City</label>
                            <input name="city" type="text" class="form-control" id="city-update" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="isbn">ISBN</label>
                            <input name="isbn" type="text" class="form-control" id="isbn-update" required>
                        </div>
    
                        <div class="form-group">
                            <label for="information">Information</label>
                            <textarea name="information" class="form-control" id="information-update" required></textarea>
                        </div>
                        
                        
                        <label for="cover-image">Cover Image</label>
                        <div class="form-group">
                            <img src="" alt="" style="width: 64px; height: 96px; mb-2" id="show-image">
                            <input name="image" type="file" class="form-control" id="image-update">
                        </div>
                    </div>
                    <div class="col-12">
                        <input role="button" type="submit" class="btn btn-success w-100" id="submit-edit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // SweetAlert untuk pesan sukses
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                timer: 1000,
                showConfirmButton: false
            });
        @endif

        // SweetAlert untuk pesan error
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan!',
                html: `
            <ul class="text-left">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        `,
            });
        @endif
    });

    $(document).ready(function() {
        let row = 1;
        function addRow() {
            row++;
            const newRow = `
                <div class="card p-2 bg-light">
                    <h5 class="fw-bold">#Form ${row}</h5>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="rack">Rack</label>
                                <input type="text" name="rack[]" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="norack">No</label>
                                <input type="text" name="no_rack[]" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Nama Buku/Barang</label>
                                <input type="text" name="name[]" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="total">Jumlah</label>
                                <input type="number" name="total[]" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="publisher">Penerbit</label>
                                <input type="text" name="publisher[]" class="form-control">
                            </div>
                            
                            <button type="button" class="btn btn-success btn-sm btn-tambah mt-1" title="Tambah Data" id="tambah">Tambah <i class="fa fa-plus"></i></button>
                            <button type="button" class="btn btn-danger btn-sm btn-hapus mt-1" title="Hapus Baris">Hapus <i class="fa fa-times"></i></button>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="year">Tahun</label>
                                <input type="number" name="year[]" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="city">Kota</label>
                                <input type="text" name="city[]" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="image">Cover Image</label>
                                <input type="file" name="image[]" class="form-control">
                            </div>
                            <div class="form-grou mb-3">
                                <label for="isbn">ISBN</label>
                                <textarea name="isbn[]" class="form-control" cols="10" rows="1"></textarea>
                            </div>
                            <div class="form-grou mb-3">
                                <label for="information">Informasi</label>
                                <textarea name="information[]" class="form-control" cols="10" rows="1"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            $('#addBook').append(newRow);
            updateButtons();
        }

        // Function to update the visibility of the "Hapus" buttons
        function updateButtons() {
            const forms = $('#addBook .form-entry');

            forms.each(function (index) {
                const form = $(this);
                const btnTambah = form.find('.btn-tambah');
                const btnHapus = form.find('.btn-hapus');

                if (forms.length === 1) {
                    btnTambah.removeClass('d-none');
                    btnHapus.addClass('d-none');
                } else {
                    if (index === 0) {
                        btnTambah.addClass('d-none');
                        btnHapus.removeClass('d-none');
                    } else {
                        btnTambah.removeClass('d-none');
                        btnHapus.removeClass('d-none');
                    }
                }
            });
        }

        // Event listener for the "Tambah" button
        $('#addBook').on('click', '.btn-tambah', function () {
            addRow();
        });

        // Event: hapus form
        $('#addBook').on('click', '.btn-hapus', function () {
            $(this).closest('.card').remove();
            updateButtons();
        });
    });

    $(document).on('click', '#deleteData', function() {
        var id = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to delete this data!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "{{ route('delete.three.level', ':id') }}".replace(':id', id),
                    type: 'DELETE',
                    data: {
                        exam_id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Successfully',
                            text: 'Successfully Delete Data',
                            timer: 1000,
                            showConfirmButton: false,
                        }).then(function() {
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                        alert("Error occurred!");
                    }
                });
            }
        });
    });

    $(document).on("click", ".btn-edit", function () {
        var id = $(this).data("id"); // Ambil ID dari tombol yang diklik
        $.ajax({
            url: "/data/three-level/edit/" + id, // Panggil route Laravel
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.data) {
                    $("#id-update").val(response.data.id);
                    $("#rack-update").val(response.data.rack);
                    $("#norack-update").val(response.data.no);
                    $("#name-update").val(response.data.name);
                    $("#total-update").val(response.data.total);
                    $("#publisher-update").val(response.data.publisher);
                    $("#year-update").val(response.data.year);
                    $("#city-update").val(response.data.city);
                    $("#isbn-update").val(response.data.isbn);
                    $("#information-update").val(response.data.information);
                    let imagePath = `{{asset('storage/${response.data.cover_image}')}}`;
                    $("#show-image").attr("src", imagePath);

                    // Tampilkan modal edit
                    $("#modalUpdateData").modal("show");
                } else {
                    Swal.fire("Error", "Data tidak ditemukan!", "error");
                }
            },
            error: function () {
                Swal.fire("Error", "Terjadi kesalahan saat mengambil data!", "error");
            }
        });
    });
</script>

@endsection
