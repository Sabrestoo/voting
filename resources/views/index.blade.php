<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Category one">category One</option>
                <option value="Category two">Category Two</option>
                <option value="Category three">Category Three</option>
                <option value="Category four">category Four</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="filter one">Filter One</option>
                <option value="filter two">Filter Two</option>
                <option value="filter three">Filter Three</option>
                <option value="filter four">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3">
            <input type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none">

        </div>
    </div>
</x-app-layout>
