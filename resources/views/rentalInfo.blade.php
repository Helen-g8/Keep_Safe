<x-layout>
    <style>
        .star-rating {
            direction: rtl;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
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
    </style>

    <div class="min-h-screen bg-gray-100 py-10">
        <h1 class="text-2xl font-bold text-center mb-8 text-purple-800">Reviews</h1>
        <div id="average-rating" class="flex justify-center items-center mb-8 text-lg">
            <span>Average rating:</span>
            <div class="stars text-yellow-500 ml-2">★★★★☆</div>
        </div>

        <div id="reviews" class="flex flex-col items-center"></div>
        <div class="add-review w-4/5 my-10 p-6 bg-gray-200 rounded-lg shadow-md mx-auto">
            <h2 class="text-xl font-semibold mb-4">Add Review</h2>
            <input type="text" id="review-title" placeholder="Review title" class="w-full mb-2 p-2 border border-gray-300 rounded">
            <div class="star-rating flex justify-center mb-4">
                <input type="radio" name="stars" id="star5" value="★★★★★"><label for="star5" class="text-3xl text-gray-400 hover:text-yellow-500 cursor-pointer">★</label>
                <input type="radio" name="stars" id="star4" value="★★★★☆"><label for="star4" class="text-3xl text-gray-400 hover:text-yellow-500 cursor-pointer">★</label>
                <input type="radio" name="stars" id="star3" value="★★★☆☆"><label for="star3" class="text-3xl text-gray-400 hover:text-yellow-500 cursor-pointer">★</label>
                <input type="radio" name="stars" id="star2" value="★★☆☆☆"><label for="star2" class="text-3xl text-gray-400 hover:text-yellow-500 cursor-pointer">★</label>
                <input type="radio" name="stars" id="star1" value="★☆☆☆☆"><label for="star1" class="text-3xl text-gray-400 hover:text-yellow-500 cursor-pointer">★</label>
            </div>
            <textarea id="review-comment" placeholder="Comment" class="w-full mb-4 p-2 border border-gray-300 rounded"></textarea>
            <button onclick="addReview()" class="px-4 py-2 bg-purple-800 text-white rounded hover:bg-purple-900">Add Review</button>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            loadReviews();
        });

        function loadReviews() {
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            const reviewsContainer = document.getElementById('reviews');

            reviews.forEach((review, index) => {
                const reviewDiv = createReviewElement(review, index);
                reviewsContainer.appendChild(reviewDiv);
            });
        }

        function createReviewElement(review, index) {
            const reviewDiv = document.createElement('div');
            reviewDiv.className = 'review bg-white border border-gray-300 rounded-lg mb-4 p-6 w-4/5 shadow-md flex flex-col items-start relative';
            reviewDiv.setAttribute('data-index', index);

            const deleteButton = document.createElement('button');
            deleteButton.textContent = '×';
            deleteButton.className = 'absolute top-2 right-2 text-gray-400 hover:text-red-500 cursor-pointer';
            deleteButton.onclick = () => deleteReview(index);

            const userAvatar = document.createElement('img');
            userAvatar.src = 'https://via.placeholder.com/50';
            userAvatar.className = 'w-12 h-12 rounded-full mr-4';

            const reviewContentDiv = document.createElement('div');
            reviewContentDiv.className = 'review-content flex-grow';

            const reviewTitle = document.createElement('h2');
            reviewTitle.className = 'text-yellow-600 font-semibold';
            reviewTitle.textContent = review.title;

            const reviewStars = document.createElement('div');
            reviewStars.className = 'stars text-yellow-500';
            reviewStars.textContent = review.stars;

            const reviewContent = document.createElement('p');
            reviewContent.textContent = review.content;

            reviewContentDiv.appendChild(reviewTitle);
            reviewContentDiv.appendChild(reviewStars);
            reviewContentDiv.appendChild(reviewContent);

            reviewDiv.appendChild(deleteButton);
            reviewDiv.appendChild(userAvatar);
            reviewDiv.appendChild(reviewContentDiv);

            return reviewDiv;
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
                const reviewDiv = createReviewElement(newReview, reviews.length - 1);

                reviewsContainer.appendChild(reviewDiv);

                document.getElementById('review-title').value = '';
                document.querySelector('input[name="stars"]:checked').checked = false;
                document.getElementById('review-comment').value = '';
            } else {
                alert('Please fill in all fields.');
            }
        }

        function deleteReview(index) {
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            reviews.splice(index, 1);
            localStorage.setItem('reviews', JSON.stringify(reviews));
            document.getElementById('reviews').innerHTML = '';
            loadReviews();
        }
    </script>
</x-layout>
