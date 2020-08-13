<h3 class="font-bold text-xl nb-4">Friends</h3>

<ul>
    @foreach (range(1, 8) as $index)
    <li>
        <div class="flex items-center text-sm">
            <img
                src="https://i.pravatar.cc/40"
                alt=""
                class="rounded-full mr-4"
            >
            Oindrila Ghosal
        </div>
    </li>
    @endforeach
</ul>
