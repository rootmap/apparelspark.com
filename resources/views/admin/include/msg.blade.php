@if (session('status'))
<div class="alert successPlace alert-success alert-dismissible mb-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
<strong>Well done!</strong> {{ session('status') }}
</div>
<script type="text/javascript">
    setTimeout(function () {
        $('.successPlace').fadeOut('slow');
    }, 5000);
</script>


@endif

@if (count($errors) > 0)


@foreach ($errors->all() as $error)

<div class="alert allDanger alert-danger alert-dismissible mb-2" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>Oh snap!</strong> {{ $error }}
</div>
@endforeach
<script type="text/javascript">
    setTimeout(function () {
        $('.allDanger').fadeOut('slow');
    }, 5000);
</script>




@endif