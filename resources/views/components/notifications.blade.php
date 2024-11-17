<div class="container">
    @if (session('status'))
        <div id="notifications">
            <div class="note alert alert-success" role="alert">
                <h2>{{ __(session('status')) }}</h2>
            </div>
        </div>
    @endif
</div>
