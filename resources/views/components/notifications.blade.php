<div class="container">
    @if (session('status'))
        <div id="notifications">
            <div class="note alert alert-success" role="alert">
                <h2>{{ __(session('status')) }}</h2>
                @if (session('status2'))
                    <h2>{{ __(session('status2')) }}</h2>
                @endif
            </div>
        </div>
    @endif
</div>
