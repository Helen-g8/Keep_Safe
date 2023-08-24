<x-layout>
    <div class="bg-orange-300 min-h-screen flex flex-col items-center justify-center">
        <div class="flex justify-around items-center mb-4">
            <div class="mb-4">
                <label class="text-lg font-bold">Rol</label>
                <p class="text-xl">tenant</p>
            </div>
            <div class="mb-4">
                <label class="text-lg font-bold">Edad</label>
                <p class="text-xl">18</p>
            </div>
        </div>

        <img src="{{ asset('profile.jpg') }}" alt="arrendatario" width="300" height="400"
            class="max-w-lg mx-auto rounded-lg shadow-lg mb-4">

        <div class="flex justify-center items-center">
            <div>
                <div class="stars">
                    <span class="star" onclick="rate(1)"> &#9733;</span>
                    <span class="star" onclick="rate(2)"> &#9733;</span>
                    <span class="star" onclick="rate(3)"> &#9733;</span>
                    <span class="star" onclick="rate(4)"> &#9733;</span>
                    <span class="star" onclick="rate(5)"> &#9733;</span>
                </div>
                <p id="selectedRating" class="mt-2 text-lg font-semibold text-yellow-500"></p>
            </div>
        </div>
    </div>

    <style>
        .stars {
            display: inline-block;
            font-size: 25px;
            cursor: pointer;
        }

        .star {
            color: gray;
        }

        .filled-star {
            color: gold;
        }
    </style>

    <script>
        let selectedRating = 0;

        function rate(rating) {
            selectedRating = rating;
            updateStars();
            document.getElementById('selectedRating').textContent = `Votación: ${rating} estrellas`;
        }

        function updateStars() {
            const stars = document.getElementsByClassName('star');
            for (let i = 0; i < 5; i++) {
                if (i < selectedRating) {
                    stars[i].classList.add('filled-star');
                } else {
                    stars[i].classList.remove('filled-star');
                }
            }
        }
    </script>
</x-layout>

