@extends('layouts.layout-welcome')

@section('content')

    {{-- MAIN --}}
    <main>

        <div class="container">
                   
            <slider></slider>         

            {{-- lista ristoranti --}}
          <section>
              <h1>Restaurants</h1>

              <div class="restaurants">

                <div v-for="restaurant in restaurants" :key="restaurant.id">
                    <restaurant
                      :restaurant_data="restaurant"
                    ></restaurant>
                </div>

                  {{-- @foreach ($plates as $plate) --}}

                    {{-- @php  
                        dd($plates);
                    @endphp --}}

                    {{-- <plate
                    :plate_data = {{ $plate }}
                    >
                    </plate> --}}

                {{-- @endforeach --}}
              

              </div>
          </section>

        </div>

    </main>

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <nav>
                <ul>
                    <li>Scopri deliveroo</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

                <ul>
                    <li>FAQ</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

                <ul>
                    <li>Aiuto</li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                    <li><a href="#">asdfghjkl</a></li>
                </ul>

            </nav>

            <div class="copyright">copyright</div>
        </div>
    </footer>
@endsection