
<!DOCTYPE html>
<html>
<head>
    <title>Map with Blocks</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/map.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="map">
        @for ($i = 0; $i < 20; $i++)
            <div class="block" data-x="{{ $i }}" data-y="{{ $i }}"></div>
            
        @endfor

        {{-- <div id="map">
            @foreach ($blocks as $row)
                @foreach ($row as $block)
                    <div class="block @if ($block === 'empty') empty @endif" data-x="{{ $loop->index }}" data-y="{{ $loop->parent->index }}"></div>
                @endforeach
            @endforeach
        </div> --}}
        
    </div>


    <script src="{{ asset('js/map.js') }}"></script>
</body>
</html>
