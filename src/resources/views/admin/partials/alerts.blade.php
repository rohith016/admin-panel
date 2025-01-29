<div style="margin: 20px;">
    @if (session('sucess'))
    <div class="col-12">
        <div class="callout callout-success">
            {{ session('sucess') }}
        </a>
        </div>
    </div>
@elseif (session('error'))
    <div class="col-12">
        <div class="callout callout-danger">
            {{ session('error') }}
        </a>
        </div>
    </div>
@elseif (session('info'))
    <div class="col-12">
        <div class="callout callout-info">
            {{ session('info') }}
        </a>
        </div>
    </div>
@elseif (session('warning'))
    <div class="col-12">
        <div class="callout callout-info">
            {{ session('warning') }}
        </a>
        </div>
    </div>
@elseif (session('status'))
    <div class="col-12">
        <div class="callout callout-success">
            {{ session('status') }}
        </a>
        </div>
    </div>

@endif


