@include('header')
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>

                <ul>
                  @foreach ($productos as $producto)
                  <li>
                    <a href="{{ url('/producto/') }}/{{$producto->id}}">{{ $producto->nombre }}</a>
                    <img width="100" src="{{ App\Models\Upload::find( $producto->foto )->path() }}"/>
                  </li>
                  @endforeach
                </ul>

            </div>
        </div>
@include('footer')
