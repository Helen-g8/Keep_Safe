<x-layout>

    <div class="grid md:grid-cols-1 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="floating_first_name" id="floating_first_name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_first_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                name</label>
        </div>

        <div class="grid md:grid-cols-1 md:gap-6">
            <div class="relative z-0 w-full mb-6 group">
                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required />
                <label for="floating_phone"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                    number (123-456-7890)</label>
            </div>

            <div class="grid md:grid-cols-1 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required />
                    <label for="floating_phone"
                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone
                        number (123-456-7890)</label>
                </div>
                <div class="grid md:grid-cols-1 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="floating_first_name" id="floating_first_name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_first_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                name</label>
        </div>
        <div class="grid md:grid-cols-1 md:gap-6">
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="floating_first_name" id="floating_first_name"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="floating_first_name"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                name</label>
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
</head>
<body>

<p>Califica este producto:</p>

<div class="stars">
  <span class="star" onclick="rate(1)">&#9733;</span>
  <span class="star" onclick="rate(2)">&#9733;</span>
  <span class="star" onclick="rate(3)">&#9733;</span>
  <span class="star" onclick="rate(4)">&#9733;</span>
  <span class="star" onclick="rate(5)">&#9733;</span>
</div>

<p id="selectedRating">Votación: </p>

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
