@extends("layouts.master")

@section("head")
    @php
        App\Util\ModalGenerator::install_jquery();
        App\Util\ModalGenerator::install_bootstrap();
    @endphp
@endsection

@section("content")

    @if (session()->has("message"))
        @php
            $modal = App\Util\ModalGenerator::generate(session("title"), session("message"));
            session()->forget(["message", "title"]);
            $modal->render(true);
        @endphp
    @endif

    @yield("aboutSection")

    <div class="body_bg layout_padding">

        @yield("serviceSection")

        @yield("quoteSection")

        @yield("contactSection")

        @yield("clientSection")


    </div>
    @yield("infoSection")

@endsection
