
<li class="nav-item @if(request()->route()->getPrefix() == $prefix) active @endif" >
    <a data-bs-toggle="collapse" href="#base" @if(request()->route()->getPrefix() != $prefix) class="collapsed" @endif
        @if(request()->route()->getPrefix() != $prefix) aria-expanded="false" @else aria-expanded="true" @endif>
        {{ $slot }}
        <span class="caret"></span>
    </a>
    <div class="collapse @if(request()->route()->getPrefix() == $prefix) active show @endif" id="base">
        <ul class="nav nav-collapse">
           @foreach ($sub as $key => $item)
            <li @if(request()->routeIs($item) == $item) class="active" @endif>
                <a href="{{ route($item) }}">
                    <span class="sub-item">{{ $key }}</span>
                </a>
            </li>
           @endforeach
        </ul>
    </div>
</li>
