@extends("layouts.master")

@section("title", "Blogium Panel")

@section("content")
    @if (session()->has("msg"))
        <x-modal :title="session()->get('msg-title')" :desc="session()->get('msg')" :show="true"></x-modal>
        @php
            if (!session()->has("keep")) {
                session()->forget(['msg', 'msg-title', 'keep']);
            }
        @endphp
    @endif
    @if (session()->has("login-success"))
        <x-modal :title="'Blogium Panel'" :desc="'Hos geldiniz!'" :show="true"></x-modal>
        @php
            session()->forget("login-success");
        @endphp
    @endif

    <div class="blog-form-box">
        <form action="{{ route("blog-create") }}" method="POST">
            @csrf
            <div class="input-boxes">
                <div class="input-box title">
                    <!--<i class="fas fa-header"></i>-->
                    <input name="title" type="text" placeholder="Enter the title" required>
                </div>
                <div class="input-box summary">
                    <!--<i class="fas fa-lock"></i>-->
                    <input name="summary" type="text" placeholder="Enter the summary of the content" required>
                </div>
                <div class="input-box content">
                    <!--<i class="fas fa-lock"></i>-->
                    <input name="text" type="text" placeholder="Enter the content" required>
                </div>
                <!-- TODO: add a image input and store the uploaded image in the server -->
                <div class="button input-box">
                    <input name="create" type="submit" value="Create Blog Entry">
                </div>
            </div>

        </form>
    </div>


@endsection
