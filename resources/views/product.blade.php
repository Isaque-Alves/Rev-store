@extends('layouts.default')

@section("content")
    <section class="text-gray-600 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"> {{ $product->name }}</h1>
                    <p class="leading-relaxed">{{ $product->description }}</p>
                    <div class="my-3">
                        @if($product->stock)
                            <span class="inline-flex rounded-full px-3 py-1 text-sm font-semibold leading-tight bg-green-100 text-green-800 mr-2">
                                Em estoque
                            </span>
                        @else
                            <span class="inline-flex rounded-full px-3 py-1 text-sm font-semibold leading-tight bg-red-100 text-red-800 mr-2">
                                Indisponível
                            </span>
                        @endif
                    </div>
                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                        <span class="title-font font-medium text-2xl text-gray-900">${{ $product->price }}</span>
                        @if($product->stock)
                            <a class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Comprar</a>
                        @else
                            <a class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded">Indisponível</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection