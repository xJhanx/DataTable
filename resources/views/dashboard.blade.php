<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if($errors->any())
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
    
        <div class="toast__container">
            <div class="toast__cell">

                <div class="toast toast--yellow add-margin">
                    <div class="toast__icon">
                        <svg version="1.1" class="toast__svg" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 301.691 301.691"
                            style="enable-background:new 0 0 301.691 301.691;" xml:space="preserve">
                            <g>
                                <polygon points="119.151,0 129.6,218.406 172.06,218.406 182.54,0  "></polygon>
                                <rect x="130.563" y="261.168" width="40.525" height="40.523"></rect>
                            </g>
                        </svg>
                    </div>
                    <div class="toast__content">
                        <p class="toast__type">Error</p>
                        <p class="toast__message">{{$errors->first()}}</p>
                    </div>
                    <div class="toast__close">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15.642 15.642"
                            xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 15.642 15.642">
                            <path fill-rule="evenodd"
                                d="M8.882,7.821l6.541-6.541c0.293-0.293,0.293-0.768,0-1.061  c-0.293-0.293-0.768-0.293-1.061,0L7.821,6.76L1.28,0.22c-0.293-0.293-0.768-0.293-1.061,0c-0.293,0.293-0.293,0.768,0,1.061  l6.541,6.541L0.22,14.362c-0.293,0.293-0.293,0.768,0,1.061c0.147,0.146,0.338,0.22,0.53,0.22s0.384-0.073,0.53-0.22l6.541-6.541  l6.541,6.541c0.147,0.146,0.338,0.22,0.53,0.22c0.192,0,0.384-0.073,0.53-0.22c0.293-0.293,0.293-0.768,0-1.061L8.882,7.821z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Button trigger modal -->
    <div class="m-3 d-flex justify-content-end">

        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModalAdd">
            Add <i class="bi bi-plus-circle"></i>
        </button>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        @include('forms.add')

    </div>


    <!-- Modal View -->
    <div class="modal fade" id="ModalView" tabindex="-1" role="dialog" aria-labelledby="ModalView"
        aria-hidden="true">
        @include('forms.view')
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="ModalView"
        aria-hidden="true">
        @include('forms.edit')
    </div>





    @include('layouts.table')

</x-app-layout>
