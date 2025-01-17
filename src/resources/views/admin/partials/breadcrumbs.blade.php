<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">{{ $title }}</h3></div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            @foreach ($path as $item)

                {{-- loop last item --}}
                @if ($loop->last)
                    <li class="breadcrumb-item active" aria-current="page">{{ $item }}</li>
                @else
                    <li class="breadcrumb-item"><a href="#">{{ $item }}</a></li>
                @endif
            @endforeach
            </ol>
        </div>
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

