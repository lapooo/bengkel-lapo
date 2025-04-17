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
                <div class="col-sm-6"><h3 class="mb-0">Pemilik</h3></div>
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
                    @foreach($data as $row)
                    <form action="{{route('pemilik.update',$id)}}" method="post" name="update">
                    <!--begin::Body-->
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">nm_pemilik</label>
                        <input type="text" class="form-control" name="mekanik" value="{{$row->nm_pemilik}}" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">tgl_lahir</label>
                        <input type="text" class="form-control" name="mekanik" value="{{$row->tgl_lahir}}" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">alamat</label>
                        <input type="text" class="form-control" name="pemilik" value="{{$row->alamat}}" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">nik</label>
                        <input type="text" class="form-control" name="pemilik" value="{{$row->nik}}" />
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                        <label class="form-label" for="">no_hp</label>
                        <input type="text" class="form-control" name="pemilik" value="{{$row->no_hp}}" />
                        </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                    </form>
                    @endforeach
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