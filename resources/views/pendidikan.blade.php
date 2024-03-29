@extends('layout.main')
@section('content')
<div class="container-fluid py-4" style="margin-top: 30px;">
      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fas fa-landmark opacity-10"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h4 class="text-center mb-0">Sarjana</h4>
                      <span class="text-xs">Perguruan Tinggi</span>
                      <hr class="horizontal dark my-3">
                      <h3 class="mb-0" style="margin-top: -5%;">52</h3>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fab fa-paypal opacity-10"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h4 class="text-center mb-0">SMA</h4>
                      <span class="text-xs">Sekolah Menengah Akhir</span>
                      <hr class="horizontal dark my-3">
                      <h3 class="mb-0" style="margin-top: -5%;">19</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
      <div class="container-fluid">
      <div class="row">
    <div class="col-8">
        <div class="card mb-2">
            <div class="card-header pb-0">
                <h6>Daftar Pendidikan Pegawai</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center table-sm">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/hee.png') }}" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Maheesa</h6>
                            <p class="text-xs text-secondary mb-0">maheesaenhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-primary">Sarjana S-1</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/jay.jpeg') }}" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Jaden</h6>
                            <p class="text-xs text-secondary mb-0">jadenenhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Sarjana S-2</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/jake.jpeg') }}" class="avatar avatar-sm me-3" alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Jakki</h6>
                            <p class="text-xs text-secondary mb-0">jakkienhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-primary">Sarjana S-1</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/sungh.jpeg') }}" class="avatar avatar-sm me-3" alt="user4">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Satria</h6>
                            <p class="text-xs text-secondary mb-0">satriaenhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-primary">Sarjana S-1</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/suno.jpeg') }}" class="avatar avatar-sm me-3" alt="user5">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Sena</h6>
                            <p class="text-xs text-secondary mb-0">senaenhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-warning">SMA</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/uwon.jpeg') }}" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Juna</h6>
                            <p class="text-xs text-secondary mb-0">junaenhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Sarjana S-2</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{ asset('assets/img/riki.jpeg') }}" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Riki</h6>
                            <p class="text-xs text-secondary mb-0">rikienhypen@gmail.com</p>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-primary">Sarjana S-1</span>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user" onclick="editPendidikan()">
                          Edit
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-lg-0 mb-4" style="margin-top: -2%;">
    <div class="card mt-4">
        <div class="card-header pb-0 p-3">
            <div class="row">
                <div class="col-8 align-items-center"  style="margin-top: 3%; margin-bottom:6%">
                    <h6 class="mb-0">Form Data Pendidikan</h6>
                </div>
            </div>
        </div>
        <div class="card-body p-3">
            <form onsubmit="return validateForm()">
                <div class="row">
                    <div class="col-14">
                        <div class="align-items-center flex-row">
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
                                <small id="namaError" class="text-danger d-none">Nama tidak boleh kosong!</small>
                            </div>
                            <div class="mb-3">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <input type="text" id="pendidikan_terakhir" class="form-control" placeholder="Masukkan Pendidikan Terakhir">
                                <small id="pendidikanError" class="text-danger d-none">Pendidikan terakhir tidak boleh kosong!</small>
                            </div>
                            <div class="mb-3">
                                <label for="instansi">Nama Instansi Pendidikan</label>
                                <input type="text" id="instansi" class="form-control" placeholder="Masukkan Nama Instansi Pendidikan">
                                <small id="instansiError" class="text-danger d-none">Nama instansi pendidikan tidak boleh kosong!</small>
                            </div>
                            <div class="mb-3">
                                <label for="tahun_lulus">Tahun Lulus</label>
                                <input type="text" id="tahun_lulus" class="form-control" placeholder="Masukkan Tahun Lulus">
                                <small id="tahunLulusError" class="text-danger d-none">Tahun lulus tidak boleh kosong!</small>
                            </div>
                            <button type="submit" class="btn btn-primary" style="float: right; background-color:cornflowerblue; margin-top:25px;">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function validateForm() {
        // Mengambil nilai dari setiap input
        var nama = document.getElementById("nama").value;
        var pendidikanTerakhir = document.getElementById("pendidikan_terakhir").value;
        var instansi = document.getElementById("instansi").value;
        var tahunLulus = document.getElementById("tahun_lulus").value;

        // Validasi setiap input
        if (nama === "") {
            // Menampilkan pesan error jika input nama kosong
            document.getElementById("namaError").classList.remove("d-none");
            return false; // Mencegah pengiriman formulir
        } else {
            // Menghilangkan pesan error jika input nama diisi
            document.getElementById("namaError").classList.add("d-none");
        }

        if (pendidikanTerakhir === "") {
            // Menampilkan pesan error jika input pendidikan terakhir kosong
            document.getElementById("pendidikanError").classList.remove("d-none");
            return false; // Mencegah pengiriman formulir
        } else {
            // Menghilangkan pesan error jika input pendidikan terakhir diisi
            document.getElementById("pendidikanError").classList.add("d-none");
        }

        if (instansi === "") {
            // Menampilkan pesan error jika input instansi kosong
            document.getElementById("instansiError").classList.remove("d-none");
            return false; // Mencegah pengiriman formulir
        } else {
            // Menghilangkan pesan error jika input instansi diisi
            document.getElementById("instansiError").classList.add("d-none");
        }

        if (tahunLulus === "") {
            // Menampilkan pesan error jika input tahun lulus kosong
            document.getElementById("tahunLulusError").classList.remove("d-none");
            return false; // Mencegah pengiriman formulir
        } else {
            // Menghilangkan pesan error jika input tahun lulus diisi
            document.getElementById("tahunLulusError").classList.add("d-none");
        }

        // Mengembalikan true jika semua input telah diisi
        return true;
    }

    function editPendidikan() {
            var formElement = document.getElementById('formPendidikan');
            var position = formElement.offsetTop;
            window.scrollTo({
                top: position,
                    behavior: 'smooth'
                });
        }
</script>
            </div>
          </div>
        </div>
      <footer class="footer pt-3" style="margin-bottom: 20px;">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Adinda Latifah</a>
                as a student at Tanjungpura University.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
@endsection