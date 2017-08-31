<form class="form" method="post" action="{{route('site.client.store')}}">
    <div class="form-group"> 
        <label for="valor">Valor</label>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="value" class="form-control" placeholder="Valor"> 
    </div>

    <button class="btn btn-primary">Incluir&nbsp;<i class="fa fa-fw fa-pencil-square-o"></i></button>
</form>
