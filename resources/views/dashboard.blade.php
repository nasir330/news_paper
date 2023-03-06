<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-header />

    <body>

        <div class="row d-flex justify-content-center">
            @if(session()->has('success'))
            <div class="row">
                <span>{{session('success')}}</span>
            </div>
            @endif
            <div class="col-6 card mt-4">
                <div class="card-header text-center">
                    <h4>News Uploading</h4>
                </div>
                <table>
                    <tbody>
                        <form action="{{route('firstRow')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <td>
                                    <label for="">1st row </label>
                                </td>
                                <td class="text-center">
                                    <input type="hidden" name="row" value="1">
                                    <input type="file" name="news">
                                </td>
                                <td style="width:20%;">
                                    <button class="btn btn-primary">Upload</button>
                                </td>
                            </tr>
                        </form>
                        <form action="{{route('secondRow')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <td>
                                    <label for="">2nd row </label>
                                </td>
                                <td class="text-center">
                                    <input type="hidden" name="row" value="2">
                                    <input type="file" name="news">
                                </td>
                                <td style="width:20%;">
                                    <button class="btn btn-primary">Upload</button>
                                </td>
                            </tr>
                        </form>
                        <form action="{{route('thirdRow')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <td>
                                    <label for="">2rd row </label>
                                </td>
                                <td class="text-center">
                                    <input type="hidden" name="row" value="3">
                                    <input type="file" name="news">
                                </td>
                                <td style="width:20%;">
                                    <button class="btn btn-primary">Upload</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>


            </div>
        </div>
        <x-footer />
</x-app-layout>