@include('header')
        <div class="container">
            <div class="content">
                <div class="title">{{$producto->nombre}}</div>
                <div class="title"><img width="100" src="{{ App\Models\Upload::find( $producto->foto )->path() }}"/></div>


            </div>
        </div>
@include('footer')
