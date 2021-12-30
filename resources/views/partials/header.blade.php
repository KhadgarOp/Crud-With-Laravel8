@auth
<div class="navbar navbar-expand-lg bg-dark navbar-dark ps-5 pe-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/dashboard">Dashboard</a>
    </div>
</div>
@else
<div class="navbar navbar-expand-lg bg-dark navbar-dark ps-5 pe-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Dashboard</a>
    </div>
</div>
@endauth