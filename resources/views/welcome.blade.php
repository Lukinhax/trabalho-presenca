@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>Algum titulo</h1>
<img src="/img/banner.jpg" alt="">
@if(10 > 15)
<p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Pedro")
<p>O nome é pedro</p>
@elseif($nome == "Marcelo")
<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha com {{ $profissao }}</p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
    @if($i == 2)
    <p>O i é 2</p>
    @endif
    @endfor


    @foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
    @endforeach

    @php
    $name = "João";
    echo $name;
    @endphp

    @endsection