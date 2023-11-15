@extends("layouts.master")

@section("title", "Blog Panel")

@section("head")
    @php
        App\Util\Modal::install_jquery();
        App\Util\Modal::install_bootstrap();
    @endphp
@endsection

@section("content")

    @if (session()->has("login-success"))
        @php
            session()->forget("login-success");
            $modal = App\Util\Modal::generate("Blogium Panel", "Hos geldiniz!");
            $modal->render(true);
        @endphp
    @endif

@endsection
