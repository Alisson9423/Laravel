<h1>Listagem de Clientes</h1>
<a href="{{ route('eloquent.client.create') }}">Cria Novo Cliente</a>
<br/>
<br/>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Address</td>
        </tr>
    <thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td> {{ $client->id }}</td>
            <td> {{ $client->name }}</td>
            <td> {{ $client->adress }}</td>
        </tr>
        @endforeach
    </tbody>    
</table>