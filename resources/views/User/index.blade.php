@extends('template.layout')
    @section('title', 'Home')
    @section('content')
    <div class="container">
        este es el index
    </div>
    @endsection
    @section('script')
    <script>
        let elemento = new Vue({
            el: '.app',
            data: {
                
                menu:0
            }
        })
    </script>
    @endsection