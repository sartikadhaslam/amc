<x-app-layout>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <!--  BEGIN BREADCRUMBS  -->
                <div class="secondary-nav">
                    <div class="breadcrumbs-container" data-page-heading="Analytics">
                        <header class="header navbar navbar-expand-sm">
                            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </a>
                            <div class="d-flex breadcrumb-content">
                                <div class="page-header">

                                    <div class="page-title">
                                    </div>
                    
                                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Ref</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Members</li>
                                        </ol>
                                    </nav>
                    
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
                <!--  END BREADCRUMBS  -->

                <div class="row layout-top-spacing">


                    <div id="customTables" class="col-lg-12 mt-4">
                        <div class="seperator-header">
                            <button type="button" class="btn btn-success btn-r mb-2 mr-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                                + 
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <div id="tableCustomBasic" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>List Anggota</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="col-md-3 mb-4">
                                    <input type="text" id="myInput" class="form-control form-control-solid w-250px ps-12" placeholder="Search ..">
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Kunci</th>
                                                <th class="text-center" scope="col">Status</th>
                                                <th class="text-center" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="media">
                                                        <div class="avatar me-2">
                                                            <img src="{{ asset('storage/'.$item->foto) }}" alt="Foto" class="rounded-circle" />
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <h6 class="mb-0">{{ $item->nama }}</h6>
                                                            <span>{{ $item->phone }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0">{{ $item->kunci }}</p>
                                                </td>
                                                <td class="text-center">
                                                    @if($item->aktif == 0)
                                                    <span class="badge badge-light-danger">Nonaktif</span>
                                                    @else   
                                                    <span class="badge badge-light-success">Aktif</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    <div class="action-btns">
                                                        <a href="javascript:void(0);" 
                                                            class="action-btn btn-view bs-tooltip me-2" 
                                                            data-toggle="tooltip" 
                                                            data-placement="top" 
                                                            title="View"
                                                            data-foto="{{ asset('storage/'.$item->foto) }}"
                                                            data-nama="{{ $item->nama }}"
                                                            data-phone="{{ $item->phone }}"
                                                            data-dc_username="{{ $item->dc_username }}"
                                                            data-bod="{{ $item->bod }}"
                                                            data-kunci="{{ $item->kunci }}"
                                                            data-keterangan="{{ $item->keterangan }}"
                                                            data-aktif="{{ $item->aktif }}"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                        </a>
                                                        <a href="javascript:void(0);" 
                                                            class="action-btn btn-edit bs-tooltip me-2" 
                                                            data-toggle="tooltip" 
                                                            data-placement="top" 
                                                            title="Edit"
                                                            data-id="{{ $item->id }}"
                                                            data-foto="{{ asset('storage/'.$item->foto) }}"
                                                            data-nama="{{ $item->nama }}"
                                                            data-phone="{{ $item->phone }}"
                                                            data-dc_username="{{ $item->dc_username }}"
                                                            data-bod="{{ $item->bod }}"
                                                            data-kunci="{{ $item->kunci }}"
                                                            data-keterangan="{{ $item->keterangan }}"
                                                            data-aktif="{{ $item->aktif }}"
                                                        >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                        </a>
                                                        <form action="{{ route('members.destroy', $item->id) }}" method="POST" style="display:inline;" class="form-delete-member">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="action-btn btn-delete bs-tooltip" data-toggle="tooltip" data-placement="top" title="Delete" style="border:none; background:none; padding:0;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="mt-3">
                                        {{ $data->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--  BEGIN FOOTER  -->
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © <span class="dynamic-year">2025</span> <a target="_blank" href="https://amc-69.my.id">AMC-69</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
        <!--  END FOOTER  -->
        
    </div>
    <!--  END CONTENT AREA  -->
    
    <!-- Modal Add Member-->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form action="{{ route('members.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3 text-center">
                                    <img id="add-foto-preview" src="https://ui-avatars.com/api/?name=Foto" alt="Preview Foto" class="rounded-circle mb-2" width="120" height="120">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="foto">Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>    
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">No. HP</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan No. HP" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="dc_username">DC Username</label>
                                    <input type="text" class="form-control" id="dc_username" name="dc_username" placeholder="Masukkan Nama Discord" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bod">BOD</label>
                                    <input type="date" class="form-control" id="bod" name="bod">    
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kunci">Kunci</label>
                                    <select name="kunci" id="kunci" class="form-control" required>
                                        <option value="Prospect (Tingkat 1)">Prospect (Tingkat 1)</option>
                                        <option value="Life Member (Tingkat 2)">Life Member (Tingkat 2)</option>
                                        <option value="Bendahara (Tingkat 3)">Bendahara (Tingkat 3)</option>
                                        <option value="Vice Presiden (Tingkat 4)">Vice Presiden (Tingkat 4)</option>
                                        <option value="Presiden (Tingkat 5)">Presiden (Tingkat 5)</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="keterangan">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="aktif">Status</label>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" role="switch" id="aktif" name="aktif" checked required>
                                        <label class="form-check-label" for="aktif">Aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal View Member -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-3 text-center">
                                <img id="view-foto" src="" alt="Foto" class="rounded-circle mb-2" width="120" height="120">
                            </div>
                            <div class="form-group mb-3">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="view-nama" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label>No. HP</label>
                                <input type="text" class="form-control" id="view-phone" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label>DC Username</label>
                                <input type="text" class="form-control" id="view-dc_username" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label>BOD</label>
                                <input type="text" class="form-control" id="view-bod" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label>Kunci</label>
                                <input type="text" class="form-control" id="view-kunci" readonly>
                            </div>
                            <div class="form-group mb-3">
                                <label>Keterangan</label>
                                <textarea class="form-control" id="view-keterangan" readonly></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Status</label>
                                <input type="text" class="form-control" id="view-aktif" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Member -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
                <form id="form-edit-member" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3 text-center">
                                    <img id="edit-foto-preview" src="" alt="Foto" class="rounded-circle mb-2" width="120" height="120">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-foto">Ganti Foto</label>
                                    <input type="file" class="form-control" id="edit-foto" name="foto" accept="image/*">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-nama">Nama</label>
                                    <input type="text" class="form-control" id="edit-nama" name="nama" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-phone">No. HP</label>
                                    <input type="text" class="form-control" id="edit-phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="edit-dc_username">DC Username</label>
                                    <input type="text" class="form-control" id="edit-dc_username" name="dc_username" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-bod">BOD</label>
                                    <input type="date" class="form-control" id="edit-bod" name="bod">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-kunci">Kunci</label>
                                    <select name="kunci" id="edit-kunci" class="form-control" required>
                                        <option value="Prospect (Tingkat 1)">Prospect (Tingkat 1)</option>
                                        <option value="Life Member (Tingkat 2)">Life Member (Tingkat 2)</option>
                                        <option value="Bendahara (Tingkat 3)">Bendahara (Tingkat 3)</option>
                                        <option value="Vice Presiden (Tingkat 4)">Vice Presiden (Tingkat 4)</option>
                                        <option value="Presiden (Tingkat 5)">Presiden (Tingkat 5)</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-keterangan">Keterangan</label>
                                    <textarea class="form-control" id="edit-keterangan" name="keterangan"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="edit-aktif">Status</label>
                                    <div class="form-check form-switch form-check-inline">
                                        <input class="form-check-input" type="checkbox" role="switch" id="edit-aktif" name="aktif">
                                        <label class="form-check-label" for="edit-aktif">Aktif</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-light-dark" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.form-delete-member').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    if(!confirm('Yakin ingin menghapus data ini?')) {
                        e.preventDefault();
                    }
                });
            });

            document.getElementById('foto').addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(ev) {
                        document.getElementById('add-foto-preview').src = ev.target.result;
                    }
                    reader.readAsDataURL(e.target.files[0]);
                }
            });

            document.querySelectorAll('.btn-view').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    document.getElementById('view-foto').src = btn.getAttribute('data-foto');
                    document.getElementById('view-nama').value = btn.getAttribute('data-nama');
                    document.getElementById('view-phone').value = btn.getAttribute('data-phone');
                    document.getElementById('view-dc_username').value = btn.getAttribute('data-dc_username');
                    document.getElementById('view-bod').value = btn.getAttribute('data-bod');
                    document.getElementById('view-kunci').value = btn.getAttribute('data-kunci');
                    document.getElementById('view-keterangan').value = btn.getAttribute('data-keterangan');
                    document.getElementById('view-aktif').value = btn.getAttribute('data-aktif') == '1' ? 'Aktif' : 'Nonaktif';
                    var modal = new bootstrap.Modal(document.getElementById('viewModal'));
                    modal.show();
                });
            });

            document.querySelectorAll('.btn-edit').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    document.getElementById('edit-foto-preview').src = btn.getAttribute('data-foto');
                    document.getElementById('edit-nama').value = btn.getAttribute('data-nama');
                    document.getElementById('edit-phone').value = btn.getAttribute('data-phone');
                    document.getElementById('edit-dc_username').value = btn.getAttribute('data-dc_username');
                    document.getElementById('edit-bod').value = btn.getAttribute('data-bod');
                    document.getElementById('edit-kunci').value = btn.getAttribute('data-kunci');
                    document.getElementById('edit-keterangan').value = btn.getAttribute('data-keterangan');
                    document.getElementById('edit-aktif').checked = btn.getAttribute('data-aktif') == '1' ? true : false;

                    var id = btn.getAttribute('data-id');
                    var form = document.getElementById('form-edit-member');
                    form.action = "{{ route('members.update', ':id') }}".replace(':id', id);

                    var modal = new bootstrap.Modal(document.getElementById('editModal'));
                    modal.show();
                });
            });

            document.getElementById('edit-foto').addEventListener('change', function(e) {
                if (e.target.files && e.target.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(ev) {
                        document.getElementById('edit-foto-preview').src = ev.target.result;
                    }
                    reader.readAsDataURL(e.target.files[0]);
                }
            });
        });
    </script>
</x-app-layout>