<x-layout>

    <div class="flex justify-around items-center">
        <br>
        <label>Perfil</label>
        <br>
        <label>{{ $user->age }}</label>
        <br>
        <label>{{ $user->role->name }}</label>
        <br>
        <label>{{ $user->phone }}</label>
        <br>
        <label>{{ $user->dui }}</label>
        <br>
    </div>

    <img src="{{ asset('profile.jpg') }}" alt="arrendatario" width="300" height="400" class="h-auto max-w-lg mx-auto ">



    <div class="flex justify-center items-center">

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
        </head>

        <body>




            <div class="stars ">
                <span class="star" onclick="rate(1)">&#9733;</span>
                <span class="star" onclick="rate(2)">&#9733;</span>
                <span class="star" onclick="rate(3)">&#9733;</span>
                <span class="star" onclick="rate(4)">&#9733;</span>
                <span class="star" onclick="rate(5)">&#9733;</span>
            </div>

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
    </div>

</x-layout>
