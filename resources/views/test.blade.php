<x-layout>

    <form class="flex flex-col items-start justify-start" action="/test" method="post">
        @csrf
        <label for="departure">Departure</label>
        <input type="date" id="departure" name="departure">
        <label for="arrival">Arrival</label>
        <input type="date" id="arrival" name="arrival">
        <button type="submit">Enter</button>
    </form>

</x-layout>
