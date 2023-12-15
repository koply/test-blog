@once
    @section("head-modal")
        @php
            App\Util\ModalGenerator::install_jquery();
            App\Util\ModalGenerator::install_bootstrap();
        @endphp
    @endsection

    @php
        $modal = App\Util\ModalGenerator::generate($title, $desc);
        $modal->render($show);
    @endphp
@endonce

