@extends('adminadmin.layout.app')



@section('content')



<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Request::root()}}/home">მთავარი</a></li>
                <li class="breadcrumb-item active" aria-current="page"> ახალი პროდუქტის დამატება</li>
            </ol>

        </div>


        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.product_add_insert') }}" enctype="multipart/form-data">
                         @csrf

                         <div class="form-group col-md-12" data-select2-id="61">
                            <label for="inputState" class="col-form-label">აირჩიეთ კატეგორია</label>
                            <select id="inputState" name="cat_id" class="form-control select2 select2-hidden-accessible" data-select2-id="inputState" tabindex="-1" aria-hidden="true">
                                @forelse($choosecategories as $item)
                                <option value="{{ $item->id }}">{{ $item->name_geo }}</option>
                                @empty
                                <option disabled selected>კატეგორია ვერ მოიძებნა</option>
                                @endforelse
                            </select>
                        </div>

                         <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სათაური ქართულად</label>
                                <input type="text" class="form-control" name="products_title_geo" placeholder="სათაური ქართულად" required>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">ტექსტი ქართულად</label>
                                <textarea class="form-control" name="products_text_geo" id="editor1" rows="3" required></textarea>
                            </div>
                        </div>




                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სათაური ინგლისურად</label>
                                <input type="text" class="form-control" name="products_title_eng" placeholder="სათაური ინგლისურად" required>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">ტექსტი ინგლისურად</label>
                                <textarea class="form-control" name="products_text_eng" id="editor2" rows="3" required></textarea>
                            </div>
                        </div>





                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">სათაური რუსულად</label>
                                <input type="text" class="form-control" name="products_title_rus" placeholder="სათაური რუსულად" required>
                            </div>
                        </div>





                        <div class="col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="col-form-label">ტექსტი რუსულად</label>
                                <textarea class="form-control" name="products_text_rus" id="editor3" rows="3" required></textarea>
                            </div>
                        </div>








                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">მონიშნეთ ფოტო</label>
                            <input type="file" name="image" class="form-control">
                        </div>






                            <div class="form-group mb-0">
                                <div class="checkbox checkbox-secondary">
                                    <button type="submit" class="btn btn-primary ">პროდუქტის დამატება</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>







</div>
</div>


@endsection


@push('js')

    <script src="{{ asset('assets/admin/assets/ckeditor/ckeditor.js') }}"></script>


    <script>
        CKEDITOR.replace('editor1', {
            language: 'ka',
            height: 200,
        });

        CKEDITOR.replace('editor2', {
            language: 'ka',
            height: 200,
        });
        CKEDITOR.replace('editor3', {
            language: 'ka',
            height: 200,
        });
    </script>
@endpush
