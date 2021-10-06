<!-- @php
$data = 1000;
$framework = "laravel";
$IDE = "Visual Studio Code";
$platform = "laptop";
$merk = "thinkpad";

$status = 1;
@endphp


<h3>Platform : {{ $platform }}</h3>
<h3>Merk : {{ $merk }}</h3>
<h3>Integrated development environment  : {{ $IDE }}</h3>
<h3>Frame Work : {{ $framework }}</h3>
<h3>Nilai  : {{ $data }}</h3>


<br>
@if($status == 1)
    Status kamu lulus<br>
@else
    Status kamu tidak lulus<br>
@endif


<br> -->

@for ($i = 1; $i <= 10; $i++)
    @if ($i % 2 == 0)
       Angka ke - {{ $i }} adalah bilangan genap<br>
    @else
       Angka ke - {{$i}} adalah bilangan ganjil<br>
    @endif
@endfor

