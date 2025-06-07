<!DOCTYPE html>
<html><head>
    <title>Reviews – The Hunger Games</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #1c1c1c;
            color: #f1f1f1;
        }
        .review-card {
            background-color: #292929;
            border-left: 4px solid #ffcc00;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }
        h1, h3 {
            color: #ffcc00;
        }
        .back-link {
            color: #ffcc00;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Schema.org JSON-LD with multiple reviews -->
   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Movie",
  "name": "The Hunger Games",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "7.2",
    "reviewCount": "3",
    "bestRating": "10"
  },
  "review": [
    {
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "Roger Ebert"
      },
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "4",
        "bestRating": "5"
      },
      "reviewBody": "A thrilling adaptation that delivers a sharp emotional edge and gripping action."
    },
    {
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "Rolling Stone"
      },
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "3.5",
        "bestRating": "5"
      },
      "reviewBody": "The Hunger Games succeeds more often than it falters, thanks to Jennifer Lawrence’s incredible performance."
    },
    {
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "IGN"
      },
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "8",
        "bestRating": "10"
      },
      "reviewBody": "A smart, exciting dystopian sci-fi film that remains true to its source material."
    }
  ]
}
</script>

</head>
<body>

<div class="container py-5">

    <h1 class="mb-4">📝 Reviews for <em>The Hunger Games</em></h1>

    <div class="review-card">
        <h3>Roger Ebert</h3>
        <p><strong>Rating:</strong> ⭐⭐⭐⭐ (4/5)</p>
        <p><em>"A thrilling adaptation that delivers a sharp emotional edge and gripping action."</em></p>
    </div>

    <div class="review-card">
        <h3>Rolling Stone</h3>
        <p><strong>Rating:</strong> ⭐⭐⭐⭐ (3.5/5)</p>
        <p><em>"The Hunger Games succeeds more often than it falters, thanks to Jennifer Lawrence’s incredible performance."</em></p>
    </div>

    <div class="review-card">
        <h3>IGN</h3>
        <p><strong>Rating:</strong> ⭐⭐⭐⭐⭐⭐⭐⭐ (8/10)</p>
        <p><em>"A smart, exciting dystopian sci-fi film that remains true to its source material."</em></p>
    </div>

    <a href="/" class="back-link d-block mt-4">← Back to Movie</a>

</div>



</body></html>
