@props(['counter', 'title', 'icon'])

<div class="col-md-4 mb-4">
    <div class="card shadow">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col">
                    {{-- 
                        {{ $countService }} 
                       {{ __('admin.service') }}
                        fe-layers
                     --}}
                    <span class="h2 mb-0">{{ $counter }}</span>
                    <p class="small text-muted mb-0">{{ $title }}</p>
                    <span class="badge badge-pill badge-warning">+1.5%</span>
                </div>
                <div class="col-auto">
                    <span class="fe fe-32 {{ $icon }} text-muted mb-0"></span>
                </div>
            </div>
        </div>
    </div>
</div>
