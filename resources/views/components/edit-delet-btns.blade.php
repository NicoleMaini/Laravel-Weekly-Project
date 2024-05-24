<div class="absolute z-10 end-6 bottom-6 group flex">
    <a href="{{ route('products.edit', ['id' => $attributes->get('prod')]) }}" data-dial-init>
        <span
            class="flex items-center justify-center text-white bg-gray-400 rounded-full w-10 h-10 hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-800  hover:scale-110">
            <span class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor"
                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path
                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                </svg>
            </span>
    </a>
    <form action="{{ route('products.destroy', ['id' => $attributes->get('prod')]) }}" method="POST" class="ms-3">
        @method('DELETE')
        @csrf
        <button
            class="flex items-center justify-center text-white bg-gray-400 rounded-full w-10 h-10 hover:bg-gray-400 dark:bg-gray-600 dark:hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 focus:outline-none dark:focus:ring-gray-800  hover:scale-110">
            <span class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                    fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                    <path
                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                </svg></button>
    </form>
</div>
