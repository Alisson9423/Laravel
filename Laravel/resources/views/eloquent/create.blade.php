<form class="form" method="post" action="{{route('eloquent.client.store')}}">
    
        <label for="valor">Nome</label>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="name" class="form-control">
        <label for="valor">Endereço</label>
        <input type="text" name="adress" class="form-control"> 
   

    <button type="submit">Incluir&nbsp;</button>
</form>
