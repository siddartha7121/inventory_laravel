<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
    <ul class="nav bg-light justify-content-center">
        @for ($x = 0; $x < count($data); $x = $x + 1)
            @if ($x == $index)
                <li class="nav-item">
                    <a class="nav-link active" href="{{ $data[$x]['href'] }}">
                        <button class="btn bg-onclick">{{ $data[$x]['name'] }}</button>
                    </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link active" href="{{ $data[$x]['href'] }}">
                        <button class="btn common-button">{{ $data[$x]['name'] }}</button>
                    </a>
                </li>
            @endif
        @endfor
    </ul>
</div>
