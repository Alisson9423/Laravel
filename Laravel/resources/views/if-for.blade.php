<?php
$num = 20;?>

{{"Exemplo de estrutura condicional"}}

@if($num < 20)
    <p>Número não é menor que  20</p>
    
@elseif($num == 20)
    <p>Número é igual 20</p>
@else
    <p>Número é maior que 20</p>
@endif

{{"Exemplo de estrutura de repetição"}}

{{ "FOR" }}
@for($i=0; $i<20; $i++)

    <p>Valor: {{$i}}</p>
    
@endfor

<?php $k = 0;?>

{{ "WHILE" }}

@while($k < 20)
    <p>Valor: {{$k}}</p>
    <?php $k++;?>
@endwhile

{{ "FOREACH" }}

<?php $array = [1,2,3,4,5]?>

@foreach($array as $v)
    <p>Chave: {{$loop->index}}, Valor: {{$v}}</p>
@endforeach