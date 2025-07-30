@props(['thumbnail', 'title', 'createdAt', 'updatedAt', 'views', 'previewText', 'url'])

<a class="service-card" href="/{{ $url }}">
    <div class="service-card__thumbnail">
        <img src="/{{ $thumbnail }}" alt="{{ $title }}">
    </div>

    <h2 class="service-card__title">{{ $title }}</h2>

    <div class="service-card__meta">
        <div class="service-card__meta-item">📅 {{ $createdAt->format("d-m-Y") }}</div>
        <div class="service-card__meta-item">🔄 {{ $updatedAt->format("d-m-Y") }}</div>
        <div class="service-card__meta-item">
            👁 {{ $views }}
        </div>
    </div>

    <div class="service-card__preview">{{ $previewText }}</div>
</a>
