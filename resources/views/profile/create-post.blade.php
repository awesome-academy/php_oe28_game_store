@extends('layouts.app2')

@section('page-title', trans('text.create-post.title'))

@section('content')
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m">
        <h2 class="l-text2 t-center">
            {{ trans('text.create-blog.create_post') }}
        </h2>
    </section>

    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <form class="row" id="create-post-form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 p-b-30">
                    <div class="leave-comment">
                        <h4 class="m-text26 p-b-36 p-t-15">
                            {{ trans('text.create-blog.info') }}
                        </h4>

                        <span class="s-text8 p-b-40">
                            <strong>{{ trans('text.create-blog.label_title') }}:</strong>
                        </span>
                        <div class="bo4 of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-l-22 p-r-22" id="title" type="text" name="title" placeholder="{{ trans('text.create-blog.label_title') }}" value="">
                        </div>

                        <span class="s-text8 p-b-40">
                            <strong>{{ trans('text.create-blog.label_perview') }}:</strong> <span class="notice">{{ trans('text.create-blog.recommend') }}<span>
                        </span>
                        <div class="of-hidden size15 m-b-20">
                            <input class="sizefull s-text7 p-t-10 p-r-22" id="preview" type="file" name="preview" placeholder="{{ trans('text.create-blog.label_preview') }}" value="">
                        </div>

                         <span class="s-text8 p-b-40">
                            <strong>{{ trans('text.create-blog.summary') }}:</strong>
                        </span>
                        <textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" id="summary" name="summary"></textarea>

                        <span class="s-text8 p-b-40">
                            <strong>{{ trans('text.create-blog.content') }}:</strong>
                        </span>
                        <textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" id="summernote"></textarea>

                        <div class="w-size25">
                            <button type="submit" class="btn-create-post flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4 m-t-30">
                                {{ trans('text.create-blog.post') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ mix('/client/scripts/create-post.js') }}"></script>
@endsection
