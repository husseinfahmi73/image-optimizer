@props(["nameLink","label","liclass","aclass"])

<li class="{{ $liclass }}">
    <a href={{ $nameLink }} class="{{ $aclass }}">{{ $label }}</a>
</li>
