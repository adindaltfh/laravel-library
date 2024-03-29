@extends('layout.main')
@section('content')
  <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ asset('assets/img/saya.jpg') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                Adinda Latifah
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Lead Manager
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile Pegawai</p>
                <button class="btn btn-primary btn-sm ms-auto">Settings</button>
              </div>
            </div>
            <div class="card-body">
                <p class="text-uppercase text-sm">Pegawai Information</p>
                <form onsubmit="return validateForm()">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">Nama</label>
                                <input id="nama" class="form-control" type="text" value="Adinda Latifah">
                                <small id="namaError" class="text-danger d-none">Nama tidak boleh kosong!</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jabatan" class="form-control-label">Jabatan</label>
                                <input id="jabatan" class="form-control" type="text" value="Lead Manager">
                                <small id="jabatanError" class="text-danger d-none">Jabatan tidak boleh kosong!</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pendidikan" class="form-control-label">Pendidikan</label>
                                <input id="pendidikan" class="form-control" type="text" value="University of Computer Science">
                                <small id="pendidikanError" class="text-danger d-none">Pendidikan tidak boleh kosong!</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gaji" class="form-control-label">Gaji</label>
                                <input id="gaji" class="form-control" type="text" value="IDR 1.000.000.000">
                                <small id="gajiError" class="text-danger d-none">Gaji tidak boleh kosong!</small>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal dark">
                    <p class="text-uppercase text-sm">Contact Information</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="alamat" class="form-control-label">Alamat</label>
                                <input id="alamat" class="form-control" type="text" value="Jalan Sungai Raya Dalam No. B4">
                                <small id="alamatError" class="text-danger d-none">Alamat tidak boleh kosong!</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kota" class="form-control-label">Kota</label>
                                <input id="kota" class="form-control" type="text" value="Pontianak">
                                <small id="kotaError" class="text-danger d-none">Kota tidak boleh kosong!</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="negara" class="form-control-label">Negara</label>
                                <input id="negara" class="form-control" type="text" value="Indonesia">
                                <small id="negaraError" class="text-danger d-none">Negara tidak boleh kosong!</small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kodePos" class="form-control-label">Kode Pos</label>
                                <input id="kodePos" class="form-control" type="text" value="437300">
                                <small id="kodePosError" class="text-danger d-none">Kode Pos tidak boleh kosong!</small>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                </form>

<script>
    function validateForm() {
        var nama = document.getElementById('nama').value;
        var jabatan = document.getElementById('jabatan').value;
        var pendidikan = document.getElementById('pendidikan').value;
        var gaji = document.getElementById('gaji').value;
        var alamat = document.getElementById('alamat').value;
        var kota = document.getElementById('kota').value;
        var negara = document.getElementById('negara').value;
        var kodePos = document.getElementById('kodePos').value;

        if (nama.trim() === '') {
            document.getElementById('namaError').classList.remove('d-none');
            return false;
        }
        if (jabatan.trim() === '') {
            document.getElementById('jabatanError').classList.remove('d-none');
            return false;
        }
        if (pendidikan.trim() === '') {
            document.getElementById('pendidikanError').classList.remove('d-none');
            return false;
        }
        if (gaji.trim() === '') {
            document.getElementById('gajiError').classList.remove('d-none');
            return false;
        }
        if (alamat.trim() === '') {
            document.getElementById('alamatError').classList.remove('d-none');
            return false;
        }
        if (kota.trim() === '') {
            document.getElementById('kotaError').classList.remove('d-none');
            return false;
        }
        if (negara.trim() === '') {
            document.getElementById('negaraError').classList.remove('d-none');
            return false;
        }
        if (kodePos.trim() === '') {
            document.getElementById('kodePosError').classList.remove('d-none');
            return false;
        }        
    };
</script>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="{{ asset('assets/img/backg.jpeg') }}" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="{{ asset('assets/img/hee.png') }}" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">22</span>
                      <span class="text-sm opacity-8">Friends</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">10</span>
                      <span class="text-sm opacity-8">Photos</span>
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">89</span>
                      <span class="text-sm opacity-8">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                  Maheesa<span class="font-weight-light">, 22</span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Yogyakarta, Indonesia
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Enhypen Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
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