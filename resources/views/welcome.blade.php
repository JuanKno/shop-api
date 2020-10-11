@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Tempora incidunt aut quasi, facere molestias qui tempore hic distinctio maiores
                        ad pariatur cupiditate
                        consectetur nam odit commodi officia doloremque, est harum repellendus fugit atque quae
                        repudiandae dolorem? Sint, aperiam sapiente exercitationem ab, aut explicabo alias,
                        hic quibusdam autem molestiae et aliquid.</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection