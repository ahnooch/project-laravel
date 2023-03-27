<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Service') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="relative bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ url('/service/add') }}" class="absolute btn bg-[#eee] px-5 py-2 right-5 top-5 " aria-current="page">Add Service</a>
                <div class="mt-[50px] p-6 text-gray-900 dark:text-gray-100">
                <table class="table">
                <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Désignation</th>
                <th scope="col">Prix</th>
                <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $item)
                <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->désignation}}</td>
                <td>{{$item->prix}}</td>
                <td>
                <a href="{{ route('service.edit' , ['id' => $item->id])}}" title="Edit Student"><button class="btn bg-[#eee] btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                <form method="POST" action="{{ route('service.delete' , ['id' => $item->id])}}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn bg-[#eee] btn-sm" title="Delete Product" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                </form>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>