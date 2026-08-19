@props([
    'title',
    'description',
    'image',
    'category' => 'IMMOBILIER',
    'date' => null,
])

<x-home.article-card
    :title="$title"
    :image="$image"
    :description="$description"
    :category="$category"
    :date="$date"
/>
