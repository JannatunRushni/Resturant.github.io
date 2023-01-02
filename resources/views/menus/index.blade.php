<x-guest-layout>

    <div class="container w-full px-5 py-6 mx-auto">
        <div class="col-md-5 my-auto">

            <form action="{{ url('search') }}" method="GET" role="search" class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="search" class="form-control search-box" name="search" value="{{ Request::get('search') }}" placeholder="Search your menu" class="form-control">
                    <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white">Search</button>
                </div>

            </form>

        </div>
        <div class="grid lg:grid-cols-4 gap-y-6">

            @foreach ($menus as $menu)

            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                <img class="w-full h-48" src="{{ Storage::url($menu->image) }}"
                  alt="Image" />
                <div class="px-6 py-4">
                  <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                    {{ $menu->name }}</h4>
                  <p class="leading-normal text-gray-700">{{$menu->description}}.</p>
                </div>
                <div class="flex items-center justify-between p-4">
                  <span class="text-xl text-green-600">${{ $menu->price }}</span>
                </div>
              </div>

            @endforeach


        </div>
      </div>

</x-guest-layout>
