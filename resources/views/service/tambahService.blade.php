@include('layout.header')
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('layout.navbar')
        
        <!--end::Header-->
        <!--begin::Sidebar-->
        @include('layout.sidebar')
        
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">

        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">SERVICE</h3></div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
                </div>
            </div>
            <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        </form>

        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                <div class="card card-primary card-outline mb-4">
                    <!--begin::Header-->
                    <div class="card-header"><div class="card-title">Masukkan data bro!</div></div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form action="{{route('service.store')}}" method="post" name="tambah">
                    <!--begin::Body-->
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">KELUHAN</label>
                        <input type="text" class="form-control" name="keluhan" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">TGL_MASUK</label>
                        <input type="text" class="form-control" name="tgl_masuk" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">TGL_KELUAR</label>
                        <input type="text" class="form-control" name="tgl_keluar" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>

            </div>
        </div>

        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">

        </div>
</section>
</main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.footers')


    <!--end::Footer-->
    </div>
    @include('layout.script')































<!-- <form action="{{route('service.store')}}" method="post" name="tambah">
    @csrf
    <label for="">Nama SERVICE : </label>
    <input type="text" name="service" id="">
    <input type="submit" name="simpan" value="simpan">
</form> -->