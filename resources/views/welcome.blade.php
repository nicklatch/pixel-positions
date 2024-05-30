<x-layout>
    <div class="space-y-10">
        <section class="text-center space-y-6 pb-10 pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="">
                <label for="search_bar" class="sr-only">Search for a job title</label>
                <input type="search"
                       name="search_bar"
                       id="search_bar"
                       placeholder="Backend Engineer"
                       class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
                <span class="w-3 h-3 bg-white sm:inline-block sm:relative sm:right-10 hidden"></span>
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                <x-job-card-wide/>
                <x-job-card-wide/>
                <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
