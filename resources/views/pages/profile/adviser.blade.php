@extends('layouts.account')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ __('global.Adviser packages') }}</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-body card-body--padding--2">
            <div class="vehicles-list vehicles-list--layout--account">
                <div class="vehicles-list__body">
                    @foreach($packages as $item)
                        <div class="vehicles-list__item">
                        <div class="vehicles-list__item-info">
                            <div class="vehicles-list__item-name">{{ $item->name }}</div>
                            <div class="vehicles-list__item-details">{{ $item->description }}</div>
                            <div class="vehicles-list__item-links">
                                <a href="{{ route('adviser.package.show', $item->id) }}">{{ __('global.show parts') }}</a>
                            </div>
                        </div>
                        <button type="button" class="vehicles-list__item-remove">
                            <svg width="16" height="16">
                                <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                            </svg>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr>
            <a href="{{ route('affiliate') }}" class="btn btn-primary">{{ __('global.how to add new package') }}</a>
        </div>




@endsection
