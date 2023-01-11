<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('add-article')}}" class="btn btn-success mb-4">Add new acticle</a>
                <div class="card">
                    <h5 class="card-header">Featured</h5>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-primary " style="background: red">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
