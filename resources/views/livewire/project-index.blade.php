<div>
    @if($projects->count())
    @else
        <div class="w-1/4 mx-auto mt-32 border border-dark-600 bg-dark-200 text-dark-600 rounded-xl p-8 text-center filter blur-{{ $blur }}">
            <div>
                <div>
                    No projects to display!
                </div>
                <div class="mt-6 mb-6">
                    <button wire:click="toggleForm" class="rounded-xl p-4 bg-dark-600 text-dark-100 font-semibold hover:bg-dark-500">Create New Project</a>
                </div>
            </div>
        </div>
        @if($showForm)
            <div class="z-50 w-full h-full flex flex-col justify-center items-center backdrop-blur-lg">
                <div class="backdrop-blur-sm z-50 w-1/2 mx-auto border border-dark-600 rounded-xl bg-dark-200 p-6">
                    <form wire:submit="create" class="p-6">
                    </form>
                </div>
            </div>
        @endif
    @endif
</div>
