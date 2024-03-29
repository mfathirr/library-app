@extends('layouts.app')
@section('main')
<div class="container h-full">
        @if (Auth::user()->role == 'admin')
        <a href="{{ url("/book/create") }}" class="sticky top-32 btn btn-primary rounded-md text-gray-100 float-right my-5 shadow-lg shadow-indigo-500/50 hover:shadow-indigo-700/50 mr-3">
            <svg class="w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </a>
        @endif
    <div class="mx-20 mt-10 drop-shadow-xl">
        <div class="flex flex-col mx-5">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-x-auto">
                    {{-- search --}}
                    <form class="flex items-center mb-3" action="{{route("search")}}" method="GET">   
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-auto">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" name="search" required>
                        </div>
                    </form>
                    {{-- @if ('search' != null )
                        <p>halo</p>
                    @endif --}}
                    <table class="table table-zebra w-full">
                            <thead class="">
                                <tr class="text-center">
                                    <th class="text-base font-mono">Title</th>
                                    <th class="text-base font-mono">Author</th>
                                    <th class="text-base font-mono">Pages of Book</th>
                                    @if (Auth::user()->role == 'admin')
                                    <th class="text-base font-mono">Edit/Delete</th>
                                    @endif
                                </tr>
                            </thead>
                        <tbody class="">
                        @foreach ($data as $item)
                        <tr class="text-center">
                            <td class="text-sm">{{ $item->title }}</td>
                            <td class="text-sm">{{ $item->author }}</td>
                            <td class="text-sm">{{ $item->pages }}</td>
                            @if (Auth::user()->role == 'admin')
                            <td>
                                <form action="{{ url("/book/$item->id") }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url("/book/$item->id/edit") }}" class="btn btn-warning bg-yellow-400 hover:bg-yellow-500 text-gray-100 rounded-md drop-shadow-md hover:drop-shadow-lg"><svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                    </a>
                                    <button href="{{ url("/book/$item->id") }}" class="btn btn-error bg-red-600 hover:bg-red-700 text-gray-100 rounded-md hover:drop-shadow-lg"><svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                    </button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <br>
        {{$data->links('pagination::tailwind')}}
    </div>
</div>
</div>
@endsection
