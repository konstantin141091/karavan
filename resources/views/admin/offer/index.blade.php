<h1>Список откликов</h1>


@forelse ($offers as $offer)
    <ul>
            @if($offer->name)
            <li>{{ $offer->name }}</li>
                @else
                <li>Имя не указано</li>
            @endif

            @if($offer->email)
            <li>{{ $offer->email }}</li>
                @else
                    <li>Email не указан</li>
            @endif

            @if($offer->phone)
                <li>{{ $offer->phone }}</li>
                @else
                    <li>Телефон не указан</li>
            @endif

            @if($offer->vacancy)
                <li>{{ $offer->vacancy }}</li>
                @else
                    <li>Должность не указана</li>
            @endif

            @if($offer->file)
                <li><a href="{{ route('admin.offer.uploadSummary', $offer) }}" target="_blank">скачать резюме</a></li>
                @else
                    <li>Резюме нет</li>
            @endif
    </ul>
@empty
    <p>нет ни одного отклика</p>
@endforelse

