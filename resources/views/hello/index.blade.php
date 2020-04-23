<ul>
    @php
        $counter=0;
    @endphp

    @while($counter<count($data))
        <li>
            {{$data[$counter]}}
        </li>

        @php($counter++)

    @endwhile
</ul>
