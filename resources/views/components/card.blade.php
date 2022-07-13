<div {{ $attributes->merge(['class'=>'card']) }}>
    <h5 class="card-header bg-primary">{{ $header }}</h5>
    <div class="card-body">
       {{ $slot }}
    </div>
    <div class="card-footer">
        copyright&copy;2022. All Rights Reserved
    </div>
</div>
