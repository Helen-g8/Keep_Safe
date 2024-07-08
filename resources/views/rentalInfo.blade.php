<x-layout>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 20px;
            color: #6a1b9a; /* Purple color */
        }

        #average-rating {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .stars {
            color: gold;
            margin-left: 10px;
            font-size: 1.5rem;
        }

        #reviews {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .review {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 10px 0;
            padding: 20px;
            width: 80%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .review img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .review-content {
            flex-grow: 1;
        }

        .review h2 {
            margin-top: 0;
            font-size: 1.2rem;
            color: #fbc02d; /* Yellow color */
        }

        .add-review {
            width: 80%;
            margin: 20px 0;
            padding: 20px;
            background-color: #e9e9e9;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .add-review input, .add-review textarea {
            width: 100%;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .add-review button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #6a1b9a; /* Purple color */
            color: white;
            cursor: pointer;
        }

        .add-review button:hover {
            background-color: #4a0072;
        }

        .star-rating {
            display: flex;
            direction: rtl;
            font-size: 2em;
            justify-content: center;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #ddd;
            font-size: 2rem;
            padding: 0;
        }

        .star-rating input[type="radio"]:checked ~ label,
        .star-rating input[type="radio"]:checked ~ label ~ label {
            color: gold;
        }

        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: gold;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .review-content {
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Reviews</h1>
    <div id="average-rating">
        <span>Average rating:</span>
        <div class="stars">★★★★☆</div>
    </div>
    <div id="reviews"></div>
    <div class="add-review">
        <h2>Add Review</h2>
        <input type="text" id="review-title" placeholder="Review title">
        <div class="star-rating">
            <input type="radio" name="stars" id="star5" value="★★★★★"><label for="star5">★</label>
            <input type="radio" name="stars" id="star4" value="★★★★☆"><label for="star4">★</label>
            <input type="radio" name="stars" id="star3" value="★★★☆☆"><label for="star3">★</label>
            <input type="radio" name="stars" id="star2" value="★★☆☆☆"><label for="star2">★</label>
            <input type="radio" name="stars" id="star1" value="★☆☆☆☆"><label for="star1">★</label>
        </div>
        <textarea id="review-comment" placeholder="Comment"></textarea>
        <button onclick="addReview()">Add Review</button>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            loadReviews();
        });

        function loadReviews() {
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            const reviewsContainer = document.getElementById('reviews');

            reviews.forEach(review => {
                const reviewDiv = document.createElement('div');
                reviewDiv.className = 'review';

                const userAvatar = document.createElement('img');
                userAvatar.src = 'https://via.placeholder.com/50';

                const reviewContentDiv = document.createElement('div');
                reviewContentDiv.className = 'review-content';

                const reviewTitle = document.createElement('h2');
                reviewTitle.textContent = review.title;

                const reviewStars = document.createElement('div');
                reviewStars.className = 'stars';
                reviewStars.textContent = review.stars;

                const reviewContent = document.createElement('p');
                reviewContent.textContent = review.content;

                reviewContentDiv.appendChild(reviewTitle);
                reviewContentDiv.appendChild(reviewStars);
                reviewContentDiv.appendChild(reviewContent);

                reviewDiv.appendChild(userAvatar);
                reviewDiv.appendChild(reviewContentDiv);

                reviewsContainer.appendChild(reviewDiv);
            });
        }

        function addReview() {
            const title = document.getElementById('review-title').value;
            const stars = document.querySelector('input[name="stars"]:checked').value;
            const comment = document.getElementById('review-comment').value;

            if (title && stars && comment) {
                const reviews = JSON.parse(localStorage.getItem('reviews')) || [];

                const newReview = {
                    title: title,
                    stars: stars,
                    content: comment
                };

                reviews.push(newReview);
                localStorage.setItem('reviews', JSON.stringify(reviews));

                const reviewsContainer = document.getElementById('reviews');

                const reviewDiv = document.createElement('div');
                reviewDiv.className = 'review';

                const userAvatar = document.createElement('img');
                userAvatar.src = 'https://via.placeholder.com/50';

                const reviewContentDiv = document.createElement('div');
                reviewContentDiv.className = 'review-content';

                const reviewTitle = document.createElement('h2');
                reviewTitle.textContent = title;

                const reviewStars = document.createElement('div');
                reviewStars.className = 'stars';
                reviewStars.textContent = stars;

                const reviewContent = document.createElement('p');
                reviewContent.textContent = comment;

                reviewContentDiv.appendChild(reviewTitle);
                reviewContentDiv.appendChild(reviewStars);
                reviewContentDiv.appendChild(reviewContent);

                reviewDiv.appendChild(userAvatar);
                reviewDiv.appendChild(reviewContentDiv);

                reviewsContainer.appendChild(reviewDiv);

                document.getElementById('review-title').value = '';
                document.querySelector('input[name="stars"]:checked').checked = false;
                document.getElementById('review-comment').value = '';
            } else {
                alert('Please fill in all fields.');
            }
        }
    </script>


</x-layout>
