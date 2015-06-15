
<img src="uploads/images/logo.png" class="logo">
<nav>
        <ul>
                @foreach($menus as $item)
                    <li>
                        <a href="{{ $item->url }}">{{ $item->title }}</a>
                    </li>
                @endforeach
        </ul>

</nav>
<div class="bgmenu">

</div>