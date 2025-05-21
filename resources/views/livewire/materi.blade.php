<div>
    @if ($materis && $materis->count() > 0)
        <ul>
            @foreach ($materis as $materi)
                <li>
                    <strong>{{ $materi->buku_title }}</strong> — 
                    <a href="{{ asset($materi->buku_pdf) }}" target="_blank">Download PDF</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada materi untuk jurusan ini.</p>
    @endif
</div>
