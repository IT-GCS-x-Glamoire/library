@extends('layouts.admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.add.book') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Data Buku</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.add.cd.and.book') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Lemari CD & Buku</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.three.level') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Lemari Buku 3 Tingkat</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.small.warehouse') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Gudang Kecil</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.reference.book') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Reference Books</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.lemari.cd') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Lemari CD</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
        <div class="col-lg-3 col-md-4 col-12">
            <div class="small-box bg-light px-2 d-flex flex-column zoom-hover position-relative justify-content-center align-items-center" style="min-height: 110px;">
                <a class="stretched-link d-flex flex-column p-2 text-center h-100 justify-content-center align-items-center" href="{{ route('library.curriculum.old') }}">
                
                    <!-- Ribbon -->
                    <div class="ribbon-wrapper ribbon-lg">
                        <div class="ribbon bg-dark text-sm">
                            Library
                        </div>
                    </div>
                
                    <!-- Bagian Utama -->
                    <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1">
                        <!-- Ikon -->
                        <div>
                            <img loading="lazy" src="{{ asset('images/book.png') }}" 
                             alt="avatar" class="profileImage img-fluid" 
                             style="width: 50px; height: 50px; cursor: pointer;" loading="lazy">
                        </div>
                        <!-- Nama Subject -->
                        <div class="inner mt-2">
                            <p class="mb-0 text-lg fw-bold text-center">Kurikulum Lama</p>
                        </div>
                    </div>
                </a>
            </div>         
        </div>
    </div>

    <h5 class="text-xl text-bold">History Barang Baru Masuk</h5>

    <div class="card mt-4">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Database</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item['table'] }}</td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                
    
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{-- {{ $history->links() }} --}}
            </div>
        </div>
    </div>
@endsection
